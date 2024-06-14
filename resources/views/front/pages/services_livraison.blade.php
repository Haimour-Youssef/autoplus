@extends('front.layouts.app')


@section('title', 'Nos Services | Livraison Express | ')

@section('content')



<section class="wow fadeIn top-space border-top text-white white-link bg-black padding-50px-tb sm-padding-30px-tb page-title-small">
	<div class="container">
		<div class="row align-items-center alt-font">
			<div class="col-lg-8 col-md-6 text-center text-md-left">
				<!-- start page title -->
				<h1 class=" font-weight-600 mb-0">Livraison Express</h1>
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

						<li class="text-gray">Livraison Express</li>
					</ul>
					<!-- end breadcrumb -->
				</div>
			</div>
		</div>
	</section>













    <section class="wow fadeIn bg-light-gray">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 col-md-11 text-center wow fadeInUp margin-eight-bottom">
                        <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">Livraion Express</div>
                        <h6 class="font-weight-300 text-extra-dark-gray mb-0">Passez votre commande et faites-vous livrer en un temps record : 1h seulement dans les zones de 
chalandise et J+1 partout au Maroc.</h6>
                    </div>
                </div>
                <div class="row">                   
                    <!-- start features box item -->
                    <div class="col-12 col-md-4 sm-margin-30px-bottom wow fadeInUp">
                        <div class="bg-white text-center h-100">
                            <a href="#modal-popup1" class="popup-with-move-anim"><img src="{{ asset('asset/images/liv1_new.jpg') }}" alt=""></a>
                            <div class="padding-45px-all md-padding-15px-all">
                                <span class="text-extra-dark-gray font-weight-600 d-block alt-font margin-10px-bottom">Livraison H+1</span>
                                <p class="text-medium-gray">Vous êtes situés près d’un magasin Autoplus ? Passez 
votre commande et faites-vous livrer en 1h seulement ...</p>
                                <a href="#modal-popup1"  class="popup-with-move-anim btn btn-small btn-rounded btn-transparent-dark-gray">Explorer <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start features box item -->
                    <div class="col-12 col-md-4 sm-margin-30px-bottom wow fadeInUp" data-wow-delay="0.2s">
                        <div class="bg-white text-center h-100">
                            <a href="#modal-popup2" class="popup-with-move-anim"><img src="{{ asset('asset/images/liv22_new.jpg') }}" alt=""></a>
                            <div class="padding-45px-all md-padding-15px-all">
                                <span class="text-extra-dark-gray font-weight-600 d-block alt-font margin-10px-bottom">Livraison deux fois par jour</span>
                                <p class="text-medium-gray">Vous êtes situés près de notre point de vente ? Vous pourrez 
certainement bénéficier d’un service de livraison ..</p>
                                <a href="#modal-popup2" class="popup-with-move-anim btn btn-small btn-rounded btn-transparent-dark-gray">Explorer <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start features box item -->
                    <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="bg-white text-center h-100">
                            <a href="#modal-popup3" class="popup-with-move-anim"><img src="{{ asset('asset/images/liv3_new.jpg') }}" alt=""></a>
                            <div class="padding-45px-all md-padding-15px-all">
                                <span class="text-extra-dark-gray font-weight-600 d-block alt-font margin-10px-bottom">Livraison J+1</span>
                                <p class="text-medium-gray">Aucun magasin Autoplus près de chez vous ? Notre plateforme 
centrale située à Casablanca peut vous livrer partout ..</p>
                                <a href="#modal-popup3" class="popup-with-move-anim btn btn-small btn-rounded btn-transparent-dark-gray">Explorer <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                </div>
            </div>
        </section>
































        
<div id="modal-popup1" class="zoom-anim-dialog mfp-hide  col-xl-8 col-lg-8 col-md-7 col-11 mx-auto bg-white text-center modal-popup-main padding-50px-all">


<section id="about" class="wow fadeIn cover-background pt-0" style="background-image:url('http://www.themezaa.com/html/pofo/images/business-about-bg.jpg');">
            <div class="container"> 
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 col-md-6 text-center sm-margin-35px-bottom wow fadeIn">
                        <img src="{{ asset('asset/images/liv1_new.jpg') }}" alt="" class="w-100 cat-det-icon">
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 padding-six-lr lg-padding-15px-lr text-center text-md-left wow fadeIn" data-wow-delay="0.2s">
                        <h3 class="font-weight-600 alt-font text-extra-dark-gray cat-det-title">Livraison H+1</h3>
                        <p class="cat-det-description text-extra-dark-gray">Vous êtes situés près d’un magasin Autoplus ? Passez 
