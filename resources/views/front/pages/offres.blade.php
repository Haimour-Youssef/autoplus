@extends('front.layouts.app')


@section('title', 'Nos Offres d\'emploi | ')

@section('content')



<section class="wow fadeIn top-space border-top text-white white-link bg-black padding-50px-tb sm-padding-30px-tb page-title-small">
	<div class="container">
		<div class="row align-items-center alt-font">
			<div class="col-lg-8 col-md-6 text-center text-md-left">
				<!-- start page title -->
				<h1 class=" font-weight-600 mb-0">OFFRES D'EMPLOI</h1>
				<!-- end page title -->
				<!-- start sub title 
				<span class="d-block margin-5px-top">Contacter AUTOPLUS</span>-->
				<!-- end sub title -->
			</div>
			<div class="col-lg-4 white-link col-md-6 sm-margin-10px-top breadcrumb text-small justify-content-center justify-content-md-end">
				<!-- start breadcrumb -->
				<ul>
					<li><a href="{{ route('home') }}" class="text-white">Accueil</a></li>
					
					<li class="text-gray">Nos offres d'emploi</li>
				</ul>
				<!-- end breadcrumb -->
			</div>
		</div>
	</div>
</section>







 <section style="background-image: url({{ asset('asset/images/testimonial-bg.png') }}); background-position: 0px 44.05px;" class="wow fadeIn ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="alt-font margin-5px-bottom text-uppercase  text-medium-gray">Nouveaux profils
talentueux!</div>
                        <h5 class="text-uppercase alt-font text-extra-dark-gray margin-20px-bottom font-weight-700 md-width-100">Nos offres d'emploi </h5>
                        <span class="separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto width-100px"></span>
                    </div>
                </div>
                <div class="row margin-100px-top md-margin-70px-top sm-margin-50px-top">










                	@foreach (App\Models\Offre::orderBy('id','desc')->get() as $data)

                    <!-- start blog post item -->
                    <div class="col-12 col-md-4 blog-post-style5 sm-margin-30px-bottom wow fadeInUp">
                        <div class="blog-post bg-white">
                            <div class="blog-post-images overflow-hidden">
                                <a href="{{ route('offre-details', ['offre' => $data->id]) }}">
                                    <img src="{{ $data->image->url('thumbails-450') }}" alt="">
                                </a>
                                <div class="blog-categories bg-white text-uppercase text-extra-small alt-font">{{ $data->contrat }} <img src="{{ asset('asset/images/icon-autoplus-3.png')}}" style="width: 24px;" alt="">{{ $data->ville->libelle }}</div>
                            </div>
                            <div class="post-details padding-40px-all sm-padding-20px-lr sm-padding-30px-tb">
                                <div class="blog-hover-color"></div>
                                <a href="{{ route('offre-details', ['offre' => $data->id]) }}" class="alt-font post-title text-medium text-extra-dark-gray width-90 d-block lg-width-100 margin-5px-bottom" style="text-transform:uppercase">{{ $data->title }}</a>
                                <div class="author">
                                    <span class="text-medium-gray text-uppercase text-extra-small d-inline-block">by ADMIN&nbsp;&nbsp;|&nbsp;&nbsp;{{ $data->created_at->format('j F, Y') }}</span>
                                </div>
                                <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                <!--<div style="max-height: 118px;overflow: hidden;height: 118px">{!! $data->content !!}</div>-->
                                <a href="{{ route('offre-details', ['offre' => $data->id]) }}" class="btn btn-small btn-rounded btn-transparent-dark-gray">Détails de l'offre <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end blog post item -->


                     @endforeach








                    
                </div>
            </div>
        </section>










@include('front.partials.counters')



@endsection

