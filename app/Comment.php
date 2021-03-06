<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Article;
class Comment extends Model
{
    protected $fillable = ['nickname', 'email', 'website', 'content', 'article_id'];

    public function hasOneUser(){
      return $this->hasOne('App\user', 'id','user_id');
    }

    public function hasOneArticle(){
      return $this->hasOne('App\Article', 'id', 'article_id');
    }
}