votre commande et faites-vous livrer en 1h seulement si 
vous êtes installés dans la zone de chalandise de nos 
points de vente. <br /><br />
Ce service de livraison ultra rapide est conçu pour que 
vous puissiez répondre aux demandes de vos clients avec 
la bonne pièce, au bon moment.<br /><br />
Nous connaissons les enjeux de la disponibilité des pièces 
: un client qui vous confie sa voiture pour une opération 
d’entretien ou de réparation a besoin de la récupérer le 
plus vite possible. C’est pourquoi nous proposons un 
service de livraison à H+1 pour les professionnels installés 
dans la zone de chalandise de nos magasins.<br /><br />
Ce service, associé à un bon niveau de stock en magasin, 
vous assure une très grande disponibilité des pièces.
</p>
                        
                    </div>
                </div>
            </div>
        </section>












       




</div>





















        
<div id="modal-popup2" class="zoom-anim-dialog mfp-hide  col-xl-8 col-lg-8 col-md-7 col-11 mx-auto bg-white text-center modal-popup-main padding-50px-all">


<section id="about" class="wow fadeIn cover-background pt-0" style="background-image:url('http://www.themezaa.com/html/pofo/images/business-about-bg.jpg');">
            <div class="container"> 
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 col-md-6 text-center sm-margin-35px-bottom wow fadeIn">
                        <img src="{{ asset('asset/images/liv22_new.jpg') }}" alt="" class="w-100 cat-det-icon">
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 padding-six-lr lg-padding-15px-lr text-center text-md-left wow fadeIn" data-wow-delay="0.2s">
                        <h3 class="font-weight-600 alt-font text-extra-dark-gray cat-det-title">Livraison deux fois par jour</h3>
                        <p class="cat-det-description text-extra-dark-gray">Vous êtes situés près de notre point de vente ? Vous pourrez 
certainement bénéficier d’un service de livraison deux fois par 
jour.<br /><br />
Que vous passez votre commande par téléphone ou 
via notre application B2B, Autoplus s’engage à vous 
faire livrer jusqu’à 2 fois par jour. Nous sommes 
conscients que la satisfaction de vos clients 
conducteurs et votre niveau de productivité passent 
par des temps d’interventions les plus réduits possible. <br /><br />
A cet effet, nos services de livraison se rapprochent au 
plus près de vos besoins pour vous assurer une 
disponibilité de pièces optimale.

</p>
                        
                    </div>
                </div>
            </div>
        </section>












       




</div>





























        
<div id="modal-popup3" class="zoom-anim-dialog mfp-hide  col-xl-8 col-lg-8 col-md-7 col-11 mx-auto bg-white text-center modal-popup-main padding-50px-all">


<section id="about" class="wow fadeIn cover-background pt-0" style="background-image:url('http://www.themezaa.com/html/pofo/images/business-about-bg.jpg');">
            <div class="container"> 
                <div class="row align-items-center">
                    <div class="col-12 col-lg-4 col-md-4 text-center sm-margin-35px-bottom wow fadeIn">
                        <img src="{{ asset('asset/images/liv3_new.jpg') }}" alt="" class="w-100 cat-det-icon">
                    </div>
                    <div class="col-12 col-lg-8 col-md-8 padding-six-lr lg-padding-15px-lr text-center text-md-left wow fadeIn" data-wow-delay="0.2s">
                        <h3 class="font-weight-600 alt-font text-extra-dark-gray cat-det-title">Livraison J+1</h3>
                        <p class="cat-det-description text-extra-dark-gray">Aucun magasin Autoplus près de chez vous ? Notre plateforme 
centrale située à Casablanca peut vous livrer partout au Maroc à 
J+1.<br /><br />
La disponibilité des pièces est une des préoccupations principales 
des professionnels de l’automobile. Nous sommes conscients de 
ce besoin et nous agissons pour que vous puissiez toujours 
disposer de la bonne pièce, au bon moment.<br /><br />
Notre entrepôt s'étend sur plus de 7 000 mètres carrés, vous 
offrant plus de 40 000 références de stock. La plate-forme utilise 
les derniers développements en matière de gestion des processus 
logistiques, permettant à Autoplus de vous offrir des services 
logistiques hautement compétitifs. Notre plateforme nationale 
vous garantit : 
<br /><br />
<ul class="p-0 list-style-4 text-left text-extra-dark-gray">
                            <li>Une distribution fiable</li>
                            <li>Une qualité de préparation et de transport optimale</li>
                            <li>Une adaptabilité qui permet l’absorption des commandes 
même en période de pics d’activité</li>
                            
                        </ul>
</p>
                        
                    </div>
                </div>
            </div>
        </section>












       




</div>



        @include('front.partials.servicess')

		@include('front.partials.partenaire')
	@endsection

