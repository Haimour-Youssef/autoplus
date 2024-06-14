 <section class="main-title-section-wrapper aligncenter">

    <div

    class="main-title-section-bg"

    style="background-image: url({{ url('/') }}/asset/wp-content/uploads/2020/01/breadcrumb_bg_img-1.jpg); background-position: center top; background-size: auto; background-repeat: repeat-x; background-attachment: scroll;"

    ></div>

    <div class="container">

        <div class="main-title-section"><h1>Panier</h1></div>

        <div class="breadcrumb"><a href="https://triss.wpengine.com/">Accueil</a><span class="fa default"></span><span class="current">Panier</span></div>

    </div>

</section>











<!-- **Main** -->

<div id="main">

    <!-- ** Container ** -->

    <div class="container">

        <!-- Primary -->


        @if (Cart::count() > 0)

        <section id="primary" class="content-full-width">   <!-- #post-6 -->

            <div id="post-6" class="post-6 page type-page status-publish hentry">

                <div class="woocommerce">




                    <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">

                        <thead>

                            <tr>

                                <th class="product-thumbnail">Produit</th>

                                <th class="product-name">&nbsp;</th>

                                <th class="product-price">Prix</th>

                                <th class="product-quantity">Quantité</th>

                                <th class="product-subtotal">Total</th>

                                <th class="product-remove">&nbsp;</th>              

                            </tr>

                        </thead>

                        <tbody>



















                          @foreach (Cart::content() as $data)



                          <tr class="woocommerce-cart-form__cart-item cart_item">



                            <td class="product-thumbnail" style="text-align: center;">

                                <a href="{{ route('details', ['produit' => $data->model]) }}"><img style="width: 60px" src="{{ $data->model->image->url('thumbails-100') }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy"></a>
                            </td>



                            <td class="product-name" data-title="Product">

                                <a href="{{ route('details', ['produit' => $data->model]) }}">{{ $data->model->libelle }}</a>                       </td>



                                <td class="product-price" data-title="Price">

                                    <label>Price</label>

                                    <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol"></span>{{ $data->model->prix_reduis }}.00DHs</bdi></span>                        </td>



                                    <td class="product-quantity" data-title="Quantity">

                                        <label>Quantity</label>

                                        <div class="quantity ">

                                            <label class="screen-reader-text" for="quantity_5fe48ebc2c0e2">{{ $data->model->libelle }}</label>



                                            <form id="form-update-cart{{ $data->rowId }}" action="{{ route('cart.update', $data->rowId) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('PATCH') }}

                                                <select name="quantite_select" onchange="document.getElementById('form-update-cart{{ $data->rowId }}').submit()"  data-id="{{ $data->rowId }}">
                                                    @for ($i = 1; $i < $data->model->stock + 1 ; $i++)
                                                    <option {{ $data->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                                                    @endfor
                                                </select>

                                                
                                            </form>














                                        </div>

                                    </td>



                                    <td class="product-subtotal" data-title="Total">

                                        <label>Total</label>

                                        <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol"></span>{{ ($data->subtotal) }}DHs</bdi></span>                        </td>



                                        <td class="product-remove">


                                         <form id="form-remove-cart{{ $data->rowId }}" action="{{ route('cart.destroy', $data->rowId) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <a href="javascript:void(0)" OnClick="document.getElementById('form-remove-cart{{ $data->rowId }}').submit()"  type="submit" class="remove">×</a>
                                        </form>



                                    </td>



                                </tr>













                                @endforeach































                            </tbody>

                        </table>





                        <div class="actions dt-sc-cart-coupon-holder">



                            <div class="coupon">

                                <label for="coupon_code">Coupon:</label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code"> <button type="submit" class="button" name="apply_coupon" value="Apply coupon">Entrer un coupon</button>

                            </div>





                            <input type="hidden" id="woocommerce-cart-nonce" name="woocommerce-cart-nonce" value="07d03582af"><input type="hidden" name="_wp_http_referer" value="/cart/">

                        </div>








                        <div class="cart-collaterals">

                            <div class="cart_totals ">





                                <h2>Panier totals</h2>



                                <table class="shop_table shop_table_responsive" cellspacing="0">



                                    <tbody><tr class="cart-subtotal">

                                        <th>Sous-total</th>

                                        <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol"></span>{{ (Cart::subtotal()) }}DHs</bdi></span></td>

                                    </tr>





                                    <tr class="order-total">

                                        <th>Total</th>

                                        <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol"></span>{{ (Cart::subtotal()) }}DHs</bdi></span></strong> </td>

                                    </tr>





                                </tbody></table>



                                <div class="wc-proceed-to-checkout">



                                    <a href="{{ route('checkout') }}" class="checkout-button button alt wc-forward">

                                    Valider la commande</a>

                                </div>





                            </div>



                            <div class="cross-sells">



                                <h2>{!! nl2br(App\Models\Parametre::where('id',28)->select('valeur')->get()->first()->valeur) !!}</h2>      



                                <ul class="products columns-3 product-style-default  product-overlay-dark-bgcolor product-overlay-righttoleft product-hover-image-fadeinleft product-hover-secimage-slideright product-content-hover-slidebottom product-padding-content product-with-space product-label-boxed product-thumb-alignment-bottom-right product-thumb-iconsgroup-style-bgfill-square product-thumb-iconsgroup-position-vertical vertical-position-bottom-right product-thumb-buttonelement-style-simple  product-content-alignment-center product-content-iconsgroup-style-bgfill-rounded product-content-buttonelement-style-bgfill-rounded ">



























                                    @foreach (App\Models\Produit::whereHas('image')->limit(4)->inRandomOrder()->get() as $data)









                                    @include('front.pages.accueil.squelette', ['data' => $data,'loo' => 3])











                                    @endforeach













































                                </ul>



                            </div>



                        </div>



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

            <!-- Primary End -->




            @else


            <section id="primary" class="content-full-width">   <!-- #post-6 -->
                <div id="post-6" class="post-6 page type-page status-publish hentry">
                    <div class="woocommerce"><div class="woocommerce-notices-wrapper"></div><p class="cart-empty woocommerce-info">{!! nl2br(App\Models\Parametre::where('id',4)->select('valeur')->get()->first()->valeur) !!}</p>    <p class="return-to-shop">
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














    </div>

    <!-- ** Container End ** -->

</div>

                <!-- **Main - End ** -->