@extends('front.layouts.app')


@section('title', 'Marque AUTOPLUS | ')

@section('content')





<section class="wow fadeIn top-space border-top text-white white-link bg-black padding-50px-tb sm-padding-30px-tb page-title-small">
	<div class="container">
		<div class="row align-items-center alt-font">
			<div class="col-lg-8 col-md-6 text-left">
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





    <section class="no-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 no-padding"><img src="http://autoplus.net.ma/public/storage/bannieres/1698761076.jpg" /></div>
                </div>
            </div>
        </section>










        <section class="wow fadeIn bg-light-gray mdd-autoplus">
            <div class="container">
                
                <div class="row">
                    <!-- start feature box item -->
                    <div class="col-12 col-lg-4 banner-style2 md-margin-30px-bottom wow fadeInUp">
                    <div class="alt-font" style="text-align: center;color: #CF0B1C;font-size: 22px;padding: 15px 10px 15px;font-weight: 500;min-height: 82px;">Filtration</div>    
                    <figure> 
                            <div class="banner-image bg-black height-250px cover-background" style="background-image:url('{{ asset('asset/images/mdd-produits-1.jpg') }}');"></div>
                            <figcaption class="padding-seven-all bg-white d-flex align-items-center last-paragraph-no-margin">
                                <div class="text-center">
                                    <span class="text-large font-weight-600 text-extra-dark-gray alt-font text-uppercase padding-15px-bottom d-none" style="color:#ED0819;">Filtration </span>
                                    <p style="text-align: justify;">Transformez votre expérience de conduite avec notre gamme de filtres de haute performance, développée en étroite collaboration avec des partenaires de premier ordre homologués. </p>
                                    <a href="{{ route('marquesautoplus.filtration') }}" class="btn btn-dark-gray btn-small margin-30px-top sm-margin-15px-top">En savoir plus</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>  
                    <!-- end feature box -->
                    <!-- start feature box item -->
                    <div class="col-12 col-lg-4 banner-style2 md-margin-30px-bottom wow fadeInUp" data-wow-delay="0.2s">
                    <div class="alt-font" style="text-align: center;color: #CF0B1C;font-size: 22px;padding: 15px 10px 15px;font-weight: 500;min-height: 82px;">Freinage</div>    
                    <figure> 
                            <div class="banner-image bg-black height-250px cover-background" style="background-image:url('{{ asset('asset/images/mdd-produits-2.jpg') }}');""></div>
                            <figcaption class="padding-seven-all bg-white d-flex align-items-center last-paragraph-no-margin">
                                <div class="text-center">
                                    <span class="text-large font-weight-600 text-extra-dark-gray alt-font text-uppercase padding-15px-bottom d-none" style="color:#ED0819;">Freinage </span>
                                    <p style="text-align: justify;">Êtes-vous à la recherche d'une performance de freinage exceptionnelle et d'une fiabilité sans compromis ? Ne cherchez pas plus loin ! </p>
                                    <a href="{{ route('marquesautoplus.freinage') }}" class="btn btn-dark-gray btn-small margin-30px-top sm-margin-15px-top">En savoir plus</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>  
                    <!-- end feature box -->
                    <!-- start feature box item -->
                    <div class="col-12 col-lg-4 banner-style2 wow fadeInUp" data-wow-delay="0.4s">
                        
                    <div class="alt-font" style="text-align: center;color: #CF0B1C;font-size: 22px;padding: 15px 10px 15px;font-weight: 500;min-height: 82px;">Amortisseur/Direction/Suspension</div>  
                    <figure>
                            <div class="banner-image bg-black height-250px cover-background" style="background-image:url('{{ asset('asset/images/mdd-produits-3.jpg') }}');""></div>
                            <figcaption class="padding-seven-all bg-white d-flex align-items-center last-paragraph-no-margin">
                                <div class="text-center">
                                    
                                    <span class="text-large font-weight-600 text-extra-dark-gray alt-font text-uppercase padding-15px-bottom d-none"  style="color:#ED0819;">Amort./Direct./Susp.</span>
                                    <p style="text-align: justify;">Chez AutoPlus, nous sommes passionnés par la performance, la sécurité et le confort de votre conduite. </p>
                                    <a href="{{ route('marquesautoplus.amort') }}" class="btn btn-dark-gray btn-small margin-30px-top sm-margin-15px-top">En savoir plus</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>  
                    <!-- end feature box -->


                     <!-- start feature box item -->
                     <div class="col-12 col-lg-4 banner-style2 wow fadeInUp" >
                     <div class="alt-font" style="text-align: center;color: #CF0B1C;font-size: 22px;padding: 15px 10px 15px;font-weight: 500;min-height: 82px;">Lubrifiant & Fluide</div>  
                     <figure>
                            <div class="banner-image bg-black height-250px cover-background" style="background-image:url('{{ asset('asset/images/mdd-produits-4.jpg') }}');""></div>
                            <figcaption class="padding-seven-all bg-white d-flex align-items-center last-paragraph-no-margin">
                                <div class="text-center">
                                    
                                    <span class="text-large font-weight-600 text-extra-dark-gray alt-font text-uppercase padding-15px-bottom d-none" style="color:#ED0819;">Lubrifiant & Fluide </span>
                                    <p style="text-align:justify">Nous avons développé cette gamme en partenariat avec des grands acteurs homologués, détenteurs de certifications internationales et qui fabriquent pour le marché de l'aftermarket automobile. </p>
                                    <a href="{{ route('marquesautoplus.lubrif') }}" class="btn btn-dark-gray btn-small margin-30px-top sm-margin-15px-top">En savoir plus</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>  
                    <!-- end feature box -->

                     <!-- start feature box item -->
                     <div class="col-12 col-lg-4 banner-style2 wow fadeInUp" data-wow-delay="0.2s">
                     <div class="alt-font" style="text-align: center;color: #CF0B1C;font-size: 22px;padding: 15px 10px 15px;font-weight: 500;min-height: 82px;">Démarrage électrique</div>  
                     <figure>
                            <div class="banner-image bg-black height-250px cover-background" style="background-image:url('{{ asset('asset/images/mdd-produits-5.jpg') }}');""></div>
                            <figcaption class="padding-seven-all bg-white d-flex align-items-center last-paragraph-no-margin">
                                <div class="text-center">
                                    
                                    <span class="text-large font-weight-600 text-extra-dark-gray alt-font text-uppercase padding-15px-bottom d-none" style="color:#ED0819;">Démarrage électrique </span>
                                    <p style="text-align: justify;">La batterie représente un composant vital pour assurer le bon fonctionnement de votre véhicule. Son rôle est de fournir l'énergie et l'intensité électrique indispensables au démarrage de ce dernier.</p>
                                    <a href="{{ route('marquesautoplus.demarrage') }}" class="btn btn-dark-gray btn-small margin-30px-top sm-margin-15px-top">En savoir plus</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>  
                    <!-- end feature box -->

                    
                </div>
            </div>
        </section>
        






        <style>
            .banner-style2 {
  margin-top: 25px;
}
        </style>




        @include('front.partials.marque_autoplus2')
		
	@endsection

