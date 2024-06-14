@extends('front.layouts.app')


@section('title', 'Nos Services | Evènements | ')

@section('content')



<section class="wow fadeIn top-space border-top text-white white-link bg-black padding-50px-tb sm-padding-30px-tb page-title-small">
	<div class="container">
		<div class="row align-items-center alt-font">
			<div class="col-lg-8 col-md-6 text-center text-md-left">
				<!-- start page title -->
				<h1 class=" font-weight-600 mb-0">Evènements</h1>
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

						<li class="text-gray">Evènements</li>
					</ul>
					<!-- end breadcrumb -->
				</div>
			</div>
		</div>
	</section>

























	<section class="bg-light-gray border-none p-0 wow fadeIn">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-6 padding-seven-lr padding-six-half-tb lg-padding-five-tb lg-padding-six-lr md-padding-six-all sm-padding-50px-tb sm-padding-15px-lr wow fadeInLeft">
                        <h5 class="alt-font text-extra-dark-gray text-center text-lg-left margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom font-weight-600"><span class="font-weight-300 d-block sm-margin-15px-bottom">Services</span> Evènements</h5>
                        <!-- start accordion -->
                        <div class="panel-group accordion-style2" id="accordion-main">
                            <!-- start tab content -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main" href="#collapseOne">
                                        <div class="panel-title">
                                            
                                            <span class="text-extra-dark-gray sm-width-80 d-inline-block" style="color:#d71427">Des promotions exceptionnelles … toute l’année !</span>
                                            <i class="fas fa-angle-up float-right text-extra-dark-gray "></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse show" data-parent="#accordion-main">
                                    <div class="panel-body"  style="text-align: justify;">Chez Autoplus, bénéficiez des promotions exceptionnelles toute 
l’année en partenariat avec les plus grandes marques. Toutes ces 
promos sont consultables auprès de votre commercial ou auprès d’un 
de vos magasins Autoplus.</div>
                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- start tab content -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main" href="#collapseTwo">
                                        <div class="panel-title">
                                            
                                            <span class="text-extra-dark-gray sm-width-80 d-inline-block" style="color:#d71427">Des évènements qui rythment l’année !
</span>
                                            <i class="indicator fas fa-angle-down float-right text-extra-dark-gray "></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" data-parent="#accordion-main">
                                    <div class="panel-body" style="text-align: justify;">Autoplus programme également et constamment plusieurs 
évènements techniques afin de vous former aux développement du 
marché et répondre au mieux aux exigences de vos clients.<br /><br /> 
Tournée de formation, road-show, salons et même des formations 
dans nos salles, Autoplus vous accompagne dans votre 
développement et ce, sur toute l’année</div>
                                </div>
                            </div>
                            <!-- end tab content -->
                            

							<p class="text-extra-large w-85 xl-w-100"  style="text-align: justify;">Suivez-nous sur les réseaux sociaux pour être informé des évènements.</p>

							
							<div class="row justify-content-center">
                    <div class="col-10 col-lg-12 text-center elements-social social-icon-style-1">
                        <ul class="medium-icon">
						<li><a class="linkedin" href="https://linkedin.com/company/autoplus-maghrebaccessoires/?originalSubdomain=ma" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                           
                            <li><a class="facebook" href="https://web.facebook.com/maghrebaccessoires" target="_blank" style="color: white;"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="twitter" href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            
							<li><a class="youtube" href="https://www.youtube.com/channel/UCnUDnhuN2HnGlH2QPAe7C9A" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            
							<li><a class="instagram" href="https://instagram.com/autoplus_maghrebaccessoires/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            

							
                        </ul>
                    </div>
                </div>

                        </div>
                        <!-- end accordion -->
                    </div>
                    <div class="col-12 col-lg-6 cover-background md-height-500px sm-height-350px wow fadeInRight" style="background:url('{{ asset('asset/images/sr4.jpg') }}')"></div>
                </div>
            </div>
        </section>








        @include('front.partials.servicess')

		@include('front.partials.partenaire')
	@endsection

