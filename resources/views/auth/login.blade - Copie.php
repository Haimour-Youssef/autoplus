<!DOCTYPE html>

<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.3 Author: ClipTheme -->

<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->

<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->

<!--[if !IE]><!-->

	<html lang="en" class="no-js">

	<!--<![endif]-->

	<!-- start: HEAD -->

	<head>

		<title>Authentification</title>

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

			<link rel="shortcut icon" href="favicon.ico" />

		</head>

		<!-- end: HEAD -->

		<!-- start: BODY -->

		<body class="login example2">

			<div class="main-login col-sm-4 col-sm-offset-4">

				<div class="logo"><i class="clip-locked "></i> Authentification

				</div>

				<!-- start: LOGIN BOX -->

				<div class="box-login">

					<h3>Mon espace</h3>

					<p>

						Veuillez saisir vos informations de sécurité

					</p>

					<form method="POST" action="{{ route('login') }}">

						@csrf

						

						

						

						

						

						@if($errors->any())

						

						<div class="errorHandler alert alert-danger ">

							<ul>

								@foreach($errors->all() as $error)

								<li><i class="fa fa-remove-sign"></i>{{ $error }}</li>

								@endforeach

							</ul>

							

							

						</div>

						

						@endif

						

						

						

						<fieldset>

							<div class="form-group @error('identify') has-error @enderror">

								<span class="input-icon">

									<input placeholder="Login / Email" id="identify" type="text" class="form-control" name="identify" value="{{ old('identify') }}" required autocomplete="identify" autofocus>

									<i class="fa fa-user"></i> </span>

								</div>

								<div class="form-group form-actions @error('password') has-error @enderror">

									<span class="input-icon">

										<input id="password" placeholder="Mot de passe" type="password" class="form-control password " name="password" required autocomplete="current-password">

										

										<i class="fa fa-lock"></i>

										<a class="forgot hidden" href="#">

											Mot de passe oublié

										</a> </span>

									</div>

									<div class="form-actions">

										<label for="remember" class="checkbox-inline">

											<input class="grey remember" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

											

											{{ __('Se souvenir de moi') }}

										</label>

										<button type="submit" class="btn btn-bricky pull-right">

											{{ __('Login') }} <i class="fa fa-arrow-circle-right"></i>

										</button>

										

									</div>

									<div class="new-account hidden">

										Don't have an account yet?

										<a href="#" class="register">

											Create an account

										</a>

									</div>

								</fieldset>

							</form>

						</div>

						<!-- end: LOGIN BOX -->

						<!-- start: FORGOT BOX -->

						<div class="box-forgot">

							<h3>Forget Password?</h3>

							<p>

								Enter your e-mail address below to reset your password.

							</p>

							<form class="form-forgot">

								<div class="errorHandler alert alert-danger no-display">

									<i class="fa fa-remove-sign"></i> You have some form errors. Please check below.

								</div>

								<fieldset>

									<div class="form-group">

										<span class="input-icon">

											<input type="email" class="form-control" name="email" placeholder="Email">

											<i class="fa fa-envelope"></i> </span>

										</div>

										<div class="form-actions">

											<a class="btn btn-light-grey go-back">

												<i class="fa fa-circle-arrow-left"></i> Back

											</a>

											<button type="submit" class="btn btn-bricky pull-right">

												Submit <i class="fa fa-arrow-circle-right"></i>

											</button>

										</div>

									</fieldset>

								</form>

							</div>

							<!-- end: FORGOT BOX -->

							<!-- start: REGISTER BOX -->

							<div class="box-register">

								<h3>Sign Up</h3>

								<p>

									Enter your personal details below:

								</p>

								<form class="form-register">

									<div class="errorHandler alert alert-danger no-display">

										<i class="fa fa-remove-sign"></i> You have some form errors. Please check below.

									</div>

									<fieldset>

										<div class="form-group">

											<input type="text" class="form-control" name="full_name" placeholder="Full Name">

										</div>

										<div class="form-group">

											<input type="text" class="form-control" name="address" placeholder="Address">

										</div>

										<div class="form-group">

											<input type="text" class="form-control" name="city" placeholder="City">

										</div>

										<div class="form-group">

											<div>

												<label class="radio-inline">

													<input type="radio" class="grey" value="F" name="gender">

													Female

												</label>

												<label class="radio-inline">

													<input type="radio" class="grey" value="M" name="gender">

													Male

												</label>

											</div>

										</div>

										<p>

											Enter your account details below:

										</p>

										<div class="form-group">

											<span class="input-icon">

												<input type="email" class="form-control" name="email" placeholder="Email">

												<i class="fa fa-envelope"></i> </span>

											</div>

											<div class="form-group">

												<span class="input-icon">

													<input type="password" class="form-control" id="password" name="password" placeholder="Password">

													<i class="fa fa-lock"></i> </span>

												</div>

												<div class="form-group">

													<span class="input-icon">

														<input type="password" class="form-control" name="password_again" placeholder="Password Again">

														<i class="fa fa-lock"></i> </span>

													</div>

													<div class="form-group">

														<div>

															<label for="agree" class="checkbox-inline">

																<input type="checkbox" class="grey agree" id="agree" name="agree">

																I agree to the Terms of Service and Privacy Policy

															</label>

														</div>

													</div>

													<div class="form-actions">

														<a class="btn btn-light-grey go-back">

															<i class="fa fa-circle-arrow-left"></i> Back

														</a>

														<button type="submit" class="btn btn-bricky pull-right">

															Submit <i class="fa fa-arrow-circle-right"></i>

														</button>

													</div>

												</fieldset>

											</form>

										</div>

										<!-- end: REGISTER BOX -->

										<!-- start: COPYRIGHT -->

										<div class="copyright">

											2020 &copy; Ctachs by Smos.

										</div>

										<!-- end: COPYRIGHT -->

									</div>

									<!-- start: MAIN JAVASCRIPTS -->

									<!--[if lt IE 9]>

										<script src="{{ asset('assets/plugins/respond.min.js') }}"></script>

										<script src="{{ asset('assets/plugins/excanvas.min.js') }}"></script>

										<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

										<![endif]-->

										<!--[if gte IE 9]><!-->

											<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

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

											<script src="{{ asset('assets/plugins/jquery-validation/dist/jquery.validate.min.js') }}"></script>

											<script src="{{ asset('assets/js/login.js') }}"></script>

											<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

											<script>

												jQuery(document).ready(function() {

													Main.init();

													Login.init();

												});

											</script>

										</body>

										<!-- end: BODY -->

										</html>