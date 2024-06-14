


<!-- start clients slider section -->
<section class="wow fadeIn">
    <div class="container text-center">
        <div class="row">
            <div class="col-12 text-center">
                <h5 class="text-uppercase alt-font text-black margin-20px-bottom font-weight-700 md-width-100"><img src="{{ asset('asset/faviconBlack.png') }}" style="margin-right: 6px;padding-bottom: 30px;" data-no-retina="">nos marques phares</h5>
                <span class="margin-50px-bottom separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto width-100px"></span>
            </div>
        </div>


        <div class="row">
            <div class="col-12 hover-option4 margin-5px-bottom">
                <div class="swiper-multy-row-container overflow-hidden">
                    <div class="swiper-wrapper">




                        @foreach (App\Models\Partenaire::orderby('classement')->get() as $data)



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


