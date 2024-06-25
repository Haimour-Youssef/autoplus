@extends('front.layouts.app')


@section('title', 'Espace candidats | ')

@section('content')


<section class="wow fadeIn border-top text-white white-link bg-black padding-50px-tb sm-padding-30px-tb page-title-small">
	<div class="container">
		<div class="row align-items-center alt-font">
			<div class="col-lg-8 col-md-6 text-center text-md-left">
				<!-- start page title -->
				<h1 class=" font-weight-600 mb-0">AUTHENTIFICATION</h1>
				<!-- end page title -->
				<!-- start sub title 
					<span class="d-block margin-5px-top">Contacter AUTOPLUS</span>-->
					<!-- end sub title -->
				</div>
				<div class="col-lg-4 white-link col-md-6 sm-margin-10px-top breadcrumb text-small justify-content-center justify-content-md-end">
					<!-- start breadcrumb -->
					<ul>
						<li><a href="{{ route('home') }}" class="text-white">Accueil</a></li>

						<li class="text-gray">ESPACE </li>
					</ul>
					<!-- end breadcrumb -->
				</div>
			</div>
		</div>
	</section>















	<!-- start accordion section -->
	<section class="bg-light-gray border-none p-0 wow fadeIn">
		<div class="container-fluid">
			<div class="row">

				<div class="col-12 col-lg-6 cover-background md-height-500px sm-height-350px wow fadeInLeft" style="background:url({{ asset('asset/images/career.jpg') }})"></div>


				<div class="col-12 col-lg-6 padding-four-lr padding-six-half-tb lg-padding-five-tb lg-padding-six-lr md-padding-six-all sm-padding-50px-tb sm-padding-15px-lr wow fadeInRight">




					<div class=" tab-style2">

						<h5 class="alt-font text-extra-dark-gray text-center text-lg-left margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom font-weight-600"><span class="font-weight-300 d-block sm-margin-15px-bottom">AUTHENTIFICATION</span> Accéder à votre espace!</h5>
						
						<div class="tab-pane med-text fade in active show" id="tab_sec1">
							<div class="row align-items-center">
								<div class="col-12">

									<div>



										@if($errors->any())
										
										<div class="errorHandler alert alert-danger ">
											<ul>
												@foreach($errors->all() as $error)
												<li><i class="fa fa-remove-sign"></i>{{ $error }}</li>
												@endforeach
											</ul>
											
											
										</div>
										
										@endif



										<form method="POST" action="{{ route('login') }}">
											@csrf
											<div id="success-contact-form" class="mx-0"></div>

											<input placeholder="Login" id="identify" type="text" class=" input-bg" name="identify" value="{{ old('identify') }}" required autocomplete="identify" autofocus>


											<input id="password" placeholder="Mot de passe" type="password" class=" password input-bg" name="password" required autocomplete="current-password">


											<div class="col-sm-12 no-padding-left" style="font-size: 12px;">
												<a style="color:blue" href="{{ route('register') }}"></a> &nbsp;&nbsp;<a href="{{ route('password.request') }}" style="color:blue">Mot de passe oublié?</a></div>



												<button type="submit" class="btn btn-dark-gray btn-small float-right text-extra-small btn-rounded margin-5px-top">
													{{ __('Login') }} <i class="fa fa-arrow-circle-right"></i>
												</button>


											</form>







										</div>
									</div>
								</div>
							</div>




						</div>


























					</div>

				</div>
			</div>
		</section>
		<!-- end accordion section -->





		@endsection

