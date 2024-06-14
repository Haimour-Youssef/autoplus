
<div id="modal-promotion" class="zoom-anim-dialog mfp-hide col-xl-6 col-lg-6 col-md-7 col-11 mx-auto bg-white text-center modal-popup-main ">



    <!-- start section -->

    <div class="row">
        <!-- start features item -->
        <div class="col-12 col-lg-6 p-0  position-relative "><img id="modal-promotion-img" src="{{ asset('asset/images/pr1.jpg') }}"></div>
        <!-- end features item -->
        <!-- start features item -->
        <div class="col-12 col-lg-6 p-0 d-flex align-items-center position-relative bg-plus text-center text-lg-left text-white-2 " >
            <div class="padding-fifteen-all lg-padding-ten-all sm-padding-30px-all width-100">
                
                <div class="alt-font text-extra-large margin-20px-bottom text-white-2 width-90 lg-width-100 sm-margin-15px-bottom" id="modal-promotion-title">Unlimited power</div>
                
                <div id="modal-promotion-content">
                   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum is simply dummy text.</p>
                </div>
               
                
            </div>
        </div>
        <!-- end features item -->

    </div>






</div>





















<!-- start interactive banners style 05 section -->
<section class="wow fadeIn bg-black" id="promotions" style="background: url({{ asset('asset/images/homepage-option15-bg.jpg') }}) center;">
    <div class="container">




        <div class="row">
            <div class="col-12 text-center">
                <h5 class="text-uppercase alt-font text-white margin-20px-bottom font-weight-700 md-width-100"><img src="{{ asset('asset/favicon.png') }}" style="margin-right: 6px;padding-bottom: 30px;" data-no-retina="">promotions</h5>
                <span class="margin-50px-bottom separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto width-100px"></span>
            </div>
        </div>





        <div class="row position-relative">
            <div class="swiper-container swiper-pagination-bottom blog-slider swiper-three-slides">
                <div class="swiper-wrapper">






                   @foreach (App\Models\Promotion::orderBy('classement')->get() as $data)
                       
                   


                    <!-- start interactive banners item -->
                    <div class="col-12 swiper-slide col-lg-4 col-md-6 banner-style3  wow fadeInUp" data-wow-delay="0.6s">
                      <figure class="bg-extra-dark-gray">
                          <div class="banner-image bg-extra-dark-gray height-400px cover-background" style="background-image:url({{ $data->image->url() }});">
                          </div>

                          <figcaption class="d-flex bg-plus flex-column justify-content-center align-items-center text-center">
                              <div class="promotion-title text-large text-white-2 alt-font text-uppercase font-weight-600 margin-10px-bottom">{{ $data->title }}</div>
                              <div class="text-white-2 width-80 mx-auto mb-3 promotion-content " style="max-height: 118px;overflow: hidden;">{!! $data->content !!}</div>
                              <a href="#modal-promotion" data-image-promotion='{{ $data->image->url() }}' class="btn-details-promotion stretched-link popup-with-zoom-anim btn btn-small btn-white font-weight-300 btn-rounded">Détails promotion <i class="ti-arrow-right"></i></a>
                          </figcaption>
                      </figure>
                  </div>
                  <!-- end interactive banners item -->

                  @endforeach




        </div>
        <div class="swiper-pagination swiper-pagination-three-slides h-auto"></div>
    </div>
</div>
</div>
</section>
        <!-- start interactive banners style 05 section -->


