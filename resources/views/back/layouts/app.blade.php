<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.3 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
	<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>{{ config('app.name', 'Laravel') }}</title>
		<!-- start: META -->
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />

		<!-- end: META -->
		<!-- start: MAIN CSS -->
		@include('back.layouts.css')
		<!-- end: MAIN CSS -->
		
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		@yield('css_only')
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="shortcut icon" href="favicon.ico" />
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body>
		@include('back.layouts.header')
		<!-- start: MAIN CONTAINER -->
		<div class="main-container">
			
			@include('back.layouts.menu')
			<!-- start: PAGE -->
			
			@yield('content')
			
			<!-- end: PAGE -->
		</div>
		<!-- end: MAIN CONTAINER -->
		<!-- start: FOOTER -->
		@include('back.layouts.footer')
		@include('back.partials.confirmation')
		
		@include('back.layouts.js')

		
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		@yield('js_only')
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<x-toast></x-toast>

		
		

	</body>
	<!-- end: BODY -->
	</html>