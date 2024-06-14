@extends('front.layouts.app')


@section('title', 'Nos Produits | ')

@section('content')

















@if(App\Models\Categorie::where('parent',$categorie->id)->count() == 0)

 <!-- start video section -->
 <section class="p-0 wow fadeIn top-space">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12  col-lg-4 cover-background md-height-500px sm-height-400px overflow-visible wow fadeInLeft" style="background-image:url('{{ Storage::url('categories/big-'.$categorie->id.'.jpg') ?? 'http://www.themezaa.com/html/pofo/images/business-video.jpg' }}');background-position: center !important;
min-height: 550px;">
                        <a class="icon-play-style-2 absolute-middle-center" href="#">
                            <span>
                                <span class="video-icon bg-gradient-light-red-light-orange box-shadow-large">
								<img src="{{ $categorie->image ? $categorie->image->url() : '' }}" style="border-radius: 50%;">
								</span>
                            </span>
                        </a>
                    </div>
                    <div class="col-12  col-lg-4 padding-eight-half-all lg-padding-seven-all wow fadeInRight cover-background" style="background:url('http://www.themezaa.com/html/pofo/images/business-digital-bg.jpg') center center;">

                        <h3 class=" text-extra-dark-gray alt-font font-weight-600">
                        {{ $categorie->title }}</h3>

                        <p class="text-large width-85 md-width-100 font-weight-300 mx-auto mb-0 text-medium-gray">{!! ($categorie->description) !!}</p>

                        </div>



                        <div class="det_produit_img_part pr-3 col-12  col-lg-4 padding-eight-half-all lg-padding-seven-all wow fadeInRight cover-background">

                        <h3 class=" text-extra-dark-gray alt-font font-weight-600">
                        Nos Marques</h3>

                        <div class="row" style="">
                            


                        @foreach ($categorie->partenaires as $data)



                        <a href="{{ $data->lien }}" target="_blank">
                            <img src="{{ $data->image->url() }}" alt="" data-no-retina="">
                        </a>

                        @endforeach
                       

                        </div>

                </div>
            </div>
        </section>
        <!-- end video section -->





@else






<section class="parallax wow fadeIn top-space " data-stellar-background-ratio="0.6" style="background-image:url('http://www.themezaa.com/html/pofo/images/homepage-9-parallax-img5.jpg');">
<div class="opacity-medium bg-extra-dark-gray"></div>
<div class="container position-relative z-index-2">
<div class="row justify-content-center">
<div class="col-12 col-md-10 text-center margin-seven-bottom sm-margin-40px-bottom text-medium-gray">
<img src="{{ $categorie->image ? $categorie->image->url() : '' }}" style="background: rgb(255, 255, 255,1);
width: 113px;
border-radius: 50%;
margin-right: 5px;
padding: 17px;
margin-bottom: 13px;
" alt="" data-no-retina="">
<h4 class="alt-font text-light-gray width-90 mx-auto">{{ $categorie->title }}</h4>
<p class="text-large width-85 md-width-100 font-weight-300 mx-auto mb-0 text-medium-gray">{!! ($categorie->description) !!}</p>
</div>
</div>
<div class="row">




@foreach (App\Models\Categorie::orderBy('classement')->with('image')->where('parent',$categorie->id)->get() as $cat)

@php $imgss = ''; @endphp

@foreach ($cat->partenaires as $dataP)

@php $imgss = $imgss . '<img src="'.$dataP->image->url().'" alt="" data-no-retina="">'; @endphp

@endforeach


<!-- start feature box item -->
<div class="col-6 col-md-3 text-center feature-box-9 sm-height-200px wow zoomIn">
<a href="#modal-popup3" class="popup-with-move-anim">&nbsp;</a>
<a data-title="{{ $cat->title }}" 
data-description="{{ $cat->description }}"
data-ico="{{ Storage::url('categories/'.$cat->id.'.jpg') ?? '' }}"
data-img='<div class="row">{{ $imgss }}</div>'
class="lien-pro-anim"
href="#"><img src="{{ $cat->image ? $cat->image->url() : $categorie->image->url() }}" style="background: rgb(255, 255, 255,.9);
width: 98px;
border-radius: 30%;
margin-right: 5px;
padding: 23px;
margin-bottom: 13px;

" alt="" data-no-retina=""></a>
<p class="alt-font text-medium text-light-gray">{{ $cat->title }}</p>
<div class="text-bottom-line border-color-deep-pink"></div>
</div>
<!-- end feature box item -->


@endforeach

</div>
</div>
</section>




<div id="modal-popup3" class="zoom-anim-dialog mfp-hide  col-xl-8 col-lg-8 col-md-7 col-11 mx-auto bg-white text-center modal-popup-main padding-50px-all">


<section id="about" class="wow fadeIn cover-background pt-0" style="background-image:url('http://www.themezaa.com/html/pofo/images/business-about-bg.jpg');">
            <div class="container"> 
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 col-md-6 text-center sm-margin-35px-bottom wow fadeIn">
                        <img src="" alt="" class="w-100 cat-det-icon">
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 padding-six-lr lg-padding-15px-lr text-center text-md-left wow fadeIn" data-wow-delay="0.2s">
                        <h3 class="font-weight-600 alt-font text-extra-dark-gray cat-det-title"></h3>
                        <p class="cat-det-description"></p>
                        
                    </div>
                </div>
            </div>
        </section>












       

 <!-- start clients carousel slider section -->
 <section class="border-top border-color-extra-light-gray wow fadeIn pt-0 det_produit_img_part">
            <div class="container text-center cat-det-img">
                <div class="row">    
                    

               


                </div>    
            </div>
        </section>


</div>







<!-- start clients slider section -->
<section class="wow fadeIn det_produit_img_part">
    <div class="container text-center">
        <div class="row">
            <div class="col-12 text-center">
                <h5 class="text-uppercase alt-font text-black margin-20px-bottom font-weight-700 md-width-100">Marques {{ $categorie->title }}</h5>
                <span class="margin-50px-bottom separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto width-100px"></span>
            </div>
        </div>


        <div class="row">
            <div class="col-12 hover-option4 margin-5px-bottom">
                <div class="swiper-multy-row-container overflow-hidden">
                    <div class="swiper-wrapper">




                    @foreach ($categorie->partenaires as $data)



                        <!-- start portfolio slider item -->
                        <div class="swiper-slide grid-item">
                            <a href="{{ $data->lien }}" target="_blank">
                                <figure>
                                    <div class="portfolio-img "><img src="{{ $data->image->url() }}" alt=""/></div>
                                    <figcaption class="d-flex justify-content-center align-items-center text-center">
                                        <div class="portfolio-hover-content position-relative last-paragraph-no-margin">
                                            <span class="font-weight-600 line-height-normal alt-font text-white-2 text-uppercase margin-5px-bottom d-block">{{ ucfirst($data->libelle) }}</span>
                                            <p class="text-medium-gray text-uppercase text-extra-small">{{ $data->lien }}</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <!-- end portfolio slider item -->


                        @endforeach



                    </div>
                    <!-- start slider pagination -->
                    <div class="swiper-portfolio-prev swiper-button-black-highlight"><i class="ti-arrow-left"></i></div>
                    <div class="swiper-portfolio-next swiper-button-black-highlight"><i class="ti-arrow-right"></i></div>
                    <!-- end slider pagination -->
                </div>
            </div>
        </div>


    </div>
</section>
<!-- end clients slider section -->



 @endif




















<!--
<section class="bg-black no-display">
<div class="container">

<div class="row justify-content-center">
<div class="col-12 col-lg-8">

<div class="panel-group accordion-style1" id="accordion-design2">
<div class="panel">
<div class="panel-heading">
<a data-toggle="collapse" data-parent="#accordion-design2" href="#accordion-design2-design1" class="collapsed" aria-expanded="false"><div class="panel-title font-weight-500 text-white-2 text-uppercase"  style="color: #C50B3E;" ><img src="{{ asset('asset/favicon.png') }}" style="margin-right: 14px;width: 18px;" data-no-retina="">{!! (App\Models\Parametre::where('id',11)->select('valeur')->get()->first()->valeur) !!}<span class="float-right"><i class="ti-minus"></i></span></div></a>
</div>
<div id="accordion-design2-design1" class="panel-collapse collapse show" data-parent="#accordion-design2" aria-expanded="false" role="tablist">
<div class="panel-body text-white">
{!! (App\Models\Parametre::where('id',15)->select('valeur')->get()->first()->valeur) !!}
</div>
</div>
</div>

<div class="panel">
<div class="panel-heading">
<a data-toggle="collapse" data-parent="#accordion-design2" href="#accordion-design2-design2" class="collapsed" aria-expanded="false"><div class="panel-title font-weight-500 text-white-2 text-uppercase"  style="color: #C50B3E;" ><img src="{{ asset('asset/favicon.png') }}" style="margin-right: 14px;width: 18px;" data-no-retina="">{!! (App\Models\Parametre::where('id',12)->select('valeur')->get()->first()->valeur) !!}<span class="float-right"><i class="ti-plus"></i></span></div></a>
</div>
<div id="accordion-design2-design2" class="panel-collapse collapse" data-parent="#accordion-design2" aria-expanded="false" role="tablist">
<div class="panel-body text-white">
{!! (App\Models\Parametre::where('id',16)->select('valeur')->get()->first()->valeur) !!}
</div>
</div>
</div>
<div class="panel">
<div class="panel-heading">
<a data-toggle="collapse" data-parent="#accordion-design2" href="#accordion-design2-design3" class="collapsed" aria-expanded="false"><div class="panel-title font-weight-500 text-white-2 text-uppercase"  style="color: #C50B3E;" ><img src="{{ asset('asset/favicon.png') }}" style="margin-right: 14px;width: 18px;" data-no-retina="">{!! (App\Models\Parametre::where('id',13)->select('valeur')->get()->first()->valeur) !!}<span class="float-right"><i class="ti-plus"></i></span></div></a>
</div>
<div id="accordion-design2-design3" class="panel-collapse collapse" data-parent="#accordion-design2" aria-expanded="false" role="tablist">
<div class="panel-body text-white">
{!! (App\Models\Parametre::where('id',17)->select('valeur')->get()->first()->valeur) !!}
</div>
</div>
</div>
<div class="panel">
<div class="panel-heading">
<a data-toggle="collapse" data-parent="#accordion-design2" href="#accordion-design2-design4" class="collapsed" aria-expanded="false"><div class="panel-title font-weight-500 text-white-2 text-uppercase"  style="color: #C50B3E;" ><img src="{{ asset('asset/favicon.png') }}" style="margin-right: 14px;width: 18px;" data-no-retina="">{!! (App\Models\Parametre::where('id',14)->select('valeur')->get()->first()->valeur) !!}<span class="float-right"><i class="ti-plus"></i></span></div></a>
</div>
<div id="accordion-design2-design4" class="panel-collapse collapse" data-parent="#accordion-design2" aria-expanded="false" role="tablist">
<div class="panel-body text-white">
{!! (App\Models\Parametre::where('id',18)->select('valeur')->get()->first()->valeur) !!} 
</div>
</div>
</div>


</div>

</div>
</div>
</div>
</section>

-->


@endsection

