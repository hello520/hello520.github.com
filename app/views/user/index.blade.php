@extends('layouts.maste')
@section('main')
    <div class="main-container">
        @include('notification')
        <table class="table table-condensed table-bordered">
            <tr>
                <td class="info">id</td>
                <td class="info">名称</td>
                <td class="info">操作</td>
            </tr>
            @foreach($user as $info)
                <tr>
                    <td class="info">{{$info->id}}</td>
                    <td class="info">{{$info->user_name}}</td>
                    <td class="info">@if($info->id!==1)<a href="{{action('AuthController@edit',$info->id)}}">修改</a>|<a onclick="return confirm('确认删除');" href="{{action('AuthController@delete',$info->id)}}">删除</a>@endif</td>
                </tr>
            @endforeach
        </table>
        <div>{{$user->links()}}</div>
        <div class="col-md-6 col-md-offset-3"><a href="{{url('auth/add')}}">添加用户</a></div>
    </div><!-- /main-container -->
@stop