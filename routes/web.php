<?php


use Illuminate\Http\Request;
use App\Article;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//获得welcome引导页面
Route::get('/',function(){
  $user = Auth::user();
  return view('welcome')->with('user',$user);
});

Route::get('fuck',function(){
  return view('fuck');
});

Route::get('now', function () {
    return date("Y-m-d H:i:s");
});

Route::get('home','HomeController@index')->name('user_home');

Route::get('search',function(Request $request){
  $id = $request->get('search' );
  $user = Auth::user();
  if( is_numeric($id) ){
    if(Article::find($id) != null ){
      return view('article/show')->withArticle(Article::with('hasManyComments')->find($id))->with('user',$user);
    }
  }
});

Route::get('article/{id}', 'ArticleController@show');

Route::resource('comment','CommentController');
Route::resource('article','ArticleController');
Route::resource('user','UserController');
//更好的后台管理功能
Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::get('/','HomeController@index');
    Route::resource('article', 'ArticleController');
    Route::resource('comment','CommentController');
    Route::resource('user','UserController');
    Route::get('/user/{id}/state','UserController@adminState');
});

Route::get('/info', function(){
  phpinfo();
});
//链表实现区域

Route::get('LinkIndex/info',function(){
  return view('LinkIndexinfo');
});

Route::get('/list/construct','LinklistControllers@construct');

Route::get('list/insert','LinklistControllers@insert');

Route::get('list/delete','LinklistControllers@delete');

Route::get('list/push','LinklistControllers@push');

Route::get('list/pop','LinklistControllers@pop');

Route::get('list/print','LinklistControllers@print_list');

Route::get('list/size','LinklistControllers@size');

Route::post('list/construct_request','LinklistControllers@construct_request');

Route::post('list/insert_request','LinklistControllers@insert_request');

Route::post('list/pop_request','LinklistControllers@pop_request');

Route::post('list/push_request','LinklistControllers@push_request');

Route::post('list/delete_request','LinklistControllers@delete_request');

Auth::routes();
