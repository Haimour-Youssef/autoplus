 <li

 class="product-grid-view product-with-secondary-image product type-product post-15973 status-publish first instock product_cat-full-cap product_tag-mesh product_tag-polyurethane has-post-thumbnail sale shipping-taxable purchasable product-type-simple"

 >

 <div class="dt-col dt-col-xs-12 dt-col-sm-6 dt-col-md-6 dt-col-qxlg-{{ $loo }} dt-col-hxlg-{{ $loo }} dt-col-lg-{{ $loo }}" >

    <div class="product-wrapper">

        <div class="product-thumb">

            <a class="image" href="{{ route('details', ['produit' => $data->slug]) }}" title="{{ $data->libelle }}">

                <div class="product-thumb-overlay" ></div>

                <div class="product-labels" style="display: {{ $data->nouveau == '0' ? 'none' : 'block' }}"
                
                >

                    <span class="onsale"><span>Nouveau </span></span>

                </div>

                <div class="primary-image" style="background: url({{ $data->image->url('thumbails-100') }}) no-repeat center center;"></div>

                <div class="secondary-image" style="background-image: url({{ $data->image->url('thumbails-450') }});"></div>

            </a>

            <div class="product-thumb-content">

                <div class="product-buttons-wrapper product-icons">

                    <div class="wc_inline_buttons">

                        <div class="wcct_btn_wrapper wc_btn_inline" data-tooltip="Add To Cart">






                            



                            <form  id="form-add-cart{{ $data->id }}" action="{{ route('cart.store', $data) }}" method="POST">
                        {{ csrf_field() }}
                        <a

                            href="javascript:void(0)" OnClick="document.getElementById('form-add-cart{{ $data->id }}').submit()"


                            data-quantity="1"

                            class="dt-sc-button too-small button product_type_simple add_to_cart_button ajax_add_to_cart"

                            data-product_id="15973"

                            data-product_sku="woo-sunglasses"

                            aria-label="Add “Long Hair Jet Black” to your cart"

                            rel="nofollow"

                            >

                            Ajouter au cart

                        </a>
                    </form>

                    </div>

                    <div class="wcwl_btn_wrapper wc_btn_inline" data-tooltip="Wishlist">

                        <div

                        class="yith-wcwl-add-to-wishlist add-to-wishlist-15973 wishlist-fragment on-first-load"

                        data-fragment-ref="15973"

                        data-fragment-options='{"base_url":"","in_default_wishlist":false,"is_single":false,"show_exists":false,"product_id":"15973","parent_product_id":15973,"product_type":"simple","show_view":false,"browse_wishlist_text":"Browse Wishlist","already_in_wishslist_text":"The product is already in the wishlist!","product_added_text":"Product added!","heading_icon":"","available_multi_wishlist":false,"disable_wishlist":false,"show_count":false,"ajax_loading":false,"loop_position":false,"item":"add_to_wishlist"}'

                        >

                        <!-- ADD TO WISHLIST -->



                        <div class="yith-wcwl-add-button">



                            <form id="form-add-wishlist{{ $data->id }}" action="{{ route('wishlist.store', $data) }}" method="POST">
                                {{ csrf_field() }}




                                <a

                                href="javascript:void(0)" OnClick="document.getElementById('form-add-wishlist{{ $data->id }}').submit()"

                                rel="nofollow"

                                data-product-id="15973"

                                data-product-type="simple"

                                data-original-product-id="15973"

                                class="add_to_wishlist single_add_to_wishlist"

                                data-title="Add to Wishlist"

                                >



                                <span>Ajouter au Wishlist</span>

                            </a>




                        </form>






                    </div>

                    <!-- COUNT TEXT -->

                </div>

            </div>




            <div class="wc_btn_inline" data-tooltip="Quick View"><a href="{{ route('details', ['produit' => $data->slug]) }}" class="button yith-wcqv-button" >Détails</a></div>

        </div>

    </div>

</div>

</div>

<div class="product-details">

    <div class="product-title" style="overflow: hidden;
    height: 58px;">

    <h5><a href="{{ route('details', ['produit' => $data->slug]) }}">{{ $data->libelle }}</a></h5>

</div>

<div class="product-short-description">{!! nl2br($data->description) !!}</div>

<div class="product-separator"></div>

<div class="product-element-group-wrapper">

    <div class="product-element-group-items">

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

            <div class="star-rating" role="img" aria-label="Rated {{ $data->note }}.00 out of 5">

                <span style="width: {{ $data->note * 20 }}%;">Rated <strong class="rating">{{ $data->note }}.00</strong> out of 5</span>

            </div>

        </div>

    </div>



    <div class="product-element-group-items"><div class="product-buttons-wrapper product-icons"><div class="wc_inline_buttons"><div class="wcct_btn_wrapper wc_btn_inline" data-tooltip="Add To Cart">


 <form id="form-add-cart-{{ $data->id }}" action="{{ route('cart.store', $data) }}" method="POST">
                        {{ csrf_field() }}
        <a  href="javascript:void(0)" OnClick="document.getElementById('form-add-cart-{{ $data->id }}').submit()" class="dt-sc-button too-small button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="15989" data-product_sku="wp-pennant" aria-label="Add “Golden Curly Wig” to your cart" rel="nofollow">Add to cart</a>

</form>


    </div></div></div></div>


</div>

</div>

</div>

</div>

</li>