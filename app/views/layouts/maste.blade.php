<html>
<head>
    <meta charset="utf-8">
    <title>应用管理</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <!--index页 css文件-->
    <link href="{{URL::asset('/')}}bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{URL::asset('/')}}css/ionicons.min.css" rel="stylesheet">

    <link href="{{URL::asset('/')}}css/simplify.css" rel="stylesheet">

    <script src="{{URL::asset('/')}}js/jquery-1.11.1.min.js"></script>
</head>
<body class="">
<div class="wrapper preload">
    @section('top')
        @include('layouts.top');
    @show
    @section('sider_left');
        @include('layouts.sider_left')
    @show

    @yield('main')

    @section('footer')
        @include('layouts.footer')
    @show
</div>

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<!-- Jquery -->

<!-- Bootstrap -->

<script src="{{URL::asset('/')}}bootstrap/js/bootstrap.min.js"></script>
<script>
    $(function(){
        $('#sidebarToggleSM').click(function()	{
            $('aside').toggleClass('active');
            $('.wrapper').toggleClass('display-left');
        });
        $.get('{{url('api')}}',function(data){
            $('#count1').text(data[0].app);
            $('#count2').text(data[0].user);
            $('#count3').text(data[0].recycle);
        })
    })


</script>
@if(Request::path() == 'app/add' || strpos(Request::path(),'pp/edit'))
    <script type="text/javascript" charset="utf-8" src="{{URL::asset('/')}}ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="{{URL::asset('/')}}ueditor/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="{{URL::asset('/')}}ueditor/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript" charset="utf-8" src="{{URL::asset('/')}}ueditor/third-party/jquery-1.10.2.min.js"></script>
    <script>
        var ue = UE.getEditor('editor');
    </script>
@endif
</body>
</html>