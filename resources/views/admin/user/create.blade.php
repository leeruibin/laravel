@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">新增用户</div>
                <div class="panel-body">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>新增失败</strong> 输入不符合要求<br><br>
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif

                    <form action="{{ url('admin/user') }}" method="POST">
                        {!! csrf_field() !!}
                        <label class="col-md-4 control-label" for="name">Name</label>
                        <input type="text" name="name" class="form-control" required="required" placeholder="">
                        <br>
                        <label class="col-md-4 control-label" for="email">E-Mail Address</label>
                        <input type="email" name="email" class="form-control" required="required" placeholder="">
                        <br>
                        <label class="col-md-4 control-label" for="password">Password</label>
                        <input type="password" name="password" class="form-control" required="required" placeholder="">
                        <br>
                        <label class="col-md-4 control-label" for="password-confirm">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" required="required" placeholder="">
                        <br>

                        <button class="btn btn-lg btn-info">新增用户</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
