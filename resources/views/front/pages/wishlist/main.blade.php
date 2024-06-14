





<section class="main-title-section-wrapper aligncenter">

    <div

    class="main-title-section-bg"

    style="background-image: url({{ url('/') }}/asset/wp-content/uploads/2020/01/breadcrumb_bg_img-1.jpg); background-position: center top; background-size: auto; background-repeat: repeat-x; background-attachment: scroll;"

    ></div>

    <div class="container">

        <div class="main-title-section"><h1>Wishlist</h1></div>

        <div class="breadcrumb"><a href="https://triss.wpengine.com/">Accueil</a><span class="fa default"></span><span class="current">Wishlist</span></div>

    </div>

</section>





<div id="main">

    <!-- ** Container ** -->

    <div class="container">

        <!-- Primary -->

        @if (count($datas) > 0)

        <section id="primary" class="content-full-width">

            <!-- #post-19411 -->

            <div id="post-19411" class="post-19411 page type-page status-publish hentry">

                <div

                id="yith-wcwl-form"

                action="https://triss.wpengine.com/wishlist/"

                method="post"

                class="woocommerce yith-wcwl-form wishlist-fragment"

                data-fragment-options='{"per_page":5,"current_page":1,"pagination":"no","wishlist_id":false,"action_params":"","no_interactions":false,"layout":"","wishlist":false,"is_default":true,"is_custom_list":false,"wishlist_token":"","is_private":false,"count":0,"page_title":"My wishlist on Clone","default_wishlsit_title":"My wishlist on Clone","page_links":false,"is_user_logged_in":false,"is_user_owner":true,"can_user_edit_title":false,"show_price":true,"show_dateadded":false,"show_stock_status":true,"show_add_to_cart":true,"show_remove_product":true,"add_to_cart_text":"Add to Cart","show_ask_estimate_button":false,"ask_estimate_url":"","price_excl_tax":true,"show_cb":false,"show_quantity":false,"show_variation":false,"show_price_variations":false,"show_update":false,"enable_drag_n_drop":false,"enable_add_all_to_cart":false,"move_to_another_wishlist":false,"repeat_remove_button":false,"show_last_column":true,"heading_icon":"&lt;i class=\"fa none\"&gt;&lt;\/i&gt;","share_enabled":false,"template_part":"view","additional_info":false,"available_multi_wishlist":false,"form_action":"https:\/\/triss.wpengine.com\/wishlist\/","item":"wishlist"}'

                >

                <!-- TITLE -->

                <div class="wishlist-title-container">

                    <div class="wishlist-title">

                        <h2>Ma wishlist </h2>

                    </div>

                </div>



                <div id="yith-wcwl-form" action="https://triss.wpengine.com/wishlist/" method="post" class="woocommerce">

                    <input type="hidden" id="yith_wcwl_form_nonce" name="yith_wcwl_form_nonce" value="7f31de67f0" /><input type="hidden" name="_wp_http_referer" value="/wishlist/" />

                    <!-- TITLE -->



                    <!-- WISHLIST TABLE -->

                    <table class="shop_table cart wishlist_table" data-pagination="no" data-per-page="5" data-page="1" data-id="1931" data-token="56HL1J3K72YN">





                        <thead>

                            <tr>



                                <th class="product-thumbnail">

                                    <span class="nobr">Produit</span>

                                </th>



                                <th class="product-name"></th>





                                <th class="product-price">

                                    <span class="nobr">

                                    Prix                    </span>

                                </th>







                                <th class="product-stock-status">

                                    <span class="nobr">

                                    Status                    </span>

                                </th>







                                <th class="product-add-to-cart"></th>





                                <th class="product-remove"></th>



                            </tr>

                        </thead>



                        <tbody>















                            @foreach ($datas as $data)







                            <tr id="yith-wcwl-row-15977" data-row-id="15977">



                                <td class="product-thumbnail" style="text-align: center;">

                                    <a href="{{ route('details', ['produit' => $data->slug]) }}">

                                        <img style="width: 60px" src="{{ $data->image->url('thumbails-100') }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" >                            </a>

                                    </td>



                                    <td class="product-name">

                                        <a href="{{ route('details', ['produit' => $data->slug]) }}">{{ $data->libelle }}</a>

                                       



                                        <td class="product-price">

                                            <label>Price</label>

                                            <del><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol"></span>{{ $data->prix_ttc }}.00DHs</bdi></span></del> <ins><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol"></span>{{ $data->prix_reduis }}.00DHs</bdi></span></ins>                            </td>



                                            <td class="product-stock-status">

                                                <label>Status</label>

                                                <span class="wishlist-in-stock">{{ $data->stock>0 ? 'En Stock' : '--' }}</span>                            </td>



                                                <td class="product-add-to-cart">

                                                    <!-- Date added -->



                                                    <!-- Add to cart button -->


                                                     <form  id="form-add-cart{{ $data->id }}" action="{{ route('cart.store', $data) }}" method="POST">
                            {{ csrf_field() }}
                            


                         
                                                

                                                

                                                    <input type="hidden" name="remove_cart" value="1">

                                                    <a href="javascript:void(0)" OnClick="document.getElementById('form-add-cart{{ $data->id }}').submit()"

                                                    class="button add_to_cart_button ajax_add_to_cart add_to_cart alt" 
                                                    aria-label="Add “Golden Brown Hair Style” to your cart" 
                                                    rel="nofollow">
                                                Ajouter au panier
                                            </a>  
                                        </form>                          

                                                    <!-- Change wishlist -->



                                                    <!-- Supprimer from wishlist -->

                                                </td>



                                                <td class="product-remove">

                                                   <form id="form-remove-wishlist{{ $data->id }}" action="{{ route('wishlist.destroy', $data) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <a href="javascript:void(0)" OnClick="document.getElementById('form-remove-wishlist{{ $data->id }}').submit()"  type="submit" class="remove">×</a>
                                                </form>

                                                </td>





                                            </tr>












                                            @endforeach





















                                        </tbody>



                                        <tfoot>

                                            <tr>

                                                <td colspan="6">





                                                </td>

                                            </tr>

                                        </tfoot>



                                    </table>



                                    <input type="hidden" id="yith_wcwl_edit_wishlist" name="yith_wcwl_edit_wishlist" value="d88790c596" /><input type="hidden" name="_wp_http_referer" value="/wishlist/" />

                                </div>



                                <div class="yith_wcwl_wishlist_footer"></div>



                                <input type="hidden" id="yith_wcwl_edit_wishlist" name="yith_wcwl_edit_wishlist" value="d88790c596" /><input type="hidden" name="_wp_http_referer" value="/wishlist/" />

                                <input type="hidden" value="" name="wishlist_id" id="wishlist_id" />

                            </div>

                        </div>

                        <!-- #post-19411 -->

                        <div class="dt-sc-hr"></div>

                        <div class="dt-sc-clear"></div>

                        <!-- ** Comment Entries ** -->

                        <section class="commententries">

                            <div id="comments" class="comments-area">

                                <!-- Comment Form -->

                            </div>

                            <!-- .comments-area -->

                        </section>

                    </section>

                    @else


                                    <section id="primary" class="content-full-width">   <!-- #post-6 -->
                                        <div id="post-6" class="post-6 page type-page status-publish hentry">
                                            <div class="woocommerce"><div class="woocommerce-notices-wrapper"></div><p class="cart-empty woocommerce-info">Votre Wishlist est actuellement vide.</p>    <p class="return-to-shop">
                                                <a class="button wc-backward" href="{{ route('shop') }}">
                                                Boutique en ligne      </a>
                                            </p>
                                        </div>
                                    </div><!-- #post-6 -->
                                    <div class="dt-sc-hr"></div>
                                    <div class="dt-sc-clear"></div>
                                    <!-- ** Comment Entries ** -->
                                    <section class="commententries">

                                        <div id="comments" class="comments-area">
                                            <!-- Comment Form -->
                                        </div><!-- .comments-area -->
                                    </section>
                                </section>

                                @endif

                    <!-- Primary End -->

                </div>

                <!-- ** Container End ** -->

            </div>