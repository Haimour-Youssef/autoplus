@extends('front.layouts.app')


@section('title', 'Marque AUTOPLUS | ')

@section('content')



<section class="wow fadeIn top-space border-top text-white white-link bg-black padding-50px-tb sm-padding-30px-tb page-title-small">
	<div class="container">
		<div class="row align-items-center alt-font">
			<div class="col-lg-8 col-md-6 text-center text-md-left">
				<!-- start page title -->
				<h1 class=" font-weight-600 mb-0">Marque AUTOPLUS</h1>
				<!-- end page title -->
				<!-- start sub title 
					<span class="d-block margin-5px-top">Contacter <b>AUTOPLUS</b></span>-->
					<!-- end sub title -->
				</div>
				<div class="col-lg-4 white-link col-md-6 sm-margin-10px-top breadcrumb text-small justify-content-center justify-content-md-end">
					<!-- start breadcrumb -->
					<ul>
						<li><a href="{{ route('home') }}" class="text-white">Accueil</a></li>
						
						<li class="text-gray">Marque AUTOPLUS</li>
					</ul>
					<!-- end breadcrumb -->
				</div>
			</div>
		</div>
	</section>
















    <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('{{ asset('asset/images/bg-marque-autoplus1_new.jpg') }}');">
            <div class="container ">
                <div class="row">                  
                    <div class="col-12 col-lg-10">
                        <div style="background: rgba(255,255,255,.8) !important;" class="padding-five-all md-padding-70px-all sm-padding-25px-all bg-white box-shadow-light">
                            <img style="margin-bottom: 23px;" src="{{ asset('asset/images/logo_b.png') }}" />
                            <h5 class="text-extra-dark-gray margin-50px-bottom md-margin-20px-bottom alt-font">Une large gamme de pièces de rechange au meilleur prix !</h5>
                           
                            <div  class="privilege-content text-dark">
                                <p ><b>AUTOPLUS</b> est la marque exclusive, développée par le groupe Maghreb accessoires, dédiée aux pièces de rechange automobiles.</p><p>
Nous comprenons parfaitement les contraintes et les besoins des automobilistes : une meilleure qualité de produits à des prix imbattables. <b>AUTOPLUS</b> vous permet non seulement d’entretenir mais également de réparer et de rénover votre véhicule tout en maîtrisant votre budget.</p><p>
<b>Une gamme pas comme les autres … </b></p><p>
<b>AUTOPLUS</b> a été conçue et développée selon les normes OE. Une gamme large qui couvre : </p><p>
    <ul>
<li>	Filtration : filtre à air, filtre à huile, filtre à carburant ;</li>
<li>	Freinage : plaquettes de frein et mâchoire, disque de frein ;</li>
<li>	Amortissement/ Direction/ Suspension : amortisseurs, pièces de suspension, pièces de direction, pièces métal-caoutchouc ;</li>
<li>	Lubrifiant et fluide : Antigel, AdBlue</li>
<li>	Démarrage électrique : batterie.</li></ul> </p><p>
Pour plus d’informations concernant nos produits <b>AUTOPLUS</b>, veuillez consulter notre catalogue en ligne.
</p></div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>











         <!-- start skills section -->
         <section id="expertise" class="wow fadeIn parallax" data-stellar-background-ratio="0.4" style="background-image:url('http://www.themezaa.com/html/pofo/images/parallax-bg28.jpg');border-bottom: 1px solid rgb(255, 255, 255);">
            <div class="opacity-full bg-black"></div>
            <div class="container-fluid">
                <div class="row">
                    <!-- start pie charts item -->
                    <div class="col-12 col-lg-3 col-md-6 chart-style3 wow fadeInUp text-center md-margin-30px-bottom">
                        <div class="chart-percent"><img src="{{ asset('asset/images/j1.png') }}" /></div>
                        <div class="chart-text">
                            <span class="alt-font text-white font-weight-600 margin-5px-bottom margin-30px-top md-margin-15px-top d-block">Sélectionner</span>
                            <p class="width-90 mx-auto text-medium-gray sm-width-100">Je fais mon choix parmi + de 40 000 références</p>
                        </div>
                    </div>
                    <!-- end pie charts item -->
                    <!-- start pie charts item -->
                    <div class="col-12 col-lg-3 col-md-6 chart-style3 wow fadeInUp text-center md-margin-30px-bottom" data-wow-delay="0.2s">
                    <div class="chart-percent"><img src="{{ asset('asset/images/j2.png') }}" /></div>
                        <div class="chart-text">
                            <span class="alt-font text-white font-weight-600 margin-5px-bottom margin-30px-top md-margin-15px-top d-block">Achat prêt</span>
                            <p class="width-90 mx-auto text-medium-gray sm-width-100">Mon achat est prêt, je le retire immédiatement</p>
                        </div>
                    </div>
                    <!-- end pie charts item -->
                    <!-- start pie charts item -->
                    <div class="col-12 col-lg-3 col-md-6 chart-style3 wow fadeInUp text-center sm-margin-30px-bottom" data-wow-delay="0.4s">
                    <div class="chart-percent"><img  src="{{ asset('asset/images/j3.png') }}" /></div>
                        <div class="chart-text">
                            <span class="alt-font text-white font-weight-600 margin-5px-bottom margin-30px-top md-margin-15px-top d-block">Conseils experts</span>
                            <p class="width-90 mx-auto text-medium-gray sm-width-100">Je profite des conseils experts des vendeurs</p>
                        </div>
                    </div>
                    <!-- end pie charts item -->
                    <!-- start pie charts item -->
                    <div class="col-12 col-lg-3 col-md-6 chart-style3 wow fadeInUp text-center" data-wow-delay="0.6s">
                    <div class="chart-percent"><img src="{{ asset('asset/images/j4.png') }}" /></div>
                        <div class="chart-text">
                            <span class="alt-font text-white font-weight-600 margin-5px-bottom margin-30px-top md-margin-15px-top d-block">Possiblité d'échange</span>
                            <p class="width-90 mx-auto text-medium-gray sm-width-100 sm-no-margin">Un problème ? Je retourne ou j'échange ma pièce gratuitement</p>
                        </div>
                    </div>
                    <!-- end pie charts item -->
                </div>
            </div>
        </section> 
       


        @include('front.partials.marque_autoplus')
		
	@endsection

