@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">编辑评论</div>
                <div class="panel-body">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>编辑失败</strong> 输入不符合要求<br><br>
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif

                    <form action="{{ url('admin/user/'.$user->id) }}" method="POST">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        <label class="col-md-4 control-label" for="name">Name</label>
                        <input type="text" name="name" class="form-control"  placeholder="{{$user->name}}">
                        <br>

                        <label class="col-md-4 control-label" for="email">E-Mail Address</label>
                        <input type="email" name="email" class="form-control"  placeholder="{{$user->email}}">
                        <br>
                        <label class="col-md-4 control-label" for="password">Password</label>
                        <input type="password" name="password" class="form-control"  placeholder="">
                        <br>
                        <label class="col-md-4 control-label" for="password-confirm">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control"  placeholder="">
                        <br>
                        <button class="btn btn-lg btn-info">提交修改</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
