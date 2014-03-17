<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>B2B-ICRM-WX v1.0</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- STYLESHEETS -->
        <!--[if lt IE 9]>
        <script src="{{ asset('/themes/js/flot/excanvas.min.js') }}"></script>
        <script src="{{ asset('/themes/js/html5/html5.js') }}"></script>
        <script src="{{ asset('/themes/js/css3-mediaqueries/css3-mediaqueries.js') }}"></script>
        <![endif]-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/themes/css/cloud-admin.css') }}" >
	<link rel="stylesheet" type="text/css" href="{{ asset('/themes/font-awesome/css/font-awesome.min.css') }}">
	<!-- DATE RANGE PICKER -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/themes/js/bootstrap-daterangepicker/daterangepicker-bs3.css') }}" />
	<!-- UNIFORM -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/themes/js/uniform/css/uniform.default.min.css') }}" />
	<!-- ANIMATE -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/themes/css/animatecss/animate.min.css') }}" />
	<!-- FONTS -->
	<script type="text/javascript">var baseurl = "{{ url('/') }}";</script>
</head>
<body class="login">	
	<!-- PAGE -->
	<section id="page">
			
			<!-- LOGIN -->
			<section id="login_bg" class="visible">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div class="login-box">
								<h2 class="bigintro">欢迎使用<br>B2B-iCRM-WX v1.0</h2>
								<div class="divide-40"></div>
								<form role="form">
								  <div class="form-group">
									<label for="exampleInputEmail1">Email</label>
									<i class="fa fa-envelope"></i>
									<input type="email" class="form-control" id="exampleInputEmail1" >
								  </div>
								  <div class="form-group"> 
									<label for="exampleInputPassword1">密码</label>
									<i class="fa fa-lock"></i>
									<input type="password" class="form-control" id="exampleInputPassword1" >
								  </div>
								  <div>
									<button type="button" id="login_button" class="btn btn-danger">登陆</button>
								  </div>
								</form>
								<!-- SOCIAL LOGIN -->
								<div class="divide-20"></div>
								<!-- /SOCIAL LOGIN -->
								<div class="login-helpers">
									<a href="#" onclick="swapScreen('forgot_bg');return false;">忘记密码？</a> | 
									<a href="#" onclick="swapScreen('register_bg');return false;">申请账号</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--/LOGIN -->
			<!-- REGISTER -->
			<section id="register_bg" class="font-400">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div class="login-box">
								<h2 class="bigintro">申请账号</h2>
								<div class="divide-40"></div>
								<form role="form">
								  <div class="form-group">
									<label for="exampleInputName">中文名</label>
									<i class="fa fa-font"></i>
									<input type="text" class="form-control" id="exampleInputName" >
								  </div>
								  <div class="form-group">
									<label for="exampleInputUsername">英文名</label>
									<i class="fa fa-user"></i>
									<input type="text" class="form-control" id="exampleInputUsername" >
								  </div>
								  <div class="form-group">
									<label for="exampleInputEmail1">Email</label>
									<i class="fa fa-envelope"></i>
									<input type="email" class="form-control" id="exampleInputEmail1" >
								  </div>
								  <div class="form-group"> 
									<label for="exampleInputPassword1">密码</label>
									<i class="fa fa-lock"></i>
									<input type="password" class="form-control" id="exampleInputPassword1" >
								  </div>
								  <div class="form-group"> 
									<label for="exampleInputPassword2">再次输入密码</label>
									<i class="fa fa-check-square-o"></i>
									<input type="password" class="form-control" id="exampleInputPassword2" >
								  </div>
								  <div>
									<button type="submit" class="btn btn-success">注册</button>
								  </div>
								</form>
								<!-- SOCIAL REGISTER -->
								<div class="divide-20"></div>
								<!-- /SOCIAL REGISTER -->
								<div class="login-helpers">
									<a href="#" onclick="swapScreen('login_bg');return false;"> 返回登陆</a> <br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--/REGISTER -->
			<!-- FORGOT PASSWORD -->
			<section id="forgot_bg">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div class="login-box">
								<h2 class="bigintro">重置密码</h2>
								<div class="divide-40"></div>
								<form role="form">
								  <div class="form-group">
									<label for="exampleInputEmail1">输入您的邮箱地址</label>
									<i class="fa fa-envelope"></i>
									<input type="email" class="form-control" id="exampleInputEmail1" >
								  </div>
								  <div>
									<button type="submit" class="btn btn-info">发 送</button>
								  </div>
								</form>
								<div class="login-helpers">
									<a href="#" onclick="swapScreen('login_bg');return false;">返回登陆</a> <br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- FORGOT PASSWORD -->
	</section>
	<!--/PAGE -->
	<!-- JAVASCRIPTS -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- JQUERY -->
	<script type="text/javascript" src="{{ asset('/themes/js/jquery/jquery-1.10.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/themes/js/jquery/jquery-migrate-1.2.1.min.js') }}"></script>
	<!-- JQUERY UI-->
	<script type="text/javascript" src="{{ asset('/themes/js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js') }}"></script>
	<!-- BOOTSTRAP -->
	<script type="text/javascript" src="{{ asset('/themes/bootstrap-dist/js/bootstrap.min.js') }}"></script>
	<!-- UNIFORM -->
	<script type="text/javascript" src="{{ asset('/themes/js/uniform/jquery.uniform.min.js') }}"></script>
	<!-- BACKSTRETCH -->
	<script type="text/javascript" src="{{ asset('/themes/js/backstretch/jquery.backstretch.min.js') }}"></script>

	<!-- CUSTOM SCRIPT -->
	<script type="text/javascript" src="{{ asset('/themes/js/script.js') }}"></script>
	
	<script>
		jQuery(document).ready(function() {		
			App.setPage("login_bg");  //Set current page
			App.init(); //Initialise plugins and elements
		});
	</script>
	<script type="text/javascript">
		function swapScreen(id) {
			jQuery('.visible').removeClass('visible animated fadeInUp');
			jQuery('#'+id).addClass('visible animated fadeInUp');
		}
	</script>
	<!-- /JAVASCRIPTS -->
</body>
</html>