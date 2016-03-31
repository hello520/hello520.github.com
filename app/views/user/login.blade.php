<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>应用管理</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('/')}}bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{asset('/')}}css/simplify.min.css" rel="stylesheet">

</head>

<body class="overflow-hidden light-background">
<div class="wrapper no-navigation preload">
    <div class="sign-in-wrapper">
        @include('notification')
        <div class="sign-in-inner">
            <div class="login-brand text-center">
                <strong class="text-skin">应用管理</strong>
            </div>

            <form action="{{url('login')}}" method="post">
                <div class="form-group m-bottom-md">
                    <input type="text" name="username" class="form-control" placeholder="用户名">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="密码">
                </div>

                <div class="form-group">
                    <div class="custom-checkbox">
                        <input type="checkbox" id="chkRemember" name="remember-me">
                        <label for="chkRemember"></label>
                    </div>
                   记住我
                </div>

                <div class="m-top-md p-top-sm">
                    <a href="#" onclick="$('form').submit()" class="btn btn-success block">登录</a>
                </div>

            </form>
        </div><!-- ./sign-in-inner -->
    </div><!-- ./sign-in-wrapper -->
</div><!-- /wrapper -->

<a href="" id="scroll-to-top" class="hidden-print"><i class="icon-chevron-up"></i></a>

<script src="{{asset('/')}}js/jquery-1.11.1.min.js"></script>

</body>
</html>
