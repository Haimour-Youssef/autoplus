<section class="bg-black  wow fadeIn">
<div class="container-fluid">

<div class="row justify-content-center">
<div class="col-12 col-sm-5 text-center">
<h5 class="text-uppercase alt-font text-white margin-20px-bottom font-weight-700 md-width-100"><img src="{{ asset('asset/favicon.png') }}" style="margin-right: 6px;padding-bottom: 30px;" data-no-retina="">Nos Produits</h5>
<p class="w-80 d-inline-block sm-w-100  alt-font alt-font text-medium-gray ">Un large portefeuille de pièces et de services pour les professionnels de l’après-vente automobile. La qualité, le taux de couverture, la disponibilité des pièces et l’accessibilité des services sont les bases de notre offre. </p>
<span class="margin-50px-bottom separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto width-100px"></span>
</div>
</div>

<div class="row feature-box feature-box-17 m-0">




<div class="swiper-multy-row-container-categories overflow-hidden">
<div class="swiper-wrapper">




<div class="swiper-slide grid-item align-items-center">  

@foreach (App\Models\Categorie::with('image')->where('parent',0)->orderby('title')
->get() as $data)





@if($loop->index <> 0)@endif
</div><div class="swiper-slide grid-item align-items-center">  




<!-- start feature item -->
<div class="col-12  margin-30px-bottom sm-margin-20px-bottom wow fadeInLeft ">
<div class="box bg-extra-dark-gray2 text-extra-dark-gray text-white-2-hover">

<a href="{{ route('produits',['categorie' => $data->id ]) }}">
<div class="content text-white-2-hover">
<figure>
<img src="{{ $data->image ? $data->image->url() : '' }}" alt=""/>
<span class="text-large alt-font d-block margin-30px-bottom ">{{ $data->title }}</span>

</figure>
</div>

</a>
</div>
</div>
<!-- end feature item -->








@endforeach

</div>


</div>
<!-- start slider pagination -->
<div class="swiper-portfolio-prev swiper-button-black-highlight"><i class="ti-arrow-left"></i></div>
<div class="swiper-portfolio-next swiper-button-black-highlight"><i class="ti-arrow-right"></i></div>
<!-- end slider pagination -->
</div>

</div>
</div>
</section>