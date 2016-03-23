@extends('layouts.maste')

@section('main')
    <div class="main-container">
        <div class="padding-md">
            <!--main顶部-->
            <div class="row">
                <!--欢迎-->
                <div class="col-sm-6">
                    <div class="page-title">
                        欢迎
                    </div>
                    <div class="page-sub-header">
                        Welcome Back, John Doe , <i class="fa fa-map-marker text-danger"></i> London
                    </div>
                </div>
                <!--欢迎end-->
                <!--选择项目-->
                <div class="col-sm-6 text-right text-left-sm p-top-sm">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            Select Project <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li><a href="#">项目1</a></li>
                            <li><a href="#">项目2</a></li>
                            <li><a href="#">项目3</a></li>
                            <li class="divider"></li>
                            <li><a href="#">设置</a></li>
                        </ul>
                    </div>

                    <a class="btn btn-default"><i class="fa fa-cog"></i></a>
                </div>
                <!--选择项目end-->
            </div>
            <!--main顶部end-->

        </div><!-- ./padding-md -->
    </div><!-- /main-container -->
@stop
