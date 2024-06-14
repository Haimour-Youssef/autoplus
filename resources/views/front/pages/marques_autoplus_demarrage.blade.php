@extends('front.layouts.app')


@section('title', 'Marque Autoplus - Démarrage électrique | ')

@section('content')















		<section class="wow fadeIn top-space cover-background mdd-produit-background-position-top " style="background-image:url('{{ asset('asset/images/header_batteries.jpg') }}');">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-column justify-content-center page-title-large text-left padding-30px-tb">
                        
                        <!-- start page title -->
                        <h1 class="alt-font text-white-2 font-weight-600 mb-0">Démarrage électrique</h1>
                        <!-- end page title -->
                    </div>
                </div>
            </div>
        </section>























	<section class="wow fadeIn">
            <div class="container"> 
                <div class="row align-items-center">
                    <div class="col-12 col-lg-5 text-center md-margin-50px-bottom wow fadeInLeft" >
                        <img src="{{ asset('asset/images/batteries_tof.jpg') }}" alt="" class="w-100" data-no-retina="">
                    </div> 
                    <div class="col-12 col-lg-7 wow fadeInRight last-paragraph-no-margin" data-wow-delay="0.2s">
                        <div class="padding-eight-lr text-center text-lg-left sm-no-padding w-100">
                            <p style="text-align: justify;">La batterie représente un composant vital pour assurer le bon fonctionnement de votre véhicule. Son rôle est de fournir l'énergie et l'intensité       électrique indispensables au démarrage de ce dernier. En outre, la                   batterie alimente en énergie électrique tous les éléments nécessitant une source d'alimentation, même lorsque le moteur est éteint. Cela inclut les phares, l'autoradio, le système de navigation, les vitres                       électriques et le système de fermeture centralisée. Ces dispositifs peuvent être activés simplement en mettant la clé sur la position de contact. Il est donc crucial de disposer d'une bonne batterie pour prévenir tout souci technique, qui peut souvent survenir au moment où l'on s'y attend le moins. AutoPlus met à votre disposition une vaste sélection de batteries convenant parfaitement à vos exigences.

</p>
                            
                        </div>
                    </div>
                </div>









				<div class="divider-full bg-extra-light-gray margin-seven-bottom margin-eight-top"></div>
	





				<div class="row align-items-center">
                     
                    <div data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;" class="col-12">
                    <h6>CONSEIL D'EXPERTS :</h6>
<p>Il est recommandé de changer votre batterie si vous remarquez des signes qui montrent qu'elle est en fin de vie :</p>
<ul class="list-style-12 margin-35px-top">
<li>Vous avez du mal à démarrer la voiture</li>
<li>Le voyant de batterie s'allume sur le tableau de bord</li>
<li>L'éclairage intérieur et extérieur n'est plus intense comme auparavant</li><li>L'âge de la batterie a dépassé 4 ou 5 ans</li>


<p>Donc pour éviter de tomber en panne, assurez-vous de vérifier de façon régulière l'état de votre batterie </p>

   
</ul>
</div>
                    </div>
                
                

            </div>
        </section>









	





		@include('front.partials.marque_autoplus')




	@endsection

