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

            <div class="row m-top-md">
                <div class="col-lg-3 col-sm-6">
                    <div class="statistic-box bg-danger m-bottom-md">
                        <div class="statistic-title">
                            Today Visitors
                        </div>

                        <div class="statistic-value">
                            96.7k
                        </div>

                        <div class="m-top-md">11% Higher than last week</div>

                        <div class="statistic-icon-background">
                            <i class="ion-eye"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="statistic-box bg-info m-bottom-md">
                        <div class="statistic-title">
                            Today Sales
                        </div>

                        <div class="statistic-value">
                            751
                        </div>

                        <div class="m-top-md">8% Higher than last week</div>

                        <div class="statistic-icon-background">
                            <i class="ion-ios7-cart-outline"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="statistic-box bg-purple m-bottom-md">
                        <div class="statistic-title">
                            Today Users
                        </div>

                        <div class="statistic-value">
                            129
                        </div>

                        <div class="m-top-md">3% Higher than last week</div>

                        <div class="statistic-icon-background">
                            <i class="ion-person-add"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="statistic-box bg-success m-bottom-md">
                        <div class="statistic-title">
                            Today Earnings
                        </div>

                        <div class="statistic-value">
                            $124.45k
                        </div>

                        <div class="m-top-md">7% Higher than last week</div>

                        <div class="statistic-icon-background">
                            <i class="ion-stats-bars"></i>
                        </div>
                    </div>
                </div>
            </div>


        </div><!-- ./padding-md -->
    </div><!-- /main-container -->
@stop
