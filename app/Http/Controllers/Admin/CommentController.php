<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;
use App\Article;
use Auth;
class CommentController extends Controller
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
    $comments = Comment::paginate(5);
    if($user->admin_state==0)
      return redirect()->route('user_home');
    return view('admin/comment/index')->withComments($comments);
  }

    public function create()
{
    return view('admin/comment/create');
}

      public function store(Request $request) // Laravel 的依赖注入系统会自动初始化我们需要的 Request 类
  {
  // 数据验证
  $this->validate($request, [
      'article_id' => 'required', //
      'body' => 'required', // 必填
  ]);
    if( !is_numeric($request->get('article_id')) )//防止输入非数字
      return redirect()->back()->withInput()->withErrors('保存失败！');

  $article = Article::where('id', $request->get('article_id'))->first();
  if($article == null){
    return redirect()->back()->withInput()->withErrors('保存失败！');
  }


  // 通过 Comment Model 插入一条数据进 comments 表
  $comment = new Comment; // 初始化 Article 对象

  $comment->article_id = $request->get('article_id'); // 将 POST 提交过了的 title 字段的值赋给 comment 的 article_id 属性
  $comment->content = $this->clean($request->get('body')); // 同上
  $comment->nickname = $request ->user( )->name;
  $comment->email = $request ->user( )->email;
  $comment->user_id = $request->user()->id;

  // 将数据保存到数据库，通过判断保存结果，控制页面进行不同跳转
  if ($comment->save()) {
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
          return  view('admin/comment/edit')->withComment(Comment::find($id));
        }

        public function update(Request $request, $id)
        {
            $this->validate($request, [

                'body' => 'required',
            ]);

            $comment = Comment::find($id);

            $comment->content = $this->clean($request->get('body')); // 同上

            if ($comment->save()) {
              $user = Auth::user();
              if($user->admin_state == 0)
                return redirect( '/');
              else {
                return redirect('admin/comment'); // 保存成功，跳转到 文章管理 页
              }

            } else {
                return redirect()->back()->withInput()->withErrors('更新失败！');
            }
        }

        public function destroy($id)
        {
            Comment::find($id)->delete();
            return redirect()->back()->withInput()->withErrors('删除成功！');
        }
}
