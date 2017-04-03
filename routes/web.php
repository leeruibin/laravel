<?php


use Illuminate\Http\Request;
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
// Route::get('/',function(){
//   return view('hello world');
// });

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function () {
//     return view('Blog.BlogTest', ['post_name' => 'a normal post']);
// });


// post module
//
// show add post page
// Route::get('/article', function(){
//    return view('Blog.add');
// });

Route::get('/lee',function(){
  return 'hello world';
});
// $url = route('profile');
// $leeruibin = redirect()->$url;

//重名名方法出错有待解决
//add a post
Route::post('/article', 'BlogController@add');

// Route::get('/lee','MyController@show');

Route::get('/little',function(){
  return 'funny';
})->name('little');
// $url = route('little');
// $leeruibin = redirect()->route('little');
// $leeruibin = route('little');
//update a post

// Route::put('/article/{id}', 'BlogController@update');
//
// Route::get('/article/update/{id}', function($id){
//    return view('Blog.update', ['id' => $id]);
// });
// Route::get('/article/delete/{id}', function($id){
//     return view('Blog.delete', ['id' => $id]);
// });
// //delete a post
// Route::delete('/article/{id}', 'BlogController@delete');
//
// //get a post
// Route::get('/article/{id}', ['uses'=> 'BlogController@get', 'as'=> 'getPost']);
// Auth::routes();
//
// Route::get('/home', 'HomeController@index');

Route::get('cookieset', function()
{
    $arr = array('1','2','3','4','5');
    array_splice($arr,1,1);
    $asd = 'asd';
    $user = Cookie::make('user',$arr,30);
    return Response::make()->withCookie($user);
});

Route::get('cookietest', 'LinklistControllers@test');//function(Request $request)
// {
//     $cookit = Cookie::get('user');
//     $value = $request->cookie('arr');
//     echo $value[1];
//     // $asd = 'asd';
//     // $cookit = Cookie::make('user',$asd,30);
//     dd($cookit);//Cookie::get('user'));
// });

Route::get('test','LinklistControllers@test');

Route::get('/list/testInput',function(){

});

Route::get('/test','LinklistControllers@test');


Route::get('/list/construct','LinklistControllers@construct');

Route::get('list/insert','LinklistControllers@insert');

Route::get('list/delete','LinklistControllers@delete');

Route::get('list/push','LinklistControllers@push');

Route::get('list/pop','LinklistControllers@pop');

Route::get('list/print','LinklistControllers@print_list');

Route::get('list/size','LinklistControllers@size');

Route::get('list/construct_request','LinklistControllers@construct_request');

Route::get('list/insert_request','LinklistControllers@insert_request');

Route::get('list/pop_request','LinklistControllers@pop_request');

Route::get('list/push_request','LinklistControllers@push_request');

Route::get('list/delete_request','LinklistControllers@delete_request');


Route::get('list/hello','LinklistControllers@test');
