@extends('front.layouts.app')


@section('title', 'Espace candidats | ')

@section('content')



<section class="wow fadeIn top-space border-top text-white white-link bg-black padding-50px-tb sm-padding-30px-tb page-title-small">
	<div class="container">
		<div class="row align-items-center alt-font">
			<div class="col-lg-8 col-md-6 text-center text-md-left">
				<!-- start page title -->
				<h1 class=" font-weight-600 mb-0">ESPACE CANDIDATS</h1>
				<!-- end page title -->
				<!-- start sub title 
					<span class="d-block margin-5px-top">Contacter AUTOPLUS</span>-->
					<!-- end sub title -->
				</div>
				<div class="col-lg-4 white-link col-md-6 sm-margin-10px-top breadcrumb text-small justify-content-center justify-content-md-end">
					<!-- start breadcrumb -->
					<ul>
						<li><a href="{{ route('home') }}" class="text-white">Accueil</a></li>

						<li class="text-gray">ESPACE CANDIDATS</li>
					</ul>
					<!-- end breadcrumb -->
				</div>
			</div>
		</div>
	</section>















	<!-- start blog section -->
        <section class="wow fadeIn bg-black  padding-eight-bottom" style="background: url({{ asset('asset/images/bg-rh.jpg') }}) center;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-8 col-md-8 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                        <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">Espace candidats</div>
                        <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">C'est le moment de postuler!</h5>
                    </div>
                </div>
                <div class="row hover-option4 blog-post-style3 text-center">
                    <!-- start blog post item -->
                    <div class="grid-item col-12 col-md-6 md-margin-30px-bottom text-center  wow fadeInUp">
                        <a href="{{ route('register') }}"><img src="{{ asset('asset/images/rh-inscription-1.png') }}"></a>
                    </div>
                    <!-- end blog post item -->
                    <!-- start blog post item -->
                    <div class="grid-item col-12 col-md-6 md-margin-30px-bottom text-center  wow fadeInUp" data-wow-delay="0.2s">
                        <a href="{{ route('login') }}"><img src="{{ asset('asset/images/rh-inscription-2.png') }}"></a>
                    </div>
                    <!-- end blog post item -->
                    
                </div>
            </div>
        </section>
        <!-- end blog section -->











@include('front.partials.counters')
	@endsection

