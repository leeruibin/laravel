<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Article;
class CommentController extends Controller
{
  private function clean($input){
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
  }

      public function store(Request $request)
    {

      $comment = new Comment;
      $comment->nickname = $request->user()->name;
      $comment->email = $request->user()->email;
      $comment->content = $this->clean($request->get('content'));
      $comment->article_id = $request->get('article_id');
      $comment->user_id = $request->user()->id;
      $date = date("Y-m-d H:i:s");
      $comment->created_at  = $date;
      $comment->updated_at  = $date;
      if ($comment->save( )) {
          return redirect()->back();
      } else {
          return redirect()->back()->withInput()->withErrors('评论发表失败！');
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
        $comment->nickname = $request->get('nickname');

        $comment->content = $this->clean($request->get('body')); // 同上

        if ($comment->save()) {
            return redirect('/home');
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
