<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Auth;
class ArticleController extends Controller
{
      public function show($id)
    {
      $user = Auth::user();
      $articles = Article::with('hasManyComments')->find($id);
      return view('article/show')->withArticle($articles)->with('user',$user);
    }



    public function destroy($id)
    {
        $article = Article::find($id);
        foreach ($article->hasManyComments as $comment) {
          echo $comment->content;
          // Comment::find($comment->id)->delete();
          $comment->delete();
        }

        Article::find($id)->delete();

        return redirect()->back()->withInput()->withErrors('删除成功！');
    }
}
