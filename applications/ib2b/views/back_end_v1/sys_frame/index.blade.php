<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>B2B-ICRM-WX v1.0</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" type="text/css" href="{{ asset('/themes/css/cloud-admin.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('/themes/css/themes/default.css') }}" id="skin-switcher" >
<link rel="stylesheet" type="text/css" href="{{ asset('/themes/css/responsive.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('/themes/css/index.css') }}" >
<!-- STYLESHEETS --><!--[if lt IE 9]>
<script src="{{ asset('/themes/js/flot/excanvas.min.js') }}"></script>
<script src="{{ asset('/themes/js/html5/html5.js') }}"></script>
<script src="{{ asset('/themes/js/css3-mediaqueries.js') }}"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="{{ asset('/themes/font-awesome/css/font-awesome.min.css') }}">
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
</head>
<body>
    <!-- HEADER -->
    <header class="navbar clearfix navbar-fixed-top" id="header">
        <div class="container">
            <div class="navbar-brand">
                <!-- COMPANY LOGO -->
                <a href="index.html">
                    <img src="{{ asset('/themes/img/logo.png') }}" alt="Cloud Admin Logo" class="img-responsive" height="30" width="120">
                </a>
                <!-- /COMPANY LOGO -->
                <!-- TEAM STATUS FOR MOBILE -->
                <div class="visible-xs">
                    <a href="#" class="team-status-toggle switcher btn dropdown-toggle">
                        <i class="fa fa-users"></i>
                    </a>
                </div>
                <!-- /TEAM STATUS FOR MOBILE -->
                <!-- SIDEBAR COLLAPSE -->
                <div id="sidebar-collapse" class="sidebar-collapse btn">
                    <i class="fa fa-bars" data-icon1="fa fa-bars" data-icon2="fa fa-bars" ></i>
                </div>
                <!-- /SIDEBAR COLLAPSE -->
            </div>
            <!-- NAVBAR LEFT -->
            <ul class="nav navbar-nav pull-left hidden-xs" id="navbar-left">
                <li class="dropdown">
                    <a href="#" class="team-status-toggle dropdown-toggle tip-bottom" data-toggle="tooltip" title="点击查看">
                        <i class="fa fa-bars"></i>
                        <span class="name">项目列表</span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-cog"></i>
                        <span class="name">系统配色</span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu skins">
                        <li class="dropdown-title">
                            <span><i class="fa fa-leaf"></i> 配色方案</span>
                        </li>
                        <li><a href="{{ url('/back_end') }}" data-skin="default">蓝色（默认）</a></li>
                        <li><a href="{{ url('/back_end') }}" data-skin="night">深色</a></li>
                        <li><a href="{{ url('/back_end') }}" data-skin="earth">棕色</a></li>
                        <li><a href="{{ url('/back_end') }}" data-skin="utopia">黄色</a></li>
                        <li><a href="{{ url('/back_end') }}" data-skin="nature">绿色</a></li>
                        <li><a href="{{ url('/back_end') }}" data-skin="graphite">灰色</a></li>
                     </ul>
                </li>
            </ul>
            <!-- /NAVBAR LEFT -->
            <!-- BEGIN TOP NAVIGATION MENU -->					
            <ul class="nav navbar-nav pull-right">
                <!-- BEGIN NOTIFICATION DROPDOWN -->	
                <li class="dropdown" id="header-notification">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell"></i>
                        <span class="badge">2</span>						
                    </a>
                    <ul class="dropdown-menu notification">
                        <li class="dropdown-title">
                            <span><i class="fa fa-bell"></i> 2 通知</span>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-success"><i class="fa fa-user"></i></span>
                                <span class="body">
                                    <span class="message">三位新会员使用CODE</span>
                                    <span class="time">
                                        <i class="fa fa-clock-o"></i>
                                        <span>1分钟前</span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-success"><i class="fa fa-user"></i></span>
                                <span class="body">
                                    <span class="message">系统更新模块</span>
                                    <span class="time">
                                        <i class="fa fa-clock-o"></i>
                                        <span>2分钟前</span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        
                        
                        
                        
                        <li class="footer">
                            <a href="#">查看全部 <i class="fa fa-arrow-circle-right"></i></a>
                        </li>
                    </ul>
                </li>
                <!-- END NOTIFICATION DROPDOWN -->
                <!-- BEGIN INBOX DROPDOWN -->
                <li class="dropdown" id="header-message">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-envelope"></i>
                    <span class="badge">3</span>
                    </a>
                    <ul class="dropdown-menu inbox">
                        <li class="dropdown-title">
                            <span><i class="fa fa-envelope-o"></i> 3 消息</span>
                            <span class="compose pull-right tip-right" title="Compose message"><i class="fa fa-pencil-square-o"></i></span>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('/themes/img/avatars/avatar2') }}" alt="" />
                                <span class="body">
                                    <span class="from">管理员邮件</span>
                                    <span class="message">
                                    
                                    </span> 
                                    <span class="time">
                                        <i class="fa fa-clock-o"></i>
                                        <span>1分钟前</span>
                                    </span>
                                </span>
                                 
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('/themes/img/avatars/avatar1') }}" alt="" />
                                <span class="body">
                                    <span class="from">客户资料</span>
                                    <span class="message">
                                    客户资料更新
                                    </span> 
                                    <span class="time">
                                        <i class="fa fa-clock-o"></i>
                                        <span>15 分钟前</span>
                                    </span>
                                </span>
                                 
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('/themes/img/avatars/avatar8') }}" alt="" />
                                <span class="body">
                                    <span class="from">邮件通知</span>
                                    <span class="message">
                                    新的数据需要导出报表
                                    </span> 
                                    <span class="time">
                                        <i class="fa fa-clock-o"></i>
                                        <span>2 小时前</span>
                                    </span>
                                </span>
                                 
                            </a>
                        </li>
                        <li class="footer">
                            <a href="#">查看所有 <i class="fa fa-arrow-circle-right"></i></a>
                        </li>
                    </ul>
                </li>
                <!-- END INBOX DROPDOWN -->
                <!-- BEGIN TODO DROPDOWN -->
                <li class="dropdown" id="header-tasks">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-tasks"></i>
                    <span class="badge">6</span>
                    </a>
                    <ul class="dropdown-menu tasks">
                        <li class="dropdown-title">
                            <span><i class="fa fa-check"></i> 6 项目进度</span>
                        </li>
                        <li>
                            <a href="#">
                                <span class="header clearfix">
                                    <span class="pull-left">项目名称</span>
                                    <span class="pull-right">100%</span>
                                </span>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                    <span class="sr-only">100% 完成</span>
                                  </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="header clearfix">
                                    <span class="pull-left">项目名称</span>
                                    <span class="pull-right">25%</span>
                                </span>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                    <span class="sr-only">25% 完成</span>
                                  </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="header clearfix">
                                    <span class="pull-left">项目名称</span>
                                    <span class="pull-right">40%</span>
                                </span>
                                <div class="progress progress-striped">
                                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                    <span class="sr-only">40% 完成</span>
                                  </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="header clearfix">
                                    <span class="pull-left">项目名称</span>
                                    <span class="pull-right">70%</span>
                                </span>
                                <div class="progress progress-striped active">
                                  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                    <span class="sr-only">70% 完成</span>
                                  </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="header clearfix">
                                    <span class="pull-left">项目名称</span>
                                    <span class="pull-right">65%</span>
                                </span>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-success" style="width: 35%">
                                    <span class="sr-only">35% 完成</span>
                                  </div>
                                  <div class="progress-bar progress-bar-warning" style="width: 20%">
                                    <span class="sr-only">20% 错误修复</span>
                                  </div>
                                  <div class="progress-bar progress-bar-danger" style="width: 10%">
                                    <span class="sr-only">10% 后期维护</span>
                                  </div>
                                </div>
                            </a>
                        </li>
                        <li class="footer">
                            <a href="#">查看所有<i class="fa fa-arrow-circle-right"></i></a>
                        </li>
                    </ul>
                </li>
                <!-- END TODO DROPDOWN -->
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <li class="dropdown user" id="header-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img alt="" src="{{ asset('/themes/img/avatars/avatar3') }}" />
                        <span class="username">Billy</span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-user"></i> 我的资料</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> 密码修改</a></li>
                        <li><a href="{{ url('/') }}"><i class="fa fa-power-off"></i> 安全退出</a></li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
            </ul>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- TEAM STATUS -->
        <div class="container team-status" id="team-status">
        	<div id="scrollbar">
            	<div class="handle"></div>
          	</div>
          	<div id="teamslider">
              <ul class="team-list">
                <li class="current">
                  <a href="javascript:void(0);">
                  <span class="image">
                      <img src="{{ asset('/themes/img/avatars/avatar3') }}" alt="" />
                  </span>
                  <span class="title">PM Name</span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-success" style="width: 35%">
                        <span class="sr-only">35% 完成 (success)</span>
                      </div>
                      <div class="progress-bar progress-bar-warning" style="width: 20%">
                        <span class="sr-only">20% 完成 (warning)</span>
                      </div>
                      <div class="progress-bar progress-bar-danger" style="width: 10%">
                        <span class="sr-only">10% 完成 (danger)</span>
                      </div>
                    </div>
                    <span class="status">
                        <div class="field">
                            <span class="badge badge-green">1</span> 完成
                            <span class="pull-right fa fa-check"></span>
                        </div>
                        <div class="field">
                            <span class="badge badge-orange">3</span> 进行中
                            <span class="pull-right fa fa-adjust"></span>
                        </div>
                        <div class="field">
                            <span class="badge badge-red">1</span> 启动
                            <span class="pull-right fa fa-list-ul"></span>
                        </div>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);">
                  <span class="image">
                      <img src="{{ asset('/themes/img/avatars/avatar1') }}" alt="" />
                  </span>
                  <span class="title">
                    PM Name
                  </span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-success" style="width: 15%">
                        <span class="sr-only">35% 完成</span>
                      </div>
                      <div class="progress-bar progress-bar-warning" style="width: 40%">
                        <span class="sr-only">20% 完成</span>
                      </div>
                      <div class="progress-bar progress-bar-danger" style="width: 20%">
                        <span class="sr-only">10% 完成</span>
                      </div>
                    </div>
                    <span class="status">
                        <div class="field">
                            <span class="badge badge-green">2</span> 完成
                            <span class="pull-right fa fa-check"></span>
                        </div>
                        <div class="field">
                            <span class="badge badge-orange">8</span> 进行中
                            <span class="pull-right fa fa-adjust"></span>
                        </div>
                        <div class="field">
                            <span class="badge badge-red">4</span> 启动
                            <span class="pull-right fa fa-list-ul"></span>
                        </div>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);">
                  <span class="image">
                      <img src="{{ asset('/themes/img/avatars/avatar2') }}" alt="" />
                  </span>
                  <span class="title">
                    PM Name
                  </span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-success" style="width: 65%">
                        <span class="sr-only">35% 完成</span>
                      </div>
                      <div class="progress-bar progress-bar-warning" style="width: 10%">
                        <span class="sr-only">20% 完成</span>
                      </div>
                      <div class="progress-bar progress-bar-danger" style="width: 15%">
                        <span class="sr-only">10% 完成</span>
                      </div>
                    </div>
                    <span class="status">
                        <div class="field">
                            <span class="badge badge-green">10</span> 完成
                            <span class="pull-right fa fa-check"></span>
                        </div>
                        <div class="field">
                            <span class="badge badge-orange">3</span> 进行中
                            <span class="pull-right fa fa-adjust"></span>
                        </div>
                        <div class="field">
                            <span class="badge badge-red">4</span> 启动
                            <span class="pull-right fa fa-list-ul"></span>
                        </div>
                    </span>
                  </a>
                </li>
              </ul>
            </div>
        </div>
        <!-- /TEAM STATUS -->
    </header>
    <!--/HEADER -->
	
	<!-- PAGE -->
	<section id="page">
		<!-- SIDEBAR -->
		<div id="sidebar" class="sidebar sidebar-fixed">
			<div class="sidebar-menu nav-collapse">
				<div class="divide-20"></div>
				<!-- SEARCH BAR -->
					<div id="search-bar">
						<input class="search" type="text" placeholder="Search"><i class="fa fa-search search-icon"></i>
					</div>
				<!-- /SEARCH BAR -->
				<!-- SIDEBAR MENU -->
				<ul>
					<li class="active">
						<a href="{{url('/main')}}" target="mainFrame">
						<i class="fa fa-tachometer fa-fw"></i> <span class="menu-text">系统首页</span>
						<span class="selected"></span>
						</a>					
					</li>
					<li class="has-sub">
						<a href="javascript:;" class="">
						<i class="fa fa-fighter-jet fa-fw"></i> <span class="menu-text">系统配置</span>
						<span class="arrow"></span>
						</a>
						<ul class="sub">
							<li><a class="" href="index.html"><span class="sub-menu-text">管理员</span></a></li>
							
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;" class="">
						<i class="fa fa-users fa-fw"></i> <span class="menu-text">客户管理</span>
						<span class="arrow"></span>
						</a>
						<ul class="sub">
							<li><a class="" href="index.html"><span class="sub-menu-text">客户资料</span></a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;" class="">
						<i class="fa fa-btc fa-fw"></i> <span class="menu-text">应用业务</span>
						<span class="arrow"></span>
						</a>
						<ul class="sub">
							<li class="has-sub-sub">
								<a href="javascript:;" class=""><span class="sub-menu-text">CODE管理</span>
								<span class="arrow"></span>
								</a>
								<ul class="sub-sub">
									<li><a class="" href="{{ url('/codes') }}" target="mainFrame"><span class="sub-sub-menu-text">CODE生成</span></a></li>
									<li><a class="" href="index.html"><span class="sub-sub-menu-text">CODE统计</span></a></li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
				<!-- /SIDEBAR MENU -->
			</div>
		</div>
		<!-- /SIDEBAR -->
		<div id="main-content">
			<iframe src ="{{ url('/main') }}"  marginheight="0" marginwidth="0" frameborder="0" scrolling="auto" id="mainFrame" name="mainFrame"  width="100%">
			</iframe> 
		</div>
	</section>
	<!--/PAGE -->
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
	<script src="{{ asset('/themes/js/charts.js') }}"></script>
	<script>
		jQuery(document).ready(function() {		
			App.setPage("index");  //Set current page
			App.init(); //Initialise plugins and elements
			//
			$("#mainFrame").height($(window).height());
			
			$(window).resize(function(){
				$("#mainFrame").height($(window).height());
			});
		});
		
	</script>
	<!-- /JAVASCRIPTS -->
</body>
</html>