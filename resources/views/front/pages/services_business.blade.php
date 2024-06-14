@extends('front.layouts.app')


@section('title', 'Nos Services | Accompagnement business | ')

@section('content')



<section class="wow fadeIn top-space border-top text-white white-link bg-black padding-50px-tb sm-padding-30px-tb page-title-small">
	<div class="container">
		<div class="row align-items-center alt-font">
			<div class="col-lg-8 col-md-6 text-center text-md-left">
				<!-- start page title -->
				<h1 class=" font-weight-600 mb-0">Accompagnement business</h1>
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

						<li class="text-gray">Accompagnement business</li>
					</ul>
					<!-- end breadcrumb -->
				</div>
			</div>
		</div>
	</section>


















	<section class="p-0 wow fadeIn bg-extra-dark-gray text-medium-gray">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center md-height-500px sm-height-350px cover-background wow fadeInLeft" style="background-image: url('{{ asset('asset/images/sr2.jpg') }}');">
                        
                    </div>
                    <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center text-center text-lg-left wow fadeInRight last-paragraph-no-margin">
                        <div class="padding-fifteen-all lg-padding-ten-all md-padding-90px-all sm-no-padding-lr sm-padding-40px-tb width-100">
                            <span class="text-medium margin-10px-bottom d-block alt-font">Nos Services</span>
                            <h4 class="alt-font text-light-gray" style="color:#d71427">Accompagnement business</h4>
                            <p class="text-extra-large width-85 lg-width-100" style="text-align: justify;">Gagnez du temps en utilisant notre site web ou l’application B2B, 
où que vous soyez et quand vous voulez !<br />
Vous pouvez commander, consulter le stock en temps réel, suivre 
votre commande et bien plus.</p>
                            <p class="text-extra-large width-85 lg-width-100" style="text-align: justify;">Notre solution d’accompagnement business vous permet 
également de comparer les prix des différents produits et de 
choisir les mieux adaptés pour vous !</p>
                            <a href="{{ route('contact') }}" class="btn btn-small margin-35px-top btn-white">Nous Contacter</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>







		<section class="wow fadeIn">
            <div class="container text-center">

			<div class="row">
                    <div class="col-12 text-center margin-100px-bottom md-margin-70px-bottom sm-margin-50px-bottom">
                        <div class="alt-font margin-5px-bottom text-uppercase text-small text-medium-gray"></div>
                        <h5 class="text-uppercase alt-font text-extra-dark-gray margin-20px-bottom font-weight-700 md-w-100">Comment ça marche ?</h5>
                        <span class="separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto w-100px"></span>
                    </div>
                </div>

                <div class="row">
                    <!-- start process step item -->
                    <div class="col-12 col-md-3 text-center feature-box-10 sm-margin-20px-bottom wow fadeInUp last-paragraph-no-margin" style="border-right: 1px solid rgba(0,0,0,.08);">
                        <div class="d-inline-block padding-five-all sm-padding-15px-all sm-no-margin-bottom margin-10px-bottom">
                            <span class="number alt-font border-width-2 border-all border-color-deep-pink rounded-circle letter-spacing-minus-1 text-extra-dark-gray">01</span>
                        </div>
                        <div class="alt-font text-medium text-extra-dark-gray margin-30px-bottom ">Identifiez le véhicule</div>
                        <ul class="p-0 list-style-4 text-left">
                            <li>Par l'immatriculation</li>
                            <li>Par le type mine</li>
                            <li>Par marque – modèle</li>
                            
                        </ul>
                    </div>
                    <!-- end process step item -->
                   
					 <!-- start process step item -->
					 <div class="col-12 col-md-3 text-center feature-box-10 wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s" style="border-right: 1px solid rgba(0,0,0,.08);">
                        <div class="d-inline-block padding-five-all sm-padding-15px-all sm-no-margin-bottom margin-10px-bottom">
                            <span class="number alt-font border-width-2 border-all border-color-deep-pink rounded-circle letter-spacing-minus-1 text-extra-dark-gray">02</span>
                        </div>
                        <div class="alt-font text-medium text-extra-dark-gray margin-30px-bottom ">Sélectionnez le produit</div>
                        <ul class="p-0 list-style-4 text-left">
                            <li>Sélectionnez une catégorie</li>
                            <li>Sélectionnez votre produit</li>
                            <li>Choisissez la référence</li>
                            
                        </ul>
						
                    </div>
                    <!-- end process step item -->

                    <!-- start process step item -->
                    <div class="col-12 col-md-3 text-center feature-box-10 wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s" style="border-right: 1px solid rgba(0,0,0,.08);">
                        <div class="d-inline-block padding-five-all sm-padding-15px-all sm-no-margin-bottom margin-10px-bottom">
                            <span class="number alt-font border-width-2 border-all border-color-deep-pink rounded-circle letter-spacing-minus-1 text-extra-dark-gray">03</span>
                        </div>
                        <div class="alt-font text-medium text-extra-dark-gray margin-30px-bottom ">Trouvez</div>
						<ul class="p-0 list-style-4 text-left">
                            <li>Les différents prix</li>
                            <li>La disponibilité en stock</li>
                            <li>Les informations techniques</li>
                            
							
                        </ul>
                    </div>
                    <!-- end process step item -->
					<!-- start process step item -->
                    <div class="col-12 col-md-3 text-center feature-box-10 wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.6s">
                        <div class="d-inline-block padding-five-all sm-padding-15px-all sm-no-margin-bottom margin-10px-bottom">
                            <span class="number alt-font border-width-2 border-all border-color-deep-pink rounded-circle letter-spacing-minus-1 text-extra-dark-gray">04</span>
                        </div>
                        <div class="alt-font text-medium text-extra-dark-gray margin-30px-bottom ">Commandez</div>
                        <ul class="p-0 list-style-4 text-left">
                            <li>Ajoutez votre produit au panier</li>
                            <li>Finalisez votre commande</li>
                           
                            
                        </ul>
                    </div>
                    <!-- end process step item -->
                </div>    
            </div>
        </section>



































        @include('front.partials.servicess')

		@include('front.partials.partenaire')
	@endsection

