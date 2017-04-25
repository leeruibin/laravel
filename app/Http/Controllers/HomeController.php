<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Article;
class HomeController extends Controller
{
    public function index()
    {
        // return view('home')->withArticles(\App\Article::all());
        $articles = Article::paginate(5);
        $user = Auth::user();
        if($user != null)
        return view('fuck')->withArticles($articles)->with('user',$user);
    }
}
