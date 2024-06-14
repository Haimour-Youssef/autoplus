@extends('front.layouts.app')


@section('title', $data->title.' | MEDIA | ')

@section('content')













<section class="p-0 wow fadeIn top-space bg-extra-dark-gray text-medium-gray">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-4 d-flex align-items-center justify-content-center md-height-500px sm-height-350px cover-background wow fadeInLeft" style="background-image: url('{{ $data->image->url('thumbails-800') }}');">
                        
                    </div>
                    <div class="col-12 col-lg-8 d-flex align-items-center justify-content-center text-center text-lg-left wow fadeInRight last-paragraph-no-margin">
                        <div class="padding-seven-all lg-padding-ten-all md-padding-90px-all sm-no-padding-lr sm-padding-40px-tb width-100" style="max-height: 440px;overflow: auto;margin-bottom: 39px;">
                            <span class="text-medium margin-10px-bottom d-block alt-font">Actualités / Media</span>
                            <h4 class="alt-font text-light-gray" style="color:#d71427">{{ $data->title }}</h4>
                            <div class="text-extra-large width-100 lg-width-100" style="text-align: justify;">{!! $data->content !!}</div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>








        @if($data->photos)


        <section class="wow fadeIn no-padding-top">
            <div class="container-fluid no-padding">
                
                <div class="row mx-0">
                    <ul class="portfolio-grid work-6col hover-option2 gutter-small w-100">
                        <li class="grid-sizer"></li>






                        @for ($i = 1; $i <= $data->photos; $i++)
    




                        <!-- start image gallery item -->
                        <li class="grid-item wow fadeInUp">
                            <a href='{{ Storage::url("actualites/".$data->id."/image (".$i.").jpg") ?? "" }}'  title="{{ $data->title }}" data-group="four-columns-zoom-animation" class="lightbox-group-gallery-item">
                                <figure>
                                    <div class="portfolio-img bg-extra-dark-gray"><img src='{{ Storage::url("actualites/".$data->id."/image (".$i.").jpg") ?? "" }}' alt="" class="project-img-gallery"/></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box vertical-align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- end image gallery item -->



                        @endfor



                    </ul>
                </div>
            </div>
        </section>


        @endif



        @include('front.partials.partenaire')
@include('front.partials.contact')
@include('front.partials.counters')























@endsection

