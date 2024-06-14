





<section class="main-title-section-wrapper aligncenter">

    <div

    class="main-title-section-bg"

    style="background-image: url({{ url('/') }}/asset/wp-content/uploads/2020/01/breadcrumb_bg_img-1.jpg); background-position: center top; background-size: auto; background-repeat: repeat-x; background-attachment: scroll;"

    ></div>

    <div class="container">

        <div class="main-title-section"><h1>Mon compte</h1></div>

        <div class="breadcrumb"><a href="https://triss.wpengine.com/">accueil</a><span class="fa default"></span><span class="current">Mon compte</span></div>

    </div>

</section>





<div id="main">

    <!-- ** Container ** -->

    <div class="container">

        <!-- Primary -->

        <section id="primary" class="content-full-width">   <!-- #post-8 -->




            @if($errors->any())

            <div id="post-6" class="post-6 page type-page status-publish hentry">
                                            <div class="woocommerce"><div class="woocommerce-notices-wrapper"></div><div style="border-color: red" class="cart-empty woocommerce-info"><ul>
                                                

                                                @foreach($errors->all() as $error)

                                <li>{{ $error }}</li>

                                @endforeach


                                            </ul></div>   
                                        </div>
                                    </div><!-- #post-6 -->
                                    <div class="dt-sc-hr"></div>
                                    <div class="dt-sc-clear"></div>
            @endif



       

        <div id="post-8" class="post-8 page type-page status-publish hentry">

            <div class="woocommerce"><div class="woocommerce-notices-wrapper"></div>



            <h2>Login</h2>





            <form class="woocommerce-form woocommerce-form-login login" method="post" action="{{ route('login') }}"> @csrf





                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">

                    <label for="username">Login ou email address&nbsp;<span class="required">*</span></label>


                    <input  id="identify" type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="identify" value="{{ old('identify') }}" required autocomplete="identify" autofocus>

                </p>

                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">

                    <label for="password">Mot de passe&nbsp;<span class="required">*</span></label>

                    <input id="password"  type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" required autocomplete="current-password">



                </p>





                <p class="form-row">

                    <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">

                        <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> <span>Se souvenir de moi </span>

                    </label>

                    <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="47eb52a8c4"><input type="hidden" name="_wp_http_referer" value="/my-account/">              <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Log in">S'identifier</button>

                </p>

                <p class="woocommerce-LostPassword lost_password">

                    <a href="{{ route('register') }}">Nouveau client?</a> &nbsp;
                    <a href="{{ route('password.request') }}">Mot de passe oublié?</a>

                </p>

                





            </form>





        </div>

    </div><!-- #post-8 -->

    <div class="dt-sc-hr"></div>

    <div class="dt-sc-clear"></div>

    <!-- ** Comment Entries ** -->

    <section class="commententries">



        <div id="comments" class="comments-area">

            <!-- Comment Form -->

        </div><!-- .comments-area -->

    </section>

</section>

</div>

<!-- ** Container End ** -->

</div>