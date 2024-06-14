@extends('front.layouts.app')


@section('title', 'MEDIA | ')

@section('content')



<section class="wow fadeIn border-top top-space text-white white-link bg-black padding-50px-tb sm-padding-30px-tb page-title-small">
	<div class="container">
		<div class="row align-items-center alt-font">
			<div class="col-lg-8 col-md-6 text-center text-md-left">
				<!-- start page title -->
				<h1 class=" font-weight-600 mb-0">MEDIA</h1>
				<!-- end page title -->
				<!-- start sub title 
                    <span class="d-block margin-5px-top">Contacter AUTOPLUS</span>-->
                    <!-- end sub title -->
                </div>
                <div class="col-lg-4 white-link col-md-6 sm-margin-10px-top breadcrumb text-small justify-content-center justify-content-md-end">
                    <!-- start breadcrumb -->
                    <ul>
                       <li><a href="{{ route('home') }}" class="text-white">Accueil</a></li>

                       <li class="text-gray">Media</li>
                   </ul>
                   <!-- end breadcrumb -->
               </div>
           </div>
       </div>
   </section>










   @foreach ($actualites as $data)



   @if ($loop->odd)


   <section style='background: rgba(0, 0, 0, 0) url("http://www.themezaa.com/html/pofo/images/testimonial-bg.png") repeat scroll 0% 0%; visibility: visible; animation-name: fadeIn;'>

    <div class="container">
        <div class="row">
            <main class="col-12 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom md-padding-15px-lr">
                <!-- start post item --> 
                <div class="blog-post-content d-flex align-items-center flex-wrap md-padding-30px-bottom text-center text-md-left md-no-border">

                    <div class="col-12 col-lg-6 blog-text">
                        <div class="content margin-20px-bottom">

                            <a href="{{ route('media-details', ['actualite' => $data->id]) }}" class=" text-deep-pink margin-20px-bottom margin-20px-top alt-font text-extra-large font-weight-600 d-inline-block">{{ $data->title }}</a>

                            <div class=" text-large" style="height: 234px;overflow: hidden;">
                                {!! $data->content !!}
                            </div>


                        </div>

                        <a href="{{ route('media-details', ['actualite' => $data->id]) }}" class="btn-danger btn btn-small button border-radius-4 margin-5px-all lg-margin-15px-bottom d-table d-lg-inline-block md-margin-lr-auto">Lire la suite <i class="ti-arrow-right"></i></a>

                    </div>


                    <div class="col-12 col-lg-6 blog-image md-margin-30px-bottom sm-margin-20px-bottom text-right">
                        <img src="{{ asset('asset/images/favicon-big.png') }}" style="" data-no-retina=""><br>
                        <div style="padding-right: 50px;margin-top: -20px;">
                         <a href="{{ route('media-details', ['actualite' => $data->id]) }}"><img src="{{ $data->image->url('thumbails-450') }}" alt="" style="border-radius: 8% !important;"></a>
                         <img src="{{ $data->partenaire->image->url() }}" style="width: 160px;" alt="">
                     </div>
                 </div>



             </div>
             <!-- end post item -->  
         </main>

     </div>
 </div>
</section>




@else
















<section class="bg-black">

    <div class="container">
        <div class="row">
            <main class="col-12 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom md-padding-15px-lr">
                <!-- start post item --> 
                <div class="blog-post-content d-flex align-items-center flex-wrap md-padding-30px-bottom text-center text-md-left md-no-border">



                    <div class="col-12 col-lg-6 blog-image md-margin-30px-bottom sm-margin-20px-bottom text-right">
                        <img src="{{ asset('asset/images/favicon-big-n.png') }}" style="" data-no-retina=""><br>
                        <div style="padding-right: 50px;margin-top: -20px;">
                         <a href="{{ route('media-details', ['actualite' => $data->id]) }}"><img src="{{ $data->image->url('thumbails-450') }}" alt="" style="border-radius: 8% !important;"></a>
                         <img src="{{ $data->partenaire->image->url() }}" style="width: 160px;" alt="">
                     </div>
                 </div>




                 <div class="col-12 col-lg-6 blog-text">
                    <div class="content margin-20px-bottom">

                        <a href="{{ route('media-details', ['actualite' => $data->id]) }}" class=" text-deep-pink margin-20px-bottom margin-20px-top alt-font text-extra-large font-weight-600 d-inline-block">{{ $data->title }}</a>

                        <div class="text-white text-large" style="height: 234px;overflow: hidden;">
                            {!! $data->content !!}
                        </div>


                    </div>

                    <a href="{{ route('media-details', ['actualite' => $data->id]) }}" class="btn-danger btn btn-small button border-radius-4 margin-5px-all lg-margin-15px-bottom d-table d-lg-inline-block md-margin-lr-auto">Lire la suite <i class="ti-arrow-right"></i></a>

                </div>




            </div>
            <!-- end post item -->  
        </main>

    </div>
</div>
</section>























@endif


@endforeach










{!! $actualites->withQueryString()->links('front.partials.pagination') !!}







@endsection

