@extends('front.layouts.app')


@section('title', 'Nos Produits | ')

@section('content')





<!-- start slider section -->
        <section class="p-0 full-screen">
            <div class="swiper-container swiper-vertical-pagination swiper-container-vertical no-transition">
                <div class="swiper-wrapper">
                    




                     @foreach (App\Models\Categorie::inRandomOrder()->get() as $data)


                     

                    <!-- start slide item -->
                    <div class="swiper-slide cover-background" style="background-image: url('{{ $loop->odd ? 'https://www.chacun-sa-route.fr/wp-content/uploads/2019/01/huile-moteur-choisir-son-huile-moteur-chacun-sa-route-norauto.jpg' : 'https://img-4.linternaute.com/Lt-Mdv8H_f1CqVqbyfbaGuR97jg=/1240x/smart/9b7408a3202642f19f1e441a2c651ab9/ccmcms-linternaute/10755742.jpg' }}')">
                        <div class="full-screen width-100 position-relative">
                            <div class="slider-typography text-left">
                                <div class="slider-text-middle-main">
                                    <div class="slider-text-bottom padding-100px-lr sm-padding-30px-lr">
                                        


                                        <div class="swiper-bottom-content text-uppercase text-center  padding-80px-all margin-50px-left margin-80px-bottom md-no-margin-left sm-width-90 sm-padding-20px-all" style="background: rgba(255,255,255,.7);border: 5px solid #b70d0d;">
                                            <img src="{{ $data->image->url() }}">
                                            <h4 class="" style="padding: 25px;"><a href="single-project-page-01.html" class="font-weight-600 text-deep-pink alt-font text-white-2-hover">{{ $data->title }}</a></h4>


<DIV class="row">

                                             @foreach ($data->partenaires as $dataP)

     <!-- start clent logo item -->
     <div class="col-lg-3 col-md-6" >
      <div class="bg-white clients-list text-center d-flex align-items-center justify-content-center w-100 margin-30px-bottom">
        <a href="#"><img src="{{ $dataP->image->url() }}" alt="" data-no-retina=""></a>
      </div>
    </div>

    @endforeach
                                            
                   </DIV>                         
                                        </div> 





                                       



                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end slide item -->



                    @endforeach




                    <!-- start slide item -->
                </div>
                <!-- start slider pagination -->
                <div class="swiper-pagination swiper-pagination-vertical swiper-pagination-white"></div>
                <!-- end slider pagination -->
            </div> 
        </section>
        <!-- end slider section -->

















@endsection

