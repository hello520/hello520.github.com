<head>
    <title>应用管理</title>
    <link href="{{ URL::asset('/') }}css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ URL::asset('/') }}js/jquery-1.11.0.min.js"></script>
    <!-- Custom Theme files -->
    <link href="{{ URL::asset('/') }}css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{ URL::asset('/') }}js/move-top.js"></script>
    <script type="text/javascript" src="{{ URL::asset('/') }}js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- //end-smoth-scrolling -->
    <link rel="stylesheet" href="{{ URL::asset('/') }}css/flexslider.css" type="text/css" media="screen" />
</head>