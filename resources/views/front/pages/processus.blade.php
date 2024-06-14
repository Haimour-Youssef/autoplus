@extends('front.layouts.app')


@section('title', 'Processus de recrutement | ')

@section('content')


<style>
			.swiper-multy-row-container-valeurs .swiper-slide > div {
    min-height: auto;
}

</style>





<section class="wow fadeIn no-padding-bottom">
            
            <div class="swiper-auto-height-container position-relative w-100">
                <div class="swiper-wrapper overflow-hidden">
                    <!-- start slider item -->
                    <div class="swiper-slide pl-0 padding-100px-all sm-padding-40px-all cover-background position-relative" style="background-image:url({{ asset('asset/images/res1.jpg') }})">
                        <div class="position-relative width-50 lg-width-60 md-width-70 sm-width-100 d-inline-block slide-banner last-paragraph-no-margin">
						<div class="padding-80px-all md-padding-40px-all sm-width-100  sm-padding-fifteen-tb sm-padding-20px-all" style="background-color: white;
box-shadow: 0px 0px 390px 26px rgba(0,0,0,.4) inset;
opacity: .96;">
                                
<div style="text-align: center;width: 100%;" class="text-medium text-black alt-font margin-10px-bottom d-inline-block">Joindre Maghreb Accessoires</div>
<h5 style="text-align: center;" class="alt-font text-black width-100 md-width-100 mb-3">Processus de recrutement</h5>
<div class="alt-font text-medium-gray margin-20px-bottom text-uppercase text-small" style="text-align: center;">Apprécier vos champs de compétences et votre expérience</div>
<div style="text-align: center;width: 100%;" class="text-large text-deep-pink alt-font margin-20px-bottom d-inline-block">Découvrez les 4 étapes de votre processus de recrutement</div>
                                
                                
                            </div>
                        </div>
                    </div>
                    <!-- end slider item -->
                    <!-- start slider item -->
                    <div class="swiper-slide pl-0 padding-100px-all sm-padding-40px-all cover-background position-relative" style="background-image:url({{ asset('asset/images/res2.jpg') }})">
                        <div class="position-relative width-50 lg-width-60 md-width-70 sm-width-100 d-inline-block slide-banner last-paragraph-no-margin"> 
						<div class="padding-80px-all md-padding-40px-all sm-width-100  sm-padding-fifteen-tb sm-padding-20px-all" style="background-color: white;
box-shadow: 0px 0px 390px 26px rgba(0,0,0,.4) inset;
opacity: .96;">
                                
<div style="text-align: center;width: 100%;" class="text-medium text-black alt-font margin-10px-bottom d-inline-block">Joindre Maghreb Accessoires</div>
<h5 style="text-align: center;" class="alt-font text-black width-100 md-width-100 mb-3">Processus de recrutement</h5>
<div class="alt-font text-medium-gray margin-20px-bottom text-uppercase text-small" style="text-align: center;">Apprécier vos champs de compétences et votre expérience</div>
<div style="text-align: center;width: 100%;" class="text-large text-deep-pink alt-font margin-20px-bottom d-inline-block">Découvrez les 4 étapes de votre processus de recrutement</div>
                               
                                
                            </div>  
                        </div>
                    </div>
                    
                   
                </div>
				<!-- end slider item 
                <div class="navigation-area">
                    <div class="swiper-button-next swiper-next-style4 text-white-2"><i class="fas fa-arrow-up" aria-hidden="true"></i></div>
                    <div class="swiper-button-prev swiper-prev-style4"><i class="fas fa-arrow-down" aria-hidden="true"></i></div>
                </div>-->
            </div>
        </section>






			<!-- start feature box section -->
			<section class=" bg-black wow fadeIn" >

				<div class="container">


					<div class="row">
						

					<div class='col-sm-3 sm-margin-30px-bottom'><div class=" cntent"><img src="{{ asset('asset/images/pr1.png') }}"/><br/>
					<span class="text-deep-pink alt-font margin-10px-bottom md-no-margin-bottom d-inline-block text-medium">Préqualification des candidatures </span>
					<p style="text-align: justify;">Vous avez postulé à une de nos offres d’emploi et vous avez été présélectionné. Un entretien téléphonique aura lieu dans cette étape afin de mieux savoir et confirmer vos motivations.</p>
				</div></div>

					<div class='col-sm-3 sm-margin-30px-bottom'><div class=" cntent"><img src="{{ asset('asset/images/pr2.png') }}"/><br/>
					<span class="text-deep-pink alt-font margin-10px-bottom md-no-margin-bottom d-inline-block text-medium">Entretien RH</span>
					<p style="text-align: justify;">Après la confirmation de votre candidature, l’étape suivante consiste à faire un entretien physique avec notre équipe RH. Le but de cette étape est d’évaluer vos compétences, explorer votre expérience et motivations ainsi que de mettre le point sur certains détails du poste proposé, notamment sur les différentes missions et responsabilités liées au poste en question. </p>
				</div></div>


				<div class='col-sm-3 sm-margin-30px-bottom'><div class=" cntent"><img src="{{ asset('asset/images/pr3.png') }}"/><br/>
					<span class="text-deep-pink alt-font margin-10px-bottom md-no-margin-bottom d-inline-block text-medium">Entretien technique</span>
					<p style="text-align: justify;">Après la validation de votre candidature auprès de l’équipe RH, vous aurez un deuxième entretien technique avec votre manager hiérarchique et les responsables de métier en lien avec le poste pour lequel vous candidatez. Le but de cette étape est d’évaluer votre savoir-faire et vos compétences techniques afin d’avoir une projection au cœur du poste et de l’équipe avec laquelle vous allez collaborer. </p>
				</div></div>

				<div class='col-sm-3 sm-margin-30px-bottom'><div class=" cntent"><img src="{{ asset('asset/images/pr4.png') }}"/><br/>
					<span class="text-deep-pink alt-font margin-10px-bottom md-no-margin-bottom d-inline-block text-medium">Proposition du contrat</span>
					<p style="text-align: justify;">Félicitations ! Vous avez été retenu pour intégrer notre équipe. L’équipe RH vous contactera pour discuter davantage notre offre, la signature de votre contrat viendra par la suite auprès du service des ressources humaines pour finaliser votre processus de recrutement.</p>
				</div></div>
						
							
						
					</div>









				</div>
			</section>
			<!-- start feature box section -->








	@endsection

