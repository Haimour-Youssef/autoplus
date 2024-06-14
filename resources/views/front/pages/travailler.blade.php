@extends('front.layouts.app')


@section('title', 'Travaillez dans AutoPlus | ')

@section('content')



<section class="wow fadeIn top-space p-0 parallax sm-background-image-center" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('asset/images/travailler_new.jpg') }}); background-position: 0px 0px; visibility: visible; animation-name: fadeIn;">
	<div class="opacity-extra-medium bg-black"></div>
	<div class="container-fluid position-relative full-screen" style="min-height: 638px;">
		<div class="slider-typography">
			<div class="slider-text-middle-main">
				<div class="slider-text-bottom">
					<div class="col-12 col-xl-6 col-lg-7 float-right bg-deep-pink-opacity padding-six-lr lg-padding-seven-lr padding-five-tb sm-padding-30px-all last-paragraph-no-margin">
						<div class="box-separator-line width-180px bg-white lg-width-120px md-width-90px d-none d-lg-block"></div>
						<h1 class="font-weight-600 alt-font text-white-2 width-95 md-width-100">Travailler chez AutoPlus</h1>
						<p class="text-extra-large font-weight-300 text-white-2 width-75 lg-width-85 md-width-95 sm-width-100 d-none d-md-block">« Le Capital humain, au cœur de nos préoccupations»</p>
						<br><br><br>
					</div>
				</div> 
			</div>
		</div>
	</div>
</section>









<section class="cover-background pb-0 sm-padding-50px-bottom wow fadeIn" style="background: rgba(0, 0, 0, 0) url(&quot;http://www.themezaa.com/html/pofo/images/homepage-option15-bg.jpg&quot;) repeat scroll 0% 0%; visibility: visible; animation-name: fadeIn;padding: 130px 0;">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-xl-9 col-lg-7 col-md-11 text-center">
			<h6 class="alt-font text-white-2 mx-auto sm-width-100 sm-margin-15px-bottom">Travailler chez Autoplus, c’est s’associer à une histoire qui existe depuis 1948 dans le domaine de pièces de rechanges et intégrer une famille de professionnels animés par la volonté d’apprendre et réussir dans une ambiance cordiale et saine.</h6>
				<p class="mx-auto sm-width-100 sm-margin-50px-bottom text-medium-gray">Notre culture RH est fondée sur le développement et la valorisation du capital humain à travers un apprentissage continu reposant sur la mise en place de projets innovants. Elle est basée également sur l’encouragement de la prise d’initiative et d’intrapreneuriat dans le cadre d’un travail en équipe harmonieux. Le salarié doit se sentir chez lui, se sentir valorisé et écouté et capable d’apprendre et d’avancer. </p>


				<p class="text-extra-large alt-font font-weight-400 text-white">Intégrer Autoplus est synonyme d’intégrer une entreprise familiale au sens noble process et doté en même temps des process d’une multinationale moderne et à la pointe de la technologie.</p>
				
				<a href="{{ route('offres') }}" class="btn btn-deep-pink btn-rounded btn-medium no-margin-lr">Voir nos offres d'emploi</a>

			</div>





		</div>





		<div class="col-12 text-center height-650px overflow-hidden lg-height-auto md-bottom--minus50 lg-position-relative wow fadeIn sm-bottom-0" >
			<img src="{{ asset('asset/images/homepage-option15-image-3.png') }}" alt="" data-no-retina="">
		</div>
	</div>
</div>
</section>



@include('front.partials.counters')



@endsection

