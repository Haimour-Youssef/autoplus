



<!-- start interactive banners style 05 section -->
<section class="wow fadeIn bg-black" style="background: url({{ asset('asset/images/homepage-option15-bg.jpg') }}) center;">
  <div class="container-fluid" style="background: url({{ asset('asset/images/homepage-option16-bg.jpg') }}) center;padding-bottom: 100px;">
    <div class="container">




      <div class="row">
        <div class="col-12 text-center">
          <h5 class="text-uppercase alt-font text-white margin-20px-bottom font-weight-700 md-width-100"><img src="{{ asset('asset/favicon.png') }}" style="margin-right: 6px;padding-bottom: 30px;" data-no-retina="">Nos Produits</h5>
          <span class="margin-50px-bottom separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto width-100px"></span>
        </div>
      </div>





      <div class="row blog-categorie position-relative">
        <div class="col-12 hover-option4 margin-5px-bottom">
          <div class="swiper-multy-row-container-categories overflow-hidden">
            <div class="swiper-wrapper">


            


              @foreach (App\Models\Categorie::where('id', request('categorie'))->with('image')

              ->union(App\Models\Categorie::where('id','<>', request('categorie')))->where('parent',0)->with('image')
              
              ->get() as $data)



              <!-- start portfolio slider item -->
              <div class="swiper-slide grid-item align-items-center">

                <figure class="categorie-figure" data-id='{{ $data->id }}'>
                  <div class="portfolio-img "><img src="{{ $data->image ? $data->image->url() : '' }}" alt=""/></div>
                  <figcaption class="d-flex justify-content-center align-items-center text-center">
                    <div class="portfolio-hover-content position-relative last-paragraph-no-margin">
                      <span class="font-weight-600 line-height-normal alt-font text-uppercase margin-5px-bottom d-block">{{ $data->title }}</span>

                    </div>
                  </figcaption>
                </figure>

                

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
  </div>




</section>










<style type="text/css">









 .ajax-div {
  position: relative;
  margin-top: -80px;
  z-index: 1000;
  padding: 30px 30px 0px 30px;
  background: rgba(255,255,255,.2);
}


.blog-categorie .portfolio-img {
  text-align: center;
background-color: white;
border-radius: 50%;
border: 5px solid #B70D0D;
width: 174px;
height: 174px;
padding-top: 40px;
}

.blog-categorie figcaption {
  border-radius: 50%;
  background: #B70D0D !important;
  color: white;
  border: 5px solid white;
  cursor: pointer;
  height: 170px !important;
}


.blog-categorie .categorie-figure{

}

.blog-categorie .swiper-portfolio-prev{
  left: -30px;}
  .blog-categorie .swiper-portfolio-next{right: -30px;}

  .blog-categorie .swiper-portfolio-prev,.blog-categorie  .swiper-portfolio-next {
    position: absolute;
    top: 92px;
    z-index: 1;
    background: #B70D0D;
    color: white;
    padding: 6px 11px;
    font-size: 17px;
    cursor: pointer;
    transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    border-radius: 50%;
  }





</style>


