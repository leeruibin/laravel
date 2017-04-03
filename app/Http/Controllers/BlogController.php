<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class BlogController extends Controller
{

    function __construct()
    {

        $this->middleware('auth');
    }

    //add a post
    public function add(Request $request) {
        $content = $request->input('content');
        $user = Auth::user();
        $date = date('Y-m-d H:i:s', time());
        $is_success = DB::insert('insert into blog (content, uid,created_at, updated_at) 
VALUES (?,?,?,?)', [$content, $user->id, $date, $date]);
        if($is_success) {
            echo 'add success';
        } else {
            echo 'add failed';
        }
        return 'this function will add a post';
    }


    //get a post
    public function get($id){
//        echo '123';
//        dd(route('getPost', 10));
//        return 'this function will do something';
        $blog = DB::select('select * from blog where id = ?', [(int)$id]);
        dd($blog);
        return view('BlogTest');
    }

    public function update(Request $request, $id) {
        $content = $request->input('content');

        $num = DB::update('update blog set content = ? where id = ?' , [$content, $id]);
        echo $num;
    }

    public function delete($id){
        $user = Auth::user();
        $uid = $user->id;
        $num = DB::delete('delete from blog where id = ? and uid = ?' , [$id, $uid]);
        echo $num;
    }
}
