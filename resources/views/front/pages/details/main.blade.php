                   













<!-- **Header - End ** -->

<section class="main-title-section-wrapper aligncenter">

    <div

    class="main-title-section-bg"

    style="background-image: url({{ url('/') }}/asset/wp-content/uploads/2020/01/breadcrumb_bg_img-1.jpg); background-position: center top; background-size: auto; background-repeat: repeat-x; background-attachment: scroll;"

    ></div>

    <div class="container">

        <div class="main-title-section"><h1>{{ $data->famille->libelle }}</h1></div>

        <div class="breadcrumb">


            <span class="current">{{ $data->marque->libelle }}</span>

            

        </div>

    </div>

</section>



<!-- ** Header Wrapper - End ** --><!-- **Main** -->

<div id="main">

    <!-- **Main - Container** -->

    <div class="container">

        <!-- Primary -->

        <section id="primary" class="page-with-sidebar with-left-sidebar">

            <div class="woocommerce-notices-wrapper"></div>

            <div

            id="product-15987"

            class="product-grid-view product type-product post-15987 status-publish first instock product_cat-full-cap product_tag-double-knot product_tag-human-hair has-post-thumbnail sale shipping-taxable purchasable product-type-simple"

            >

            <div data-delay="0" class="vc_row wpb_row vc_row-fluid">

                <div class="rs_col-sm-12 wpb_column vc_column_container vc_col-sm-12" data-delay="0">

                    <div class="vc_column-inner">

                        <div class="wpb_wrapper">

                            <div class="vc_row wpb_row vc_inner vc_row-fluid">

                                <div class="wpb_column vc_column_container vc_col-sm-6">

                                    <div class="vc_column-inner">

                                        <div class="wpb_wrapper">

                                            <div class="dt-sc-product-image-gallery-holder">

                                                <div

                                                class="dt-sc-product-image-gallery-container swiper-container"

                                                data-carouseleffect=""

                                                data-carouselslidesperview="1"

                                                data-carouselloopmode="false"

                                                data-carouselmousewheelcontrol="false"

                                                data-carouselverticaldirection="false"

                                                data-carouselbulletpagination="false"

                                                data-carouselthumbnailpagination="true"

                                                data-carouselthumbnailposition=""

                                                data-carouselslidesperviewthumbnail="4"

                                                data-carouselarrowpagination="true"

                                                data-carouselscrollbar="false"

                                                data-carouselspacebetween=""

                                                >

                                                <div class="dt-sc-product-image-gallery-thumb-enlarger">A</div>

                                                <span class="onsale"><span>

                                                     <form id="form-add-wishlist{{ $data->id }}" action="{{ route('wishlist.store', $data) }}" method="POST"> {{ csrf_field() }}

                                                        <a  href="javascript:void(0)" OnClick="document.getElementById('form-add-wishlist{{ $data->id }}').submit()">
                                                    <i class="menu-item-icon fa fa-heart-o" style="color: white;font-size: 16px !important;


                                                     @if($wishlist and (Route::has('register'))) font-weight: 900; @endif




                                                    "></i>
                                                </a>

                                            </form>

                                            </span></span>





                                                <div class="dt-sc-product-image-gallery swiper-wrapper">

                                                    <div class="dt-sc-product-image swiper-slide">

                                                        <img

                                                        width="685"

                                                        height="804"

                                                        src="{{ $data->image->url('thumbails-800') }}"

                                                        class="wp-post-image"

                                                        alt=""

                                                        

                                                        title="{{ $data->libelle }}"

                                                        data-caption=""

                                                        data-src="{{ $data->image->url('thumbails-800') }}"

                                                        

                                                        />

                                                    </div>

                                                    

                                                    

                                                    

                                                    

                                                </div>

                                                

                                            </div>

                                            

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="wpb_column vc_column_container vc_col-sm-6">

                                <div class="vc_column-inner">

                                    <div class="wpb_wrapper">

                                        <div class="dt-sc-product-summary summary entry-summary single-product-details">

                                            <div class="dt-sc-single-product-title"><h1 class="product_title entry-title">{{ $data->libelle }}</h1></div>

                                            <div class="woocommerce-product-rating">

                                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">

                                                    <span style="width: {{ $data->note * 20 }}%;">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>

                                                </div>

                                                <a href="#reviews" style="display:{{ $data->commentaires->count() == 0 ? 'none' : '' }} " class="woocommerce-review-link" rel="nofollow">(<span class="count">{{ $data->commentaires->count() }}</span> avis )</a>

                                            </div>



                                            <div class="dt-sc-single-product-price">

                                                <p class="price">

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

                                                </p>

                                            </div>


                                            <table class="woocommerce-product-attributes shop_attributes" style="display:none;">

                                                <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--weight">

                                                    <th class="woocommerce-product-attributes-item__label">Weight</th>

                                                    <td class="woocommerce-product-attributes-item__value">98 kg</td>

                                                </tr>

                                                <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--dimensions">

                                                    <th class="woocommerce-product-attributes-item__label">Dimensions</th>

                                                    <td class="woocommerce-product-attributes-item__value">1.55 &times; 6.55 &times; 87 cm</td>

                                                </tr>

                                                <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_color">

                                                    <th class="woocommerce-product-attributes-item__label">Color</th>

                                                    <td class="woocommerce-product-attributes-item__value"><p>Red</p></td>

                                                </tr>

                                                <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_size">

                                                    <th class="woocommerce-product-attributes-item__label">Size</th>

                                                    <td class="woocommerce-product-attributes-item__value"><p>Large, Medium, Small</p></td>

                                                </tr>

                                                <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_length">

                                                    <th class="woocommerce-product-attributes-item__label">Length</th>

                                                    <td class="woocommerce-product-attributes-item__value"><p>14 &#8211; $129</p></td>

                                                </tr>

                                                <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_weight">

                                                    <th class="woocommerce-product-attributes-item__label">Weight</th>

                                                    <td class="woocommerce-product-attributes-item__value"><p>4.50 Ounces</p></td>

                                                </tr>

                                                <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_material">

                                                    <th class="woocommerce-product-attributes-item__label">Material</th>

                                                    <td class="woocommerce-product-attributes-item__value">

                                                        <p>

                                                            <a href="https://triss.wpengine.com/material/fine/" rel="tag">Fine</a>, <a href="https://triss.wpengine.com/material/good/" rel="tag">Good</a>,

                                                            <a href="https://triss.wpengine.com/material/normal/" rel="tag">Normal</a>

                                                        </p>

                                                    </td>

                                                </tr>

                                            </table>

                                            <div class="product-buttons-wrapper product-button product-button-cart style-bgfill radius-square align-inline">

                                                <div class="wc_inline_buttons">

                                                    <div class="wcwl_btn_wrapper wc_btn_inline">

                                                        <p class="stock in-stock">{{ $data->stock }} En stock</p>


                                                    </div>

                                                </div>

                                            </div>

                                            <div class="product-buttons-wrapper product-button style-bgfill radius-square align-inline">

                                                <div class="wc_inline_buttons">

                                                    <div class="wcwl_btn_wrapper wc_btn_inline">

                                                        <form class="cart" action="{{ route('cart.store', $data) }}" method="POST" method="post" >
                                                            {{ csrf_field() }}

                                                            <div class="quantity ">
                                                                


                                                                



                                                               <select   name="quantity" style="height: 40px;padding-top: 4px;">
                                                    @for ($i = 1; $i < $data->stock + 1 ; $i++)
                                                    <option >{{ $i }}</option>
                                                    @endfor
                                                </select>


                                                            </div>

                                                            <button type="submit" name="add-to-cart" value="15970" class="single_add_to_cart_button button alt">Ajouter au panier</button>

                                                        </form>


                                                    </div>



                                                </div>

                                            </div>

                                            <div class="dt-sc-single-product-separator"></div>

                                            <div class="product_meta_wrapper align-inline">

                                                <div class="product_meta">

                                                    <span class="sku_wrapper"><strong>SKU:</strong><span class="sku">{{ $data->sku }}</span></span>

                                                </div>

                                            </div>

                                            <div class="product_meta_wrapper align-inline">

                                                <div class="product_meta">

                                                    <span class="posted_in"><strong>Catégorie:</strong> <a href="{{ route('categorie', ['famille' => $data->famille->id]) }}" rel="tag">{{ $data->famille->libelle }}</a></span>

                                                </div>

                                            </div>

                                            <div class="dt-sc-single-product-share-container style-skin-bgfill radius-square">

                                                <a class="dt-sc-single-product-share-item-icon">Share</a>

                                                <ul class="dt-sc-single-product-share-list">

                                                    <li>

                                                        <a

                                                        href=""

                                                        title="facebook"

                                                        target="_blank"

                                                        >

                                                        <span class="fab fa-facebook"></span>

                                                    </a>

                                                </li>

                                                <li>

                                                    <a

                                                    href=""

                                                    title="delicious"

                                                    target="_blank"

                                                    >

                                                    <span class="fab fa-delicious"></span>

                                                </a>

                                            </li>

                                            <li>

                                                <a

                                                href=""

                                                title="digg"

                                                target="_blank"

                                                >

                                                <span class="fab fa-digg"></span>

                                            </a>

                                        </li>

                                        <li>

                                            <a

                                            href=""

                                            title="stumbleupon"

                                            target="_blank"

                                            >

                                            <span class="fab fa-stumbleupon"></span>

                                        </a>

                                    </li>

                                    <li>

                                        <a

                                        href=""

                                        title="twitter"

                                        target="_blank"

                                        >

                                        <span class="fab fa-twitter"></span>

                                    </a>

                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</div>

