<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>B2B-ICRM-WX v1.0</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" type="text/css"  href="{{ asset('/themes/css/cloud-admin.css') }}" >
<link rel="stylesheet" type="text/css"  href="{{ asset('/themes/css/ui.css') }}" >
<link rel="stylesheet" type="text/css"  href="{{ asset('/themes/css/themes/utopia.css') }}" id="skin-switcher" >
<link rel="stylesheet" type="text/css"  href="{{ asset('/themes/css/responsive.css') }}" >
<!-- STYLESHEETS --><!--[if lt IE 9]>
<script src="{{ asset('/themes/js/flot/excanvas.min.js') }}"></script>
<script src="{{ asset('/themes/js/html5/html5.js') }}"></script>
<script src="{{ asset('/themes/js/css3-mediaqueries.js') }}"></script>
<![endif]-->
<link href="{{ asset('/themes/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
<!-- ANIMATE -->
<link rel="stylesheet" type="text/css" href="{{ asset('/themes/css/animatecss/animate.min.css') }}" />
<!-- DATE RANGE PICKER -->
<link rel="stylesheet" type="text/css" href="{{ asset('/themes/js/bootstrap-daterangepicker/daterangepicker-bs3.css') }}" />
<!-- TODO -->
<link rel="stylesheet" type="text/css" href="{{ asset('/themes/js/jquery-todo/css/styles.css') }}" />
<!-- FULL CALENDAR -->
<link rel="stylesheet" type="text/css" href="{{ asset('/themes/js/fullcalendar/fullcalendar.min.css') }}" />
<!-- GRITTER -->
<link rel="stylesheet" type="text/css" href="{{ asset('/themes/js/gritter/css/jquery.gritter.css') }}" />
 @yield('css')
</head>
<body>

<!--page--->
<div class="container">
	<div class="row">
	    <div id="content" class="col-lg-12">
            <!-- PAGE HEADER-->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header">
                        <!-- BREADCRUMBS -->
						@yield('navigation')
                        <!-- /BREADCRUMBS -->
                    </div>
                </div>
            </div>
            <!-- /PAGE HEADER -->
            
            <!-- NEW ORDERS & STATISTICS -->
			@yield('content')
            <!-- /NEW ORDERS & STATISTICS -->
            
           <!-- <div class="footer-tools">
                <span class="go-top">
                    <i class="fa fa-chevron-up"></i> Top
                </span>
            </div>-->
        </div>
	</div>
</div>
<!--/page-->  
 
<!-- JAVASCRIPTS -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- JQUERY -->
<script src="{{ asset('/themes/js/jquery/jquery-2.0.3.min.js') }}"></script>
<!-- JQUERY UI-->
<script src="{{ asset('/themes/js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js') }}"></script>
<!-- BOOTSTRAP -->
<script src="{{ asset('/themes/bootstrap-dist/js/bootstrap.min.js') }}"></script>
<!-- DATE RANGE PICKER -->
<script src="{{ asset('/themes/js/bootstrap-daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('/themes/js/bootstrap-daterangepicker/daterangepicker.min.js') }}"></script>
<!-- SLIMSCROLL -->
<script type="text/javascript" src="{{ asset('/themes/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/themes/js/jQuery-slimScroll-1.3.0/slimScrollHorizontal.min.js') }}"></script>
<!-- BLOCK UI -->
<script type="text/javascript" src="{{ asset('/themes/js/jQuery-BlockUI/jquery.blockUI.min.js') }}"></script>
<!-- SPARKLINES -->
<script type="text/javascript" src="{{ asset('/themes/js/sparklines/jquery.sparkline.min.js') }}"></script>
<!-- EASY PIE CHART -->
<script src="{{ asset('/themes/js/jquery-easing/jquery.easing.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/themes/js/easypiechart/jquery.easypiechart.min.js') }}"></script>
<!-- FLOT CHARTS -->
<script src="{{ asset('/themes/js/flot/jquery.flot.min.js') }}"></script>
<script src="{{ asset('/themes/js/flot/jquery.flot.time.min.js') }}"></script>
<script src="{{ asset('/themes/js/flot/jquery.flot.selection.min.js') }}"></script>
<script src="{{ asset('/themes/js/flot/jquery.flot.resize.min.js') }}"></script>
<script src="{{ asset('/themes/js/flot/jquery.flot.pie.min.js') }}"></script>
<script src="{{ asset('/themes/js/flot/jquery.flot.stack.min.js') }}"></script>
<script src="{{ asset('/themes/js/flot/jquery.flot.crosshair.min.js') }}"></script>
<!-- TODO -->
<script type="text/javascript" src="{{ asset('/themes/js/jquery-todo/js/paddystodolist.js') }}"></script>
<!-- TIMEAGO -->
<script type="text/javascript" src="{{ asset('/themes/js/timeago/jquery.timeago.min.js') }}"></script>
<!-- FULL CALENDAR -->
<script type="text/javascript" src="{{ asset('/themes/js/fullcalendar/fullcalendar.min.js') }}"></script>
<!-- COOKIE -->
<script type="text/javascript" src="{{ asset('/themes/js/jQuery-Cookie/jquery.cookie.min.js') }}"></script>
<!-- GRITTER -->
<script type="text/javascript" src="{{ asset('/themes/js/gritter/js/jquery.gritter.min.js') }}"></script>
<!-- CUSTOM SCRIPT -->
<script src="{{ asset('/themes/js/script.js') }}"></script>
@yield('js')
<script>
        jQuery(document).ready(function() {		
                App.setPage("index");  //Set current page
                App.init(); //Initialise plugins and elements
        });
</script>


<!-- /JAVASCRIPTS -->

</body>
</html>