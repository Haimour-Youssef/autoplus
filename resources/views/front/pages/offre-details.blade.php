@extends('front.layouts.app')


@section('title', 'Offres d\'emploi | ')

@section('content')



<section class="wow fadeIn border-top text-white white-link bg-black padding-50px-tb sm-padding-30px-tb page-title-small">
	<div class="container">
		<div class="row align-items-center alt-font">
			<div class="col-lg-8 col-md-6 text-center text-md-left">
				<!-- start page title -->
				<h1 class=" font-weight-600 mb-0">Offres d'emploi</h1>
				<!-- end page title -->
				<!-- start sub title 
          <span class="d-block margin-5px-top">Contacter AUTOPLUS</span>-->
          <!-- end sub title -->
        </div>
        <div class="col-lg-4 white-link col-md-6 sm-margin-10px-top breadcrumb text-small justify-content-center justify-content-md-end">
          <!-- start breadcrumb -->
          <ul>
           <li><a href="{{ route('home') }}" class="text-white">Accueil</a></li>

           <li><a href="{{ route('offres') }}" class="text-white">Offres d'emploi</a></li>
           <li class="text-gray">Détails</li>

         </ul>
         <!-- end breadcrumb -->
       </div>
     </div>
   </div>
 </section>






 <section class="bg-extra-dark-gray wow fadeIn">
  <div class="container">
    <div class="row align-items-center"> 



     @if (session('status')) 
     <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Félicitation!</h4>
      <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
      <hr>
      <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
    </div>
    @endif


    <div class="col-12 col-lg-7 lg-margin-50px-bottom wow fadeInLeft">

      <h5 class="alt-font text-light-gray margin-30px-bottom" style="text-transform:uppercase">{{ $data->title }}</h5>
      <ul class="p-0 list-style-4 list-style-color text-white">
        <li>REF 200{{ $data->id }}-AG2340</li>
        <li>Ville : {{ $data->ville->libelle }}</li>
        <li>Contrat : {{ $data->contrat }}</li>
        <li>Date : {{ $data->created_at->format('j F, Y') }}</li>

      </ul>

      @if($postuler and (Route::has('register'))) 

      <a href="#" class="btn btn-white btn-extra-large text-large btn-rounded margin-20px-top"><i class="fas fa-play-circle icon-very-small margin-5px-right no-margin-left" aria-hidden="true"></i> 
        déjà postulé
      </a>
      @else
      <a href="{{ route('offre-postuler', ['offre' => $data->id]) }}" class="btn btn-white btn-extra-large text-large btn-rounded margin-20px-top"><i class="fas fa-play-circle icon-very-small margin-5px-right no-margin-left" aria-hidden="true"></i> 
        Postuler 
      </a>

      @endif



    </div>
    <div class="col-12 col-lg-5 wow fadeInRight">
      <img src="{{ $data->image->url('thumbails-450') }}" alt="" class="w-100 border-radius-6 box-shadow">
    </div> 
  </div>
</div>
</section>
<!-- end information section -->  


<!-- start post content section --> 
<section >
  <div class="container">
    <div class="row">

      <main class="col-12 col-lg-9 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom pl-0 md-no-padding-right">

        <div class="testimonial-content-box padding-five-all bg-white border-radius-6 box-shadow arrow-bottom md-padding-eight-all col-12 col-lg-12 mx-auto text-left margin-20px-tb md-margin-10px-tb">
          <div >

            {!! $data->content !!}
          </div>
        </div>

        <div class="col-12  margin-eight-top">
          <div class="divider-full bg-medium-light-gray"></div>
        </div>
        
        


        

      </main>
      <aside class="col-12 col-lg-3 float-right">
        <div class="d-inline-block width-100 margin-45px-bottom sm-margin-25px-bottom">
          <form action="{{ route('offres') }}" method="post">
            <div class="position-relative">
              <input type="text" class="bg-transparent text-small m-0 border-color-extra-light-gray medium-input float-left" placeholder="Entrer un mot clé...">
              <button type="submit" class="bg-transparent  btn position-absolute right-0 top-1"><i class="fas fa-search ml-0"></i></button>
            </div>   
          </form>
        </div>
        
        <div class="margin-50px-bottom">
          <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Suivez-nous</span></div>
          <div class="social-icon-style-1 text-center">
            <ul class="extra-small-icon">
              <li><a class="facebook" href="https://web.facebook.com/maghrebaccessoires" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
              <li><a class="dribbble" href="http://instagram.com/autoplus_maghrebaccessoires/" target="_blank"><i class="fab fa-instagram"></i></a></li>
              <li><a class="linkedin" href="https://www.linkedin.com/company/autoplus-maghrebaccessoires/?viewAsMember=true" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="margin-45px-bottom sm-margin-25px-bottom">
          <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Offres</span></div>
          <ul class="list-style-6 margin-50px-bottom text-small">
            <li><a href="{{ route('offres') }}">Casablanca</a><span>12</span></li>
            <li><a href="{{ route('offres') }}">Rabat</a><span>05</span></li>
            <li><a href="{{ route('offres') }}">Oujda</a><span>08</span></li>
            <li><a href="{{ route('offres') }}">Berrchid</a><span>10</span></li>
            
          </ul>   
        </div>
        <div class="bg-deep-pink padding-30px-all text-white-2 text-center margin-45px-bottom sm-margin-25px-bottom">
          <i class="fas fa-quote-left icon-small margin-15px-bottom d-block"></i>
          <span class="text-extra-large font-weight-300 margin-20px-bottom d-block">Nous recherchons de nouveaux profils talentueux!
          </span>
          <a class="btn btn-very-small btn-transparent-white border-width-1 text-uppercase" href="{{ route('offres') }}">Découvrez nos offres
          </a>
        </div>

        <!--
        <div class="margin-45px-bottom sm-margin-25px-bottom">
          <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Newsletter</span></div>
          <div class="d-inline-block width-100">
            <form>
              <div class="position-relative">
                <input type="email" class="bg-transparent text-small m-0 border-color-extra-light-gray medium-input float-left" placeholder="Enter your email...">
                <button type="submit" class="bg-transparent text-large btn position-absolute right-0 top-3"><i class="far fa-envelope ml-0"></i></button>
              </div>   
            </form>
          </div>
        </div>-->






      </aside>
    </div>
  </div>
</section>
<!-- end blog content section -->  













<!-- start call to action section -->
<section class="wow fadeIn padding-60px-tb md-padding-40px-tb bg-deep-pink">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 position-relative text-center">
        <span class="text-extra-large text-white-2 alt-font d-inline-block margin-5px-top margin-30px-right sm-no-margin-right sm-no-margin-top sm-margin-15px-bottom sm-width-100">Vous n'êtes pas encore inscrit? C'est le moment de postuler</span>
        <a href="{{ route('register') }}"  class="btn btn-white btn-medium align-top sm-no-margin-right btn-rounded">S'inscrire maintenant <i class="fas fa-register"></i></a>
      </div>                    
    </div>
  </div>
</section>
<!-- end call to action section -->























@endsection

