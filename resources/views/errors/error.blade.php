<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.3 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>Clip-One - Responsive Admin Template</title>
		<!-- start: META -->
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/fonts/style.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/main-responsive.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/plugins/iCheck/skins/all.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/theme_light.css') }}" type="text/css" id="skin_color">
		<link rel="stylesheet" href="{{ asset('assets/css/print.css') }}" type="text/css" media="print"/>
		<!--[if IE 7]>
		<link rel="stylesheet" href="{{ asset('assets/plugins/font-awesome/css/font-awesome-ie7.min.css') }}">
		<![endif]-->
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="shortcut icon" href="favicon.ico" />
	</head>
	
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body class="error-full-page">
		<div id="sound" style="z-index: -1;"></div>
		<img id="background" src="" />
		<div id="cholder">
			<canvas id="canvas"></canvas>
		</div>
		<!-- start: PAGE -->
		<div class="container">
			<div class="row">
				<!-- start: 404 -->
				<div class="col-sm-12 page-error">
					<div class="error-number teal">
						{{ $erreure }}
					</div>
					<div class="error-details col-sm-6 col-sm-offset-3">
						<h3>Oops! You are stuck at 404</h3>
						<p>
							Unfortunately the page you were looking for could not be found.
							<br>
							It may be temporarily unavailable, moved or no longer exist.
							<br>
							Check the URL you entered for any mistakes and try again.
							<br>
							<a href="{{ route('home') }}" class="btn btn-teal btn-return">
								Return home
							</a>
							<br>
							Still no luck?
							<br>
							Search for whatever is missing, or take a look around the rest of our site.
						</p>
						<form action="#">
							<div class="input-group">
								<input type="text" placeholder="keyword..." size="16" class="form-control">
								<span class="input-group-btn">
									<button class="btn btn-teal">
										Search
									</button> </span>
							</div>
						</form>
					</div>
				</div>
				<!-- end: 404 -->
			</div>
		</div>
		<!-- end: PAGE -->
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="{{ asset('assets/plugins/respond.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/excanvas.min.js') }}"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') }}"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js') }}"></script>
		<!--<![endif]-->
		<script src="{{ asset('assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/blockUI/jquery.blockUI.js') }}"></script>
		<script src="{{ asset('assets/plugins/iCheck/jquery.icheck.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js') }}"></script>
		<script src="{{ asset('assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js') }}"></script>
		<script src="{{ asset('assets/plugins/less/less-1.5.0.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/jquery-cookie/jquery.cookie.js') }}"></script>
		<script src="{{ asset('assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js') }}"></script>
		<script src="{{ asset('assets/js/main.js') }}"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="{{ asset('assets/plugins/rainyday/rainyday.js') }}"></script>
		<script src="{{ asset('assets/js/utility-error404.js') }}"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Error404.init();				
			});
		</script>
	</body>
	<!-- end: BODY -->
</html>