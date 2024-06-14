@extends('front.layouts.app')


@section('title', 'Nos Services | Présence Terrain | ')

@section('content')



<section class="wow fadeIn top-space border-top text-white white-link bg-black padding-50px-tb sm-padding-30px-tb page-title-small">
	<div class="container">
		<div class="row align-items-center alt-font">
			<div class="col-lg-8 col-md-6 text-center text-md-left">
				<!-- start page title -->
				<h1 class=" font-weight-600 mb-0">Présence Terrain</h1>
				<!-- end page title -->
				<!-- start sub title 
					<span class="d-block margin-5px-top">Contacter AUTOPLUS</span>-->
					<!-- end sub title -->
				</div>
				<div class="col-lg-4 white-link col-md-6 sm-margin-10px-top breadcrumb text-small justify-content-center justify-content-md-end">
					<!-- start breadcrumb -->
					<ul>
						<li><a href="{{ route('home') }}" class="text-white">Accueil</a></li>
						
                        <li><a href="{{ route('services') }}" class="text-white">Services</a></li>

						<li class="text-gray">Présence Terrain</li>
					</ul>
					<!-- end breadcrumb -->
				</div>
			</div>
		</div>
	</section>


















	<section class="p-0 wow fadeIn bg-extra-dark-gray text-medium-gray">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center md-height-500px sm-height-350px cover-background wow fadeInLeft" style="background-image: url('{{ asset('asset/images/sr11_new.jpg') }}');">
                        
                    </div>
                    <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center text-center text-lg-left wow fadeInRight last-paragraph-no-margin">
                        <div class="padding-fifteen-all lg-padding-ten-all md-padding-90px-all sm-no-padding-lr sm-padding-40px-tb width-100">
                            <span class="text-medium margin-10px-bottom d-block alt-font">Nos Services</span>
                            <h4 class="alt-font text-light-gray" style="color:#d71427">Présence Terrain</h4>
                            <p class="text-extra-large width-85 lg-width-100 text-white" style="text-align:justify ;">Autoplus vous propose un service de proximité 
personnalisé, pour répondre à vos besoins et à tout 
moment. Nous savons que les professionnels de 
l’automobile ont besoin de réactivité pour assurer 
un service rapide et fiable à leurs clients 
automobilistes</p>
                            <p class="text-extra-large width-85 lg-width-100 text-white" style="text-align:justify ;">Votre commercial est à vos côtés toute l’année afin 
de vous faire bénéficier des meilleures promotions 
sur les pièces auto, des toutes dernières offres de 
service Autoplus et de répondre à vos questions et 
demandes spécifiques.</p>
                            <a href="{{ route('contact') }}" class="btn btn-small margin-35px-top btn-white">Nous Contacter</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>








































        @include('front.partials.servicess')

		@include('front.partials.partenaire')
	@endsection

