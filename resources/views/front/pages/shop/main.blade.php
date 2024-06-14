 <!-- **Header - End ** -->

 <section class="main-title-section-wrapper aligncenter">

    <div

    class="main-title-section-bg"

    style="

    background-image: url(http://triss.wpengine.com/wp-content/uploads/2020/01/breadcrumb_bg_img-1.jpg);

    background-position: center top;

    background-size: auto;

    background-repeat: repeat-x;

    background-attachment: scroll;

    "

    ></div>

    <div class="container">

        <div class="main-title-section"><h1>{!! !empty($libelle) ? $libelle : 'Boutique en ligne' !!}</h1></div>

        <div class="breadcrumb"><a href="{{ route('home') }}">Accueil</a><span class="fa default"></span><span class="current">Boutique en ligne</span></div>

    </div>

</section>





<!-- ** Header Wrapper - End ** --><!-- **Main** -->

<div id="main">

    <!-- **Main - Container** -->

    <div class="container">

        <!-- Primary -->

        <section id="primary" class="page-with-sidebar with-left-sidebar">

            <header class="woocommerce-products-header"></header>

            <div class="product-loop-sorting">

                <div class="woocommerce-notices-wrapper"></div>

                <div class="product-loop-sorting-item">

                    <form class="woocommerce-ordering" method="get">

                        <select name="orderby" class="orderby" aria-label="Shop order">

                            <option value="libelle" >Classement</option>

                            <option value="nouveau" {{ request()->orderby == 'nouveau' ? 'selected="selected"' : '' }}>Par nouveuté</option>

                            <option value="prix_reduis" {{ request()->orderby == 'prix_reduis' ? 'selected="selected"' : '' }}>Par prix : Croissant</option>

                            <option value="prix_reduis_desc" {{ request()->orderby == 'prix_reduis_desc' ? 'selected="selected"' : '' }}>Par prix : Décroissant</option>

                        </select>

                    </form>

                </div>



            </div>

            <ul

            class="products columns-4 product-style-default product-overlay-dark-bgcolor product-overlay-righttoleft product-hover-image-fadeinleft product-hover-secimage-slideright product-content-hover-slidebottom product-padding-content product-with-space product-label-boxed product-thumb-alignment-bottom-right product-thumb-iconsgroup-style-bgfill-square product-thumb-iconsgroup-position-vertical vertical-position-bottom-right product-thumb-buttonelement-style-simple product-content-alignment-center product-content-iconsgroup-style-bgfill-rounded product-content-buttonelement-style-bgfill-rounded"

            >





















            @foreach ($datas as $data)





             @include('front.pages.accueil.squelette', ['data' => $data,'loo' => 4])







            @endforeach







































































        </ul>







        {!! $datas->withQueryString()->links('front.pages.accueil.pagination') !!}




    </section>

    <!-- ** Primary - End ** -->

    <section id="secondary-left" class="secondary-sidebar secondary-has-left-sidebar">

        <div class="type15">

            <aside id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories">

                <h3 class="widgettitle">{!! nl2br(App\Models\Parametre::where('id',27)->select('valeur')->get()->first()->valeur) !!}</h3>

                <ul class="product-categories">



                     @foreach (App\Models\Famille::withCount('produits')->orderBy('produits_count', 'desc')->get() as $data)



                    <li class="cat-item cat-item-53"><a href="{{ route('categorie', ['famille' => $data->slug]) }}">{{ $data->libelle }}</a>

                        <span class="count">({{ $data->produits->count() }})</span></li>



                        @endforeach









                    </ul>

                </aside>



                <aside id="woocommerce_price_filter-2" class="widget woocommerce widget_price_filter">

                    <h3 class="widgettitle">{!! nl2br(App\Models\Parametre::where('id',23)->select('valeur')->get()->first()->valeur) !!}</h3>

                    <form method="get" action="">

                        <div class="price_slider_wrapper">

                            <div class="price_slider" style="display: none;"></div>

                            <div class="price_slider_amount" data-step="10">

                                <input type="text" id="min_price" name="min_price" value="{{request()->min_price}}" data-min="0" placeholder="Min price" />

                                <input type="text" id="max_price" name="max_price" value="{{request()->max_price ?? '1000' }}" data-max="1000" placeholder="Max price" />

                                <button type="submit" class="button">Filtrer</button>

                                <div class="price_label" style="display: none;">Prix(DHs): <span class="from"></span> &mdash; <span class="to"></span></div>

                                <div class="clear"></div>

                            </div>

                        </div>

                    </form>

                </aside>





                <aside id="woocommerce_layered_nav-6" class="widget woocommerce widget_layered_nav woocommerce-widget-layered-nav">

                    <h3 class="widgettitle">{!! nl2br(App\Models\Parametre::where('id',24)->select('valeur')->get()->first()->valeur) !!}</h3>

                    <ul class="woocommerce-widget-layered-nav-list">





                        @foreach (App\Models\Marque::orderBy('libelle')->get() as $data)



                        <li class="cat-item cat-item-53"><a href="{{ route('marque', ['marque' => $data->slug]) }}">{{ $data->libelle }}</a>

                            <span class="count">({{ $data->produits->count() }})</span></li>



                            @endforeach







                        </ul>

                    </aside>







                     @foreach (App\Models\Produit::whereHas('image')->limit(1)->inRandomOrder()->get() as $data)



                    <aside id="text-2" class="widget widget_text">

                        <h3 class="widgettitle">{!! nl2br(App\Models\Parametre::where('id',25)->select('valeur')->get()->first()->valeur) !!}</h3>

                        <div class="textwidget">

                            <div class="dt-sc-products-carousel-container">

                                <div

                                class="dt-sc-products-container woocommerce best-sellers-shop swiper-container"

                                data-carouseleffect=""

                                data-carouselslidesperview="1"

                                data-carouselloopmode="false"

                                data-carouselmousewheelcontrol="false"

                                data-carouselbulletpagination="false"

                                data-carouselarrowpagination="true"

                                data-carouselscrollbar="false"

                                data-carouselspacebetween=""

                                >

                                <ul

                                class="products swiper-wrapper product-style-default product-overlay-dark-bgcolor product-overlay-righttoleft product-hover-image-fadeinleft product-hover-secimage-slideright product-content-hover-slideright product-padding-content product-with-space product-label-boxed product-thumb-alignment-bottom-right product-thumb-iconsgroup-style-bgfill-square product-thumb-iconsgroup-position-vertical vertical-position-bottom-right product-thumb-buttonelement-style-simple product-content-alignment-center product-content-iconsgroup-style-bgfill-rounded product-content-buttonelement-style-skinbrdrfill-rounded"

                                >

                                <li

                                class="product-grid-view swiper-slide product-with-secondary-image product type-product post-15989 status-publish first instock product_cat-hair-care product_cat-half-wigs product_tag-mesh product_tag-synthetic-hair product_tag-virgin-hair has-post-thumbnail sale featured shipping-taxable purchasable product-type-simple"

                                >

                                <div class="dt-col dt-col-xs-12 dt-col-sm-12 dt-col-md-12 dt-col-lg-12">

                                    <div class="product-wrapper">

                                        <div class="product-thumb">

                                            <a class="image" href="{{ route('details', ['produit' => $data->slug]) }}" title="Golden Curly Wig">

                                                <div class="product-thumb-overlay" ></div>

                                                <div class="primary-image" style="background: url({{ $data->image->url('thumbails-100') }}) no-repeat center center;"></div>

                                                <div class="secondary-image" style="background-image: url({{ $data->image->url('thumbails-450') }});"></div>

                                            </a>

                                        </div>

                                        <div class="product-details">

                                            <div class="product-title">

                                                <h5><a href="{{ route('details', ['produit' => $data->slug]) }}">{{ $data->libelle }}</a></h5>

                                            </div>

                                            <div class="product-price">

                                                <span class="price">

                                                    <del>

                                                        <span class="woocommerce-Price-amount amount">

                                                            <bdi><span class="woocommerce-Price-currencySymbol"></span>{{ $data->prix_ttc }}.00DHs</bdi>

                                                        </span>

                                                    </del>

                                                    <ins>

                                                        <span class="woocommerce-Price-amount amount">

                                                            <bdi><span class="woocommerce-Price-currencySymbol"></span>{{ $data->prix_reduis }}.00DHs</bdi>

                                                        </span>

                                                    </ins>

                                                </span>

                                            </div>

                                            <div class="product-rating-wrapper">

                                                <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">

                                                    <span style="width: 80%;">Rated <strong class="rating">4.00</strong> out of 5</span>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </li>

                            <li

                            class="product-grid-view swiper-slide product-with-secondary-image product type-product post-15988 status-publish first instock product_cat-hair-care product_tag-double-knot product_tag-polyurethane product_tag-virgin-hair has-post-thumbnail sale shipping-taxable purchasable product-type-simple"

                            >

                            <div class="dt-col dt-col-xs-12 dt-col-sm-12 dt-col-md-12 dt-col-lg-12">

                                <div class="product-wrapper">

                                    <div class="product-thumb">

                                        <a class="image" href="https://triss.wpengine.com/product/blonde-hair-wig/" title="Blonde Hair Wig">

                                            <div class="product-thumb-overlay" style="background-color: rgba(255, 255, 255, 0.7);"></div>

                                            <div class="primary-image" style="background-image: url(https://triss.wpengine.com/wp-content/uploads/2019/01/product8.jpg);"></div>

                                            <div class="secondary-image" style="background-image: url(https://triss.wpengine.com/wp-content/uploads/2019/01/product11-900x1000.jpg);"></div>

                                        </a>

                                    </div>

                                    <div class="product-details">

                                        <div class="product-title">

                                            <h5><a href="https://triss.wpengine.com/product/blonde-hair-wig/">Blonde Hair Wig</a></h5>

                                        </div>

                                        <div class="product-price">

                                            <span class="price">

                                                <del>

                                                    <span class="woocommerce-Price-amount amount">

                                                        <bdi><span class="woocommerce-Price-currencySymbol">&#8377;</span>68.00</bdi>

                                                    </span>

                                                </del>

                                                <ins>

                                                    <span class="woocommerce-Price-amount amount">

                                                        <bdi><span class="woocommerce-Price-currencySymbol">&#8377;</span>60.00</bdi>

                                                    </span>

                                                </ins>

                                            </span>

                                        </div>

                                        <div class="product-rating-wrapper">

                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">

                                                <span style="width: 100%;">Rated <strong class="rating">5.00</strong> out of 5</span>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </li>

                        <li

                        class="product-grid-view swiper-slide product-with-secondary-image product type-product post-15987 status-publish first instock product_cat-full-cap product_tag-double-knot product_tag-human-hair has-post-thumbnail sale shipping-taxable purchasable product-type-simple"

                        >

                        <div class="dt-col dt-col-xs-12 dt-col-sm-12 dt-col-md-12 dt-col-lg-12">

                            <div class="product-wrapper">

                                <div class="product-thumb">

                                    <a class="image" href="https://triss.wpengine.com/product/blonde-human-hair-long/" title="Blonde Human Hair Long">

                                        <div class="product-thumb-overlay" style="background-color: rgba(255, 255, 255, 0.7);"></div>

                                        <div class="primary-image" style="background-image: url(https://triss.wpengine.com/wp-content/uploads/2019/01/product16.jpg);"></div>

                                        <div class="secondary-image" style="background-image: url(https://triss.wpengine.com/wp-content/uploads/2019/01/product6.jpg);"></div>

                                    </a>

                                </div>

                                <div class="product-details">

                                    <div class="product-title">

                                        <h5><a href="https://triss.wpengine.com/product/blonde-human-hair-long/">Blonde Human Hair Long</a></h5>

                                    </div>

                                    <div class="product-price">

                                        <span class="price">

                                            <del>

                                                <span class="woocommerce-Price-amount amount">

                                                    <bdi><span class="woocommerce-Price-currencySymbol">&#8377;</span>40.00</bdi>

                                                </span>

                                            </del>

                                            <ins>

                                                <span class="woocommerce-Price-amount amount">

                                                    <bdi><span class="woocommerce-Price-currencySymbol">&#8377;</span>35.00</bdi>

                                                </span>

                                            </ins>

                                        </span>

                                    </div>

                                    <div class="product-rating-wrapper">

                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">

                                            <span style="width: 100%;">Rated <strong class="rating">5.00</strong> out of 5</span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </li>

                    <li

                    class="product-grid-view swiper-slide product-with-secondary-image product type-product post-15986 status-publish first instock product_cat-weaving-hair product_tag-polyurethane product_tag-v-loop-knot product_tag-virgin-hair has-post-thumbnail sale featured shipping-taxable purchasable product-type-simple"

                    >

                    <div class="dt-col dt-col-xs-12 dt-col-sm-12 dt-col-md-12 dt-col-lg-12">

                        <div class="product-wrapper">

                            <div class="product-thumb">

                                <a class="image" href="https://triss.wpengine.com/product/brown-human-hair-wig/" title="Brown Human Hair wig">

                                    <div class="product-thumb-overlay" style="background-color: rgba(255, 255, 255, 0.7);"></div>

                                    <div class="primary-image" style="background-image: url(https://triss.wpengine.com/wp-content/uploads/2019/01/product7.jpg);"></div>

                                    <div class="secondary-image" style="background-image: url(https://triss.wpengine.com/wp-content/uploads/2019/01/product3.jpg);"></div>

                                </a>

                            </div>

                            <div class="product-details">

                                <div class="product-title">

                                    <h5><a href="https://triss.wpengine.com/product/brown-human-hair-wig/">Brown Human Hair wig</a></h5>

                                </div>

                                <div class="product-price">

                                    <span class="price">

                                        <del>

                                            <span class="woocommerce-Price-amount amount">

                                                <bdi><span class="woocommerce-Price-currencySymbol">&#8377;</span>98.00</bdi>

                                            </span>

                                        </del>

                                        <ins>

                                            <span class="woocommerce-Price-amount amount">

                                                <bdi><span class="woocommerce-Price-currencySymbol">&#8377;</span>90.00</bdi>

                                            </span>

                                        </ins>

                                    </span>

                                </div>

                                <div class="product-rating-wrapper">

                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">

                                        <span style="width: 100%;">Rated <strong class="rating">5.00</strong> out of 5</span>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </li>

            </ul>

            

        </div>

    </div>

</div>

</aside>





@endforeach





</div>

</section>

</div>

<!-- ** Main - Container - End ** -->

</div>

                <!-- ** Main - End ** -->