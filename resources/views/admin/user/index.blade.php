@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">用户管理</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif

                    <a href="{{ url('admin/user/create') }}" class="btn btn-lg btn-primary">新增</a>

                    @foreach ($users as $user)
                        <hr>
                        <div class="user">
                            <h4>{{ $user->name }}</h4>
                            <div class="info">
                                <p>
                                    {{ $user->email }}
                                </p>
                            </div>
                        </div>
                        <a href="{{ url('admin/user/'.$user->id.'/edit') }}" class="btn btn-success">编辑用户信息</a>
                        <form action="{{ url('admin/user/'.$user->id) }}" method="POST" style="display: inline;">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">删除</button>
                        </form>
                        @if($user->admin_state == 0 )
                        <a href="{{ url('admin/user/'.$user->id.'/state') }}" class="btn btn-success">设为管理员</a>
                        @else
                        <a href="{{ url('admin/user/'.$user->id.'/state') }}" class="btn btn-success">取消管理员权限</a>
                        @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
