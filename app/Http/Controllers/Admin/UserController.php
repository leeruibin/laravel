<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
class UserController extends Controller
{
  private function clean($input){
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
  }

  public function index()
{
  $user = Auth::user();
  if($user->admin_state==0)
    return redirect()->route('user_home');
  return view('admin/user/index')->withUsers(User::all());
}

    public function create()
{
    return view( 'admin/user/create');
}

      public function store(Request $request) // Laravel 的依赖注入系统会自动初始化我们需要的 Request 类
  {
  // 数据验证
  $this->validate($request, [
      'name' => 'required', // 必填、在 articles 表中唯一、最大长度 255
      'email'=>'required',
      'password'=>'required',
      'password_confirmation' => 'required', // 必填
  ]);


  $user = new User; //
  $user->name = $this->clean($request->get('name'));

  $user->email = $this->clean($request->get('email'));
  $user->password = bcrypt($request->get('password'));

  $is_exist = User::where('email', $request->get('email'))->first();
  if($is_exist != null||($request->get('password')!=$request->get('password_confirmation')))
    return redirect()->back()->withInput()->withErrors('保存失败！');

  // 将数据保存到数据库，通过判断保存结果，控制页面进行不同跳转
    if ($user->save()) {
      $user = Auth::user();
      if($user->admin_state == 0)
        return redirect( '/home');
      else {
        return redirect('admin/comment'); // 保存成功，跳转到 文章管理 页
      }

    } else {
        // 保存失败，跳回来路页面，保留用户的输入，并给出提示
        return redirect()->back()->withInput()->withErrors('保存失败！');
    }
  }

        public function edit($id){
        return  view('admin/user/edit')->withUser(User::find($id));
        }

        public function update(Request $request, $id)
        {
            $this->validate($request, [

            ]);

            $user = User::find($id);
            if($request->get('name') != null)
              $user->name = $this->clean($request->get('name'));
            if($request->get('email') != null)
              $user->email = $this->clean($request->get('email'));
            if($request->get('password') != null){
              $user->password = bcrypt($request->get('password'));
            }

            $is_exist = User::where('email', $request->get('email'))->first();
            if($is_exist != null||($request->get('password')!=$request->get('password_confirmation')))
              return redirect()->back()->withInput()->withErrors('保存失败！');

            if ($user->save()) {
              $user = Auth::user();
              if($user->admin_state == 0)
                return redirect( '/home');
              else {
                return redirect('admin/user'); // 保存成功，跳转到 文章管理 页
              }

            } else {
                return redirect()->back()->withInput()->withErrors('更新失败！');
            }
        }

        public function destroy($id)
        {
            User::find($id)->delete();
            return redirect()->back()->withInput()->withErrors('删除成功！');
        }

        public function adminState($id){
            $user = User::find($id);
            $user->admin_state = !$user->admin_state;
            if($user->save())
              return redirect('admin/user');
            else {
              return redirect()->back()->withInput()->withErrors('授权失败！');

            }
        }
}
