@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">评论管理</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif

                    <a href="{{ url('admin/comment/create') }}" class="btn btn-lg btn-primary">新增</a>

                    @foreach ($comments as $comment)
                        <hr>
                        <div class="comment">
                                <p>内容：{{ $comment->content }}</p>

                                <p>
                                    昵称：{{ $comment->nickname }}<br>
                                    邮箱：{{$comment->email}}
                                </p>
                                <p>
                                    被评文章：
                                    <a href="{{ url('article/'.$comment->article_id) }}">
                                      <h4>{{$comment->hasOneArticle->title}}</h4>
                                    </a>
                                </p>

                        </div>
                        <a href="{{ url('admin/comment/'.$comment->id.'/edit') }}" class="btn btn-success">编辑</a>
                        <form action="{{ url('admin/comment/'.$comment->id) }}" method="POST" style="display: inline;">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">删除</button>
                        </form>
                    @endforeach

                </div>
                {!! $comments->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection
