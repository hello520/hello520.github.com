@extends('layouts.maste')
@section('main')
    <div class="main-container">
        @include('notification')
        {{ Form::open(array('url' => 'app/add','class'=>'form-horizontal','enctype'=>'multipart/form-data')) }}
        {{Form::hidden('id',isset($application['id'])?$application['id']:'')}}
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">所属分类</label>
            <div class="col-sm-5">
                {{Form::select('category',$category,isset($application['category'])?$application['category']:1,array('multiple'=>'multiple','class'=>'form-control'))}}
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">用户评分</label>
            <div class="col-sm-4">
                {{Form::text('score',isset($application['score'])?$application['score']:'',array('class'=>'form-control',"placeholder"=>"最高评分为5分" ))}}

            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">下载人数</label>
            <div class="col-sm-4">
                {{Form::text('download',isset($application['download'])?$application['download']:'',array('class'=>'form-control',"placeholder"=>"下载人数" ))}}
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">排列序号</label>
            <div class="col-sm-8">
                {{Form::text('order',isset($application['order'])?$application['order']:'',array('class'=>'form-control',"placeholder"=>"排列序号" ))}}
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">发送指令</label>
            <div class="col-sm-8">
                {{Form::text('instructions',isset($application['instructions'])?$application['instructions']:'',array('class'=>'form-control',"placeholder"=>"发送指令" ))}}
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">缩略图</label>
            <div class="col-sm-4">
                {{Form::text('thumb',isset($application['thumb'])?$application['thumb']:'',array('class'=>'form-control',"placeholder"=>"缩略图标识" ))}}
            </div>
            <!--<div class="col-sm-10">
                {{Form::file('image')}}
                    </div>-->
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">名称</label>
            <div class="col-sm-8">
                {{Form::text('name',isset($application['name'])?$application['name']:'',array('class'=>'form-control',"placeholder"=>"应用名称" ))}}
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">描述</label>
            <div class="col-sm-8">
                {{Form::textarea('desc',isset($application['desc'])?$application['desc']:'',array('class'=>'form-control',"placeholder"=>"应用描述" ))}}
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">图文详情</label>
            <div class="col-sm-8">
                <script id="editor" name="content" type="text/plain" style="height:550px">{{isset($application['content'])?$application['content']:''}}</script>
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">状态</label>
            <div class="col-sm-5">
                <lable class="col-sm-2 control-label">正常&nbsp;{{Form::radio('status', '1',isset($application['status'])?$application['status']||false:true)}}</lable>
                <lable class="col-sm-2 control-label">下线&nbsp;{{Form::radio('status', '0',isset($application['status'])?!$application['status']||false:'')}}</lable>
            </div>
        </div>
        <!--<div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">是否最新</label>
            <div class="col-sm-5">
               <lable class="col-sm-2 control-label">是&nbsp;{{Form::radio('is_new', '1',isset($application['is_new'])?$application['is_new']||false:'')}}</lable>
                <lable class="col-sm-2 control-label">否&nbsp;{{Form::radio('is_new', '0',isset($application['is_new'])?!$application['is_new']||false:true)}}</lable>
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">是否推荐</label>
            <div class="col-sm-5">
                <lable class="col-sm-2 control-label">是&nbsp;{{Form::radio('is_recommend', '1',isset($application['is_recommend'])?$application['is_recommend']||false:'')}}</lable>
                <lable class="col-sm-2 control-label">否&nbsp;{{Form::radio('is_recommend', '0',isset($application['is_recommend'])?!$application['is_recommend']||false:true)}}</lable>
            </div>
        </div>-->

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                {{Form::submit('保存',array('class'=>'btn btn-default'))}}
                <a   class="btn  btn-default" href ="/app" > 返回 </a>
            </div>
        </div>
        {{ Form::close() }}
    </div><!-- /main-container -->
@stop