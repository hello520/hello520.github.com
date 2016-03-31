@extends('layouts.maste')
@section('main')
    <div class="main-container">
        @include('notification')
        <table class="table table-condensed table-bordered">
            <tr>
                <td class="info">排序</td>
                <td class="info">id</td>
                <td class="info">缩略图</td>
                <td class="info">所属分类</td>
                <td class="info">名称</td>
                <td class="info">描述</td>
                <td class="info">状态</td>
                <td class="info">操作</td>
            </tr>
            @foreach($list as $info)
                <tr>
                    <td class="info"><input type="text" value="{{$info['order']}}" style="text-align:center;width: 30px; height: 30px; border: 1px solid"></td>
                    <td class="info">{{$info['id']}}</td>
                    <td class="info"><img style="width: 40px; height: 40px" src="{{$info['thumb']}}"></td>
                    <td class="info">{{$category[$info['category']]}}</td>
                    <td class="info">{{$info['name']}}</td>
                    <td class="info" style="max-width: 200px;">{{mb_substr($info['desc'],0,50,'utf-8')}}</td>
                    <td class="info">{{$info['status']?'正常':'下线'}}</td>
                    <td class="info"><a href="{{action('ApplicationController@edit',$info->id)}}">修改</a>|<a onclick="return confirm('确认删除');" href="{{action('ApplicationController@delete',$info->id)}}">删除</a></td>
                </tr>
            @endforeach
        </table>
        <div>{{$list->links()}}</div>
        <div class="row">
            <a class="col-xs-5" href="#" onclick="order()">排序</a>
            <a class="col-xs-5" href="{{url('app/add')}}">添加应用</a>
        </div>
    </div><!-- /main-container -->
    <script>
        function order(){
            var data = '';
            var tr = $('table tr');
            for(var i=1;i<tr.length;i++){
                var order =  tr.eq(i).children('td').eq(0).children('input').val();
                var id =  tr.eq(i).children('td').eq(1).text();
                data += order+','+id+';';
            }
            $.get('app/order',{'data':data},function(data){
                data = $.parseJSON(data);
                if(data['code'] == 200){
                    history.go(0)
                }
            })
        }
    </script>
@stop