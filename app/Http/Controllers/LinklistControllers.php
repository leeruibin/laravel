<?php
namespace App\Http\Controllers;
use Cookie;
include 'MyLinkedlist.php';



use Illuminate\Http\Request;
use DB;
use Auth;
use Response;
/**
 *
 */
class LinklistControllers extends Controller
{
  // var $able = array('0' => 'lee','1'=>'rui','2'=>'bin' );
  // var $list = array('1');
  // var $list_length = 0;
  // var $MyList = null;
  // private $testList = new MyLinkedlist();
  function __construct()
  {
    // $this->list = array('1','2','3');
    // $myArr = array('i','am','little','bean');
    // $this->MyList = new MyLinkedlist($myArr);
  }

  //构造页面
  public function construct(){
    return view('InputLinklist');
  }

  //插入页面
  public function insert(){
    return view('Insert_element');
  }

  //push页面
  public function push(){
    return view('Push_element');
  }

  //pop页面
  public function pop(){
    return view('Pop_element');
  }

  //删除页面
  public function delete(){
    return view('Delete_element');
  }

  //构造回复
  public function construct_request(Request $request){
    //把带空格的字符串转换为数组
    $input_str = $request->input('list_construct');

    // echo $input_str;
    $arr = explode(' ',$input_str);
    foreach($arr as $v){ echo $v."<br />\n";}
    // Cookie::forget('user');
    $user = Cookie::make('user',$arr,30);
    return Response::make()->withCookie($user);
  }

  //插入回复
  public function insert_request(Request $request){
    $input_index = $request->input('insert_location');
    $input_element = $request->input('insert_element');
    $value = $request->cookie('user');
    if($input_index>count($value)||$input_index<0){
      echo "插入的位置不对";
    }
    else{
      for($i = count($value)-1;$i>=$input_index;$i--){
        $value[$i+1]=$value[$i];
      }
      $value[$input_index]=$input_element;
      $user = Cookie::make('user',$value,30);
      return Response::make()->withCookie($user);
    }
  }

  //pop操作回复
  public function pop_request(Request $request){
    $value = $request->cookie('user');
    if($value[0] == ''){
      echo "暂无链表";
    }
    else {
      $the_element = array_pop($value);
      echo $the_element;
      $user = Cookie::make('user',$value,30);
      return Response::make()->withCookie($user);
    }
  }

  //删除操作回复
  public function delete_request(Request $request){
    $input = $request->input('deleta_location');
    $value = $request->cookie('user');
    if($value[0] == ''){
      echo "暂无链表";
    }
    else if($input > count($value) || $input < 0){
      echo "输入的位置错误";
    }
    else{
      for($i = $input-1;$i<count($value)-1;$i--){
        $value[$i]=$value[$i+1];
      }
      array_pop($value);
      $user = Cookie::make('user',$value,30);
      return Response::make()->withCookie($user);
    }
  }

  //push操作回复
  public function push_request(Request $request){
    $input = $request->input('insert_element');
    $value = $request->cookie('user');
    array_push($value,$input);
    $user = Cookie::make('user',$value,30);
    return Response::make()->withCookie($user);
  }
  //输出整个链表
  public function print_list(Request $request){
    $value = $request->cookie('user');

    if(count($value)==0||$value[0] == ''){
      echo "暂无链表";
    }
    else {
      return view('Show_element')->with('MyList',$value);
    }
    //return view('Show_element')->with('list',$this->MyList);
  }

  //返回链表的长度
  public function size(Request $request){
    $value = $request->cookie('user');
    if(count($value)==0||$value[0]=='')
    {
      echo "当前为空链表";
      return ;
    }
    return view('Size_element')->with('len',count($value));
  }

  //测试页面
  public function test(Request $request){
    // $myCookie = array('1' =>'lee' ,'2' => 'rui' );
    // $my = Cookie::make('my',$myCookie,30);
    // $value = $request->cookie('user');
    // echo $value[0];
    // echo count($value);
    //
    // return view('test',['fuck'=>'fuck you']);//View::make()->withCookie($my);//->withCookie($my);
    // return 'hello who are you.';



    $str = "asd asd asdsdsd asqwe dxcas ";
    $arr = explode(' ',$str);


    foreach($arr as $v){ echo $v."<br />\n";}
  }
}





 ?>
