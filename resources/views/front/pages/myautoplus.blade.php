@extends('front.layouts.app')


@section('title', 'MY AUTOPLUS | ')

@section('content')




<section class="p-0 top-space one-second-screen position-relative wow fadeIn" style="">
	<div class="opacity-medium bg-extra-dark-gray z-index-0"></div>
	<div class="container">
		<div class="row">
			<div class="col-12 one-second-screen page-title-large d-flex flex-column justify-content-center text-center">
				<!-- start sub title -->
				<span class="d-block text-white-2 opacity6 margin-10px-bottom alt-font">MY-AUTOPLUS</span>
				<!-- end sub title -->
				<!-- start page title -->
				<h1 class="alt-font text-white-2 font-weight-600 mx-auto width-55 md-width-80 sm-width-100 mb-0">Marques Autoplus</h1>
				<!-- end page title -->
			</div>
			<div class="down-section text-center"><a href="#section-down" class="inner-link"><i class="ti-arrow-down icon-extra-small text-white-2 bg-deep-pink padding-15px-all sm-padding-10px-all rounded-circle"></i></a></div>
		</div>
	</div>
	<div class="swiper-auto-fade swiper-container z-index-minus2 position-absolute top-0 width-100 height-100 swiper-container-fade swiper-container-initialized swiper-container-horizontal">
		<div class="swiper-wrapper" style="transition-duration: 0ms;"><div class="swiper-slide cover-background one-second-screen swiper-slide-duplicate swiper-slide-duplicate-active" style="background-image: url(&quot;http://www.themezaa.com/html/pofo/images/parallax-bg15.jpg&quot;); width: 1895px; transition-duration: 0ms; opacity: 1; transform: translate3d(0px, 0px, 0px);" data-swiper-slide-index="2"></div>
		<!-- start slider item -->
		<div class="swiper-slide cover-background one-second-screen swiper-slide-duplicate-next" style="background-image: url(&quot;http://www.themezaa.com/html/pofo/images/parallax-bg20.jpg&quot;); width: 1895px; transition-duration: 0ms; opacity: 1; transform: translate3d(-1895px, 0px, 0px);" data-swiper-slide-index="0"></div>
		<!-- end slider item -->
		<!-- start slider item -->
		<div class="swiper-slide cover-background one-second-screen swiper-slide-prev" style="background-image: url(&quot;http://www.themezaa.com/html/pofo/images/parallax-bg19.jpg&quot;); width: 1895px; transition-duration: 0ms; opacity: 1; transform: translate3d(-3790px, 0px, 0px);" data-swiper-slide-index="1"></div>
		<!-- end slider item -->
		<!-- start slider item -->
		<div class="swiper-slide cover-background one-second-screen swiper-slide-active" style="background-image: url(&quot;http://www.themezaa.com/html/pofo/images/parallax-bg15.jpg&quot;); width: 1895px; transition-duration: 0ms; opacity: 1; transform: translate3d(-5685px, 0px, 0px);" data-swiper-slide-index="2"></div>
		<!-- end slider item -->
		<div class="swiper-slide cover-background one-second-screen swiper-slide-duplicate swiper-slide-next" style="background-image: url(&quot;http://www.themezaa.com/html/pofo/images/parallax-bg20.jpg&quot;); width: 1895px; transition-duration: 0ms; opacity: 0; transform: translate3d(-7580px, 0px, 0px);" data-swiper-slide-index="0"></div></div>
		<div class="swiper-pagination swiper-auto-pagination display-none swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
		<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
	</section>



























	@endsection

