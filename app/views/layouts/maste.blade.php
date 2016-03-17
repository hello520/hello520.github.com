<html>
<head>
    <meta charset="utf-8">
    <title>Simplify Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <!--index页 css文件-->
    <link href="{{URL::asset('/')}}bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{URL::asset('/')}}css/font-awesome.min.css" rel="stylesheet">

    <!-- ionicons -->
    <link href="{{URL::asset('/')}}css/ionicons.min.css" rel="stylesheet">

    <!-- Morris -->
    <link href="{{URL::asset('/')}}css/morris.css" rel="stylesheet"/>

    <!-- Datepicker -->
    <link href="{{URL::asset('/')}}css/datepicker.css" rel="stylesheet"/>

    <!-- Animate -->
    <link href="{{URL::asset('/')}}css/animate.min.css" rel="stylesheet">

    <!-- Owl Carousel -->
    <link href="{{URL::asset('/')}}css/owl.carousel.min.css" rel="stylesheet">
    <link href="{{URL::asset('/')}}css/owl.theme.default.min.css" rel="stylesheet">

    <!-- Simplify -->
    <link href="{{URL::asset('/')}}css/simplify.min.css" rel="stylesheet">
</head>
<body class="overflow-hidden">
<div class="wrapper preload">
    @section('top')
        @include('layouts.top');
    @show

    @section('sider_right')
        @include('layouts.sider_right');
    @show
    @section('sider_left');
        @include('layouts.sider_left')
    @show

    @yield('main')

    @section('footer')
        @include('layouts.footer')
    @show
</div>

<a href="#" class="scroll-to-top hidden-print"><i class="fa fa-chevron-up fa-lg"></i></a>

<!-- Delete Widget Confirmation -->
<div class="custom-popup delete-widget-popup delete-confirmation-popup" id="deleteWidgetConfirm">
    <div class="popup-header text-center">
				<span class="fa-stack fa-4x">
				  <i class="fa fa-circle fa-stack-2x"></i>
				  <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
				</span>
    </div>
    <div class="popup-body text-center">
        <h5>Are you sure to delete this widget?</h5>
        <strong class="block m-top-xs"><i class="fa fa-exclamation-circle m-right-xs text-danger"></i>This action cannot be undone</strong>

        <div class="text-center m-top-lg">
            <a class="btn btn-success m-right-sm remove-widget-btn">Delete</a>
            <a class="btn btn-default deleteWidgetConfirm_close">Cancel</a>
        </div>
    </div>
</div>


<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<!-- Jquery -->
<script src="{{URL::asset('/')}}js/jquery-1.11.1.min.js"></script>

<!-- Bootstrap -->
<script src="{{URL::asset('/')}}bootstrap/js/bootstrap.min.js"></script>

<!-- Flot -->
<script src='{{URL::asset('/')}}js/jquery.flot.min.js'></script>

<!-- Slimscroll -->
<script src='{{URL::asset('/')}}js/jquery.slimscroll.min.js'></script>

<!-- Morris -->
<script src='{{URL::asset('/')}}js/rapheal.min.js'></script>
<script src='{{URL::asset('/')}}js/morris.min.js'></script>

<!-- Datepicker -->
<script src='{{URL::asset('/')}}js/uncompressed/datepicker.js'></script>

<!-- Sparkline -->
<script src='{{URL::asset('/')}}js/sparkline.min.js'></script>

<!-- Skycons -->
<script src='{{URL::asset('/')}}js/uncompressed/skycons.js'></script>

<!-- Popup Overlay -->
<script src='{{URL::asset('/')}}js/jquery.popupoverlay.min.js'></script>

<!-- Easy Pie Chart -->
<script src='{{URL::asset('/')}}js/jquery.easypiechart.min.js'></script>

<!-- Sortable -->
<script src='{{URL::asset('/')}}js/uncompressed/jquery.sortable.js'></script>

<!-- Owl Carousel -->
<script src='{{URL::asset('/')}}js/owl.carousel.min.js'></script>

<!-- Modernizr -->
<script src='{{URL::asset('/')}}js/modernizr.min.js'></script>

<!-- Simplify -->
<script src="{{URL::asset('/')}}js/simplify/simplify.js"></script>
<script src="{{URL::asset('/')}}js/simplify/simplify_dashboard.js"></script>


<script>
    $(function()	{
        $('.chart').easyPieChart({
            easing: 'easeOutBounce',
            size: '140',
            lineWidth: '7',
            barColor: '#7266ba',
            onStep: function(from, to, percent) {
                $(this.el).find('.percent').text(Math.round(percent));
            }
        });

        $('.sortable-list').sortable();

        $('.todo-checkbox').click(function()	{

            var _activeCheckbox = $(this).find('input[type="checkbox"]');

            if(_activeCheckbox.is(':checked'))	{
                $(this).parent().addClass('selected');
            }
            else	{
                $(this).parent().removeClass('selected');
            }

        });

        //Delete Widget Confirmation
        $('#deleteWidgetConfirm').popup({
            vertical: 'top',
            pagecontainer: '.container',
            transition: 'all 0.3s'
        });
    });

</script>
</body>
</html>