</div>

</div>

<div data-delay="0" class="vc_row wpb_row vc_row-fluid">

    <div class="wpb_column vc_column_container vc_col-sm-12" data-delay="0">

        <div class="vc_column-inner">

            <div class="wpb_wrapper">

                <div id="1560853699133-16fe1439-2926" class="dt-sc-empty-space"></div>

                <div class="dt-sc-clear"></div>

            </div>

        </div>

    </div>

</div>

<div data-delay="0" class="vc_row wpb_row vc_row-fluid">

    <div class="wpb_column vc_column_container vc_col-sm-12" data-delay="0">

        <div class="vc_column-inner">

            <div class="wpb_wrapper">

                <div class="dt-sc-tabs-horizontal-frame-container type8 shop-detail-tab" data-effect="fade" data-delay="0">

                    <ul class="dt-sc-tabs-horizontal-frame">

                        <li><a href="javascript:void(0);">Description</a></li>

                        <li><a href="javascript:void(0);">Avis ({{ $data->commentaires->count() }})</a></li>

                        <li><a href="javascript:void(0);">Livraison</a></li>

                        <li><a href="javascript:void(0);">Paiement</a></li>

                        <li><a href="javascript:void(0);">Service Client</a></li>

                    </ul>

                    <div class="dt-sc-tabs-horizontal-frame-content">

                        <div class="dt-sc-product-tabs dt-sc-product-tabs-exploded dt-sc-product-hide-tab-title">

                            <h2>Description</h2>



                            <div data-delay="0" class="vc_row wpb_row vc_row-fluid">

                                <div class="wpb_column vc_column_container vc_col-sm-12" data-delay="0">

                                    <div class="vc_column-inner">

                                        <div class="wpb_wrapper">

                                            <h4 class=" " data-delay="0"> {!! $data->libelle !!}</h4>

                                            <div class="dt-sc-clear"></div>

                                            <div class="wpb_text_column wpb_content_element">

                                                <div class="wpb_wrapper">

                                                    {!! nl2br($data->description) !!}

                                                </div>

                                            </div>

                                            

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="dt-sc-tabs-horizontal-frame-content">

                        <div class="dt-sc-product-tabs dt-sc-product-tabs-exploded dt-sc-product-hide-tab-title">

                            <div id="reviews" class="woocommerce-Reviews">

                                <div id="comments">

                                    <h2 class="woocommerce-Reviews-title">{{ $data->commentaires->count() }} avis pour <span>{{ $data->libelle }}</span></h2>



                                    <ol class="commentlist">



                                        @foreach($data->commentaires as $comment)

                                        <li class="review byuser comment-author-ram bypostauthor even thread-even depth-1" id="li-comment-47">

                                            <div id="comment-47" class="comment_container">

                                                <img

                                                alt=""

                                                src="https://secure.gravatar.com/avatar/050164a0ef01ccf5fbbe42b8c6a7e68c?s=60&amp;d=mm&amp;r=g"

                                                srcset="https://secure.gravatar.com/avatar/050164a0ef01ccf5fbbe42b8c6a7e68c?s=120&#038;d=mm&#038;r=g 2x"

                                                class="avatar avatar-60 photo"

                                                height="60"

                                                width="60"

                                                loading="lazy"

                                                />

                                                <div class="comment-text">

                                                    <div class="star-rating" role="img" aria-label="Rated {{ $comment->note }} out of 5">

                                                        <span style="width: {{ $comment->note * 20 }}%;">Rated <strong class="rating">{{ $comment->note }}</strong> out of 5</span>

                                                    </div>

                                                    <p class="meta">

                                                        <strong class="woocommerce-review__author">{{ $comment->name }} </strong>

                                                        <span class="woocommerce-review__dash">&ndash;</span>

                                                        <time class="woocommerce-review__published-date" datetime="2019-03-16T12:37:43+00:00">{{ $comment->created_at->format('j F, Y') }}</time>

                                                    </p>



                                                    <div class="description"><p>{{ $comment->content }}</p></div>

                                                </div>

                                            </div>

                                        </li>


                                        @endforeach

                                        <!-- #comment-## -->

                                    </ol>

                                </div>



                                <div id="review_form_wrapper">

                                    <div id="review_form">

                                        <div id="respond" class="comment-respond">

                                            <span id="reply-title" class="comment-reply-title">

                                                Ajouter un avis <small><a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond" style="display: none;">Cancel reply</a></small>

                                            </span>

                                            <form action="{{ route('commentaires.store') }}" method="post" id="commentform" class="comment-form">
                                                @csrf

                                                <p class="comment-notes"><span id="email-notes">Votre adresse Email ne sera pas publiée.</span> les champs requis sont indiqués <span class="required">*</span></p>

                                                <div class="column dt-sc-one-fourth first">

                                                    <div class="comment-form-rating">

                                                        <label for="rating">Votre note</label>

                                                        <select name="note" id="rating" required>

                                                            <option value="">Rate&hellip;</option>

                                                            <option value="5">Perfect</option>

                                                            <option value="4">Good</option>

                                                            <option value="3">Average</option>

                                                            <option value="2">Not that bad</option>

                                                            <option value="1">Very poor</option>

                                                        </select>

                                                    </div>

                                                </div>

                                                <div class="column dt-sc-three-fourth">

                                                    <p class="comment-form-comment">

                                                        <label for="comment">Votre avis&nbsp;<span class="required">*</span></label>

                                                        <textarea id="comment" name="content" cols="45" rows="8" required></textarea>

                                                    </p>

                                                    <div class="column dt-sc-one-half first">

                                                        <p class="comment-form-author">

                                                            <label for="author">Nom&nbsp;<span class="required">*</span></label> <input id="author" name="name" type="text" value="" size="30" required />

                                                        </p>

                                                    </div>

                                                    <div class="column dt-sc-one-half">

                                                        <p class="comment-form-email">

                                                            <label for="email">Email&nbsp;<span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" required />

                                                        </p>

                                                    </div>

                                                </div>

                                                <p class="form-submit">

                                                    <input name="submit" type="submit" id="submit" class="submit" value="Envoyer" />

                                                    <input type="hidden" name="produit_id" value="{{ $data->id }}" id="comment_post_ID" />

                                                    <input type="hidden" name="comment_parent" id="comment_parent" value="0" />

                                                </p>

                                            </form>

                                        </div>

                                        <!-- #respond -->

                                    </div>

                                </div>



                                <div class="clear"></div>

                            </div>

                        </div>

                    </div>

                    <div class="dt-sc-tabs-horizontal-frame-content">

                        <div class="dt-sc-product-tabs dt-sc-product-tabs-exploded dt-sc-product-hide-tab-title">

                            <h2>Livraison</h2>



                            <div data-delay="0" class="vc_row wpb_row vc_row-fluid">

                                <div class="wpb_column vc_column_container vc_col-sm-12" data-delay="0">

                                    <div class="vc_column-inner">

                                        <div class="wpb_wrapper">

                                            <h4 class=" " data-delay="0"> {!! nl2br(App\Models\Parametre::where('id',33)->select('valeur')->get()->first()->valeur) !!}</h4>

                                            <div class="dt-sc-clear"></div>

                                            <div class="wpb_text_column wpb_content_element">

                                                <div class="wpb_wrapper">


                                                 {!! nl2br(App\Models\Parametre::where('id',34)->select('valeur')->get()->first()->valeur) !!}

                                                 <br> 
                                                 <img src="https://www.iris.ma/tracking/img/amana.jpg" style="display: inline;margin-right: 49px;"><img src="https://cdn.1min30.com/wp-content/uploads/2018/05/logo-FedEx-1.jpg" style="display: inline;width: 141px;">

                                             </div>

                                         </div>



                                     </div>

                                 </div>

                             </div>

                         </div>

                     </div>

                 </div>



                 <div class="dt-sc-tabs-horizontal-frame-content">

                    <div class="dt-sc-product-tabs dt-sc-product-tabs-exploded dt-sc-product-hide-tab-title">

                        <h2>Paiement</h2>



                        <div data-delay="0" class="vc_row wpb_row vc_row-fluid">

                            <div class="wpb_column vc_column_container vc_col-sm-12" data-delay="0">

                                <div class="vc_column-inner">

                                    <div class="wpb_wrapper">

                                        <h4 class=" " data-delay="0"> {!! nl2br(App\Models\Parametre::where('id',36)->select('valeur')->get()->first()->valeur) !!}</h4>

                                        <div class="dt-sc-clear"></div>

                                        <div class="wpb_text_column wpb_content_element">

                                            <div class="wpb_wrapper">

                                                {!! nl2br(App\Models\Parametre::where('id',35)->select('valeur')->get()->first()->valeur) !!}

                                                <br /><br />
                                                <img src="https://1.bp.blogspot.com/-6TKZygRxRno/Ve3IZ5bpuQI/AAAAAAAAEfI/SmBhpXSBqFk/s1600/paiements%2Ben%2Bligne.PNG">

                                            </div>

                                        </div>



                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                <div class="dt-sc-tabs-horizontal-frame-content">

                    <div class="dt-sc-product-tabs dt-sc-product-tabs-exploded dt-sc-product-hide-tab-title">

                        <h2>Service Client</h2>



                        <div data-delay="0" class="vc_row wpb_row vc_row-fluid">

                            <div class="wpb_column vc_column_container vc_col-sm-12" data-delay="0">

                                <div class="vc_column-inner">

                                    <div class="wpb_wrapper">

                                        <h4 class=" " data-delay="0"> {!! nl2br(App\Models\Parametre::where('id',37)->select('valeur')->get()->first()->valeur) !!}</h4>

                                        <div class="dt-sc-clear"></div>

                                        <div class="wpb_text_column wpb_content_element">

                                            <div class="wpb_wrapper">

                                                {!! nl2br(App\Models\Parametre::where('id',38)->select('valeur')->get()->first()->valeur) !!}

                                            </div>

                                        </div>



                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</div>

<div data-delay="0" class="vc_row wpb_row vc_row-fluid">

    <div class="wpb_column vc_column_container vc_col-sm-12" data-delay="0">

        <div class="vc_column-inner">

            <div class="wpb_wrapper">

                <div class="dt-sc-clear"></div>

                <div id="1560324512750-6bddd391-5e37" class="dt-sc-empty-space"></div>

            </div>

        </div>

    </div>

</div>

<div data-delay="0" class="vc_row wpb_row vc_row-fluid">

    <br /><br />

    <div class="wpb_column vc_column_container vc_col-sm-12" data-delay="0">

        <div class="vc_column-inner">

            <div class="wpb_wrapper">

                <div class="dt-sc-product-related-products">

                    <section class="related products">

                        <h2>{!! nl2br(App\Models\Parametre::where('id',28)->select('valeur')->get()->first()->valeur) !!}</h2>

                        <ul

                        class="products columns-4 product-style-default product-overlay-dark-bgcolor product-overlay-righttoleft product-hover-image-fadeinleft product-hover-secimage-slideright product-content-hover-slidebottom product-padding-content product-with-space product-label-boxed product-thumb-alignment-bottom-right product-thumb-iconsgroup-style-bgfill-square product-thumb-iconsgroup-position-vertical vertical-position-bottom-right product-thumb-buttonelement-style-simple product-content-alignment-center product-content-iconsgroup-style-bgfill-rounded product-content-buttonelement-style-bgfill-rounded"

                        >

                        































                        @foreach (App\Models\Produit::whereHas('image')->with('image')->limit(3)->inRandomOrder()->get() as $data)









                        @include('front.pages.accueil.squelette', ['data' => $data,'loo' => 4])











                        @endforeach















































                    </ul>

                </section>

            </div>

        </div>

    </div>

</div>

</div>

<div data-delay="0" class="vc_row wpb_row vc_row-fluid">

    <div class="wpb_column vc_column_container vc_col-sm-12" data-delay="0">

        <div class="vc_column-inner">

            <div class="wpb_wrapper"><div id="1560935327322-db28eabb-60cf" class="dt-sc-empty-space"></div></div>

        </div>

    </div>

</div>



</div>

</section>

<!-- ** Primary - End ** -->

<section id="secondary-left" class="secondary-sidebar secondary-has-left-sidebar">

    <div class="type15">

        <aside id="woocommerce_product_categories-3" class="widget woocommerce widget_product_categories">

            <h3 class="widgettitle">Catégories</h3>

            <ul class="product-categories">

              @foreach (App\Models\Famille::withCount('produits')->orderBy('produits_count', 'desc')->get() as $data)



              <li class="cat-item cat-item-53"><a href="{{ route('categorie', ['famille' => $data->slug]) }}">{{ $data->libelle }}</a>

                <span class="count">({{ $data->produits->count() }})</span></li>



                @endforeach



            </ul>

        </aside>

        @foreach (App\Models\Produit::whereHas('image')->limit(1)->inRandomOrder()->get() as $data)



        <aside id="text-2" class="widget widget_text">

            <h3 class="widgettitle">Top vendu</h3>

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

                                    <div class="product-thumb-overlay" style=""></div>

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

                                        <span style="width: {{ $data->note * 20 }}%;">Rated <strong class="rating">4.00</strong> out of 5</span>

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

