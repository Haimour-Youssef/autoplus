@extends('front.layouts.app')


@section('title', 'Nos Services | ')

@section('content')



<section class="wow fadeIn top-space border-top text-white white-link bg-black padding-50px-tb sm-padding-30px-tb page-title-small">
	<div class="container">
		<div class="row align-items-center alt-font">
			<div class="col-lg-8 col-md-6 text-center text-md-left">
				<!-- start page title -->
				<h1 class=" font-weight-600 mb-0">Nos services</h1>
				<!-- end page title -->
				<!-- start sub title 
					<span class="d-block margin-5px-top">Contacter AUTOPLUS</span>-->
					<!-- end sub title -->
				</div>
				<div class="col-lg-4 white-link col-md-6 sm-margin-10px-top breadcrumb text-small justify-content-center justify-content-md-end">
					<!-- start breadcrumb -->
					<ul>
						<li><a href="{{ route('home') }}" class="text-white">Accueil</a></li>
						
						<li class="text-gray">Services</li>
					</ul>
					<!-- end breadcrumb -->
				</div>
			</div>
		</div>
	</section>
















	<section class="cover-background sm-padding-50px-bottom wow fadeIn" style="background: rgba(0, 0, 0, 0) url(&quot;http://www.themezaa.com/html/pofo/images/homepage-option15-bg.jpg&quot;) repeat scroll 0% 0%; visibility: visible; animation-name: fadeIn;padding: 70px 0;">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-xl-9 col-lg-7 col-md-11 text-center">
				<h4 class="alt-font text-white-2 mx-auto sm-width-100 sm-margin-15px-bottom">Services AUTOPLUS
				</h4>
				<p class="mx-auto sm-width-100 sm-margin-50px-bottom text-extra-large text-medium-gray">Nous savons que les professionnels de l’après-vente automobile ont besoin d’un distributeur de pièces automobiles fiable, qui puisse leur fournir la bonne pièce, au moment où ils en ont besoin, à un prix juste leur permettant d’assurer leur rentabilité tout en restant compétitif.
				</p>


			
			</div>





		</div>


	</div>
</div>
</section>
























 <!-- start video section -->
 <section class="p-0 wow fadeIn">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12  col-lg-4 cover-background md-height-500px sm-height-400px overflow-visible wow fadeInLeft" style="background-image:url({{ asset('asset/images/servi_new.jpg') }});background-position: center !important;">
                        <span class="icon-play-style-2 absolute-middle-center" >
                            <span>
                                <span class="video-icon bg-gradient-light-red-light-orange box-shadow-large">
								<img src="https://s3.eu-central-1.amazonaws.com/stagiaires.ma/recruiters/logos/2019/10/x100/11417_autoplus.png?v=1570785696" style="border-radius: 50%;">
								</span>
                            </span>
</span>
                    </div>
                    <div class="col-12  col-lg-8 padding-eight-half-all lg-padding-seven-all wow fadeInRight cover-background" style="background:url('http://www.themezaa.com/html/pofo/images/business-digital-bg.jpg') center center;">

                        <p class="text-extra-large text-extra-dark-gray alt-font font-weight-600" style="color:#d71427">Pour atteindre cet objectif, il est essentiel de prendre en compte toutes les problématiques et les besoins des pros. C’est grâce à cette démarche, que AUTOPLUS a déterminé tous les services essentiels à proposer pour vous accompagner dans la réussite de votre affaire</p>
                        <ul class="list-style-12 margin-35px-top">
						<li>	Une présence terrain pour être plus proches de vos besoins</li>
						<li>	Une logistique fiable et rapide pour assurer une livraison express</li>
						<li>	Un accompagnement sur mesure pour vous aider à développer votre business</li>
						<li>	Un accompagnement technique pour vous aider à faire face aux évolutions de vos métiers et du parc automobile</li>
						<li>	Des évènements qui rythment l’année pour vous faire bénéficier des dernières nouveautés et des meilleures offres.</li>

                           
                        </ul>
                        <a href="{{ route('home') }}" class="btn btn-small btn-rounded btn-dark-gray margin-40px-top sm-margin-25px-top">Voir nos produits</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end video section -->

















        @include('front.partials.servicess')

		@include('front.partials.partenaire')
	@endsection