<aside id="text-4" class="widget widget_text">

    <h3 class="widgettitle">{!! nl2br(App\Models\Parametre::where('id',10)->select('valeur')->get()->first()->valeur) !!}</h3>

    <div class="textwidget">

        <div class="dt-sc-products-container woocommerce best-sellers-shop1">

            <ul

            class="products product-style-default product-hover-fade-border product-hover-secimage-fade product-padding-default product-with-space product-label-boxed product-thumb-alignment-top product-thumb-iconsgroup-style-simple product-thumb-buttonelement-style-simple product-content-alignment-left product-content-iconsgroup-style-simple product-content-buttonelement-style-simple"

            >















            @foreach (App\Models\Produit::whereHas('image')->limit(3)->inRandomOrder()->get() as $data)







            <li

            class="product-list-view product-list-right-thumb product type-product post-15989 status-publish first instock product_cat-hair-care product_cat-half-wigs product_tag-mesh product_tag-synthetic-hair product_tag-virgin-hair has-post-thumbnail sale featured shipping-taxable purchasable product-type-simple"

            >

            <div class="dt-col dt-col-xs-12 dt-col-sm-12 dt-col-md-12 dt-col-lg-12">

                <div class="product-wrapper">

                    <div class="product-thumb">

                        <a class="image" href="{{ route('details', ['produit' => $data->slug]) }}" title="{{ $data->libelle }}">

                            <div class="product-thumb-overlay"></div>

                            <div class="primary-image" style="background-image: url({{ $data->image->url('thumbails-450') }});"></div>

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

                                <span style="width: {{ $data->note * 20 }}%;">Rated <strong class="rating">4.00</strong> out of 5</span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </li>











        @endforeach









        























        















    </ul>

</div>

</div>

</aside>

</div>























































</section>

</div>

<!-- ** Main - Container - End ** -->

</div>

                <!-- ** Main - End ** -->