                   













                    <!-- **Header - End ** -->

                    <section class="main-title-section-wrapper aligncenter">

                        <div

                            class="main-title-section-bg"

                            style="background-image: url({{ url('/') }}/asset/wp-content/uploads/2020/01/breadcrumb_bg_img-1.jpg); background-position: center top; background-size: auto; background-repeat: repeat-x; background-attachment: scroll;"

                        ></div>

                        <div class="container">

                            <div class="main-title-section"><h1>Collections</h1></div>

                            <div class="breadcrumb">

                                <a href="#">Accueil</a><span class="fa default"></span><a href="#">Collections</a>

                               

                            </div>

                        </div>

                    </section>

               

    <div id="main">

                    <!-- ** Container ** -->

                    <div class="container">

                        <!-- Primary -->

                        <section id="primary" class="content-full-width">

                            <!-- #post-19780 -->

                            <div id="post-19780" class="post-19780 page type-page status-publish hentry">

                                <div >

                                    <div >

                                        <div class="vc_column-inner">

                                            <div class="wpb_wrapper">

                                                <div class="woocommerce columns-3">

                                                    <ul

                                                        class="products columns-3 product-style-default product-overlay-dark-bgcolor product-overlay-righttoleft product-hover-image-fadeinleft product-hover-secimage-slideright product-content-hover-slidebottom product-padding-content product-with-space product-label-boxed product-thumb-alignment-bottom-right product-thumb-iconsgroup-style-bgfill-square product-thumb-iconsgroup-position-vertical vertical-position-bottom-right product-thumb-buttonelement-style-simple product-content-alignment-center product-content-iconsgroup-style-bgfill-rounded product-content-buttonelement-style-bgfill-rounded"

                                                    >

                                                        

































































                                                      @foreach (App\Models\Famille::withCount('produits')->orderBy('produits_count', 'desc')->get() as $data)



                                                        <li class="product-category product">

                                                            <div class="dt-col dt-col-xs-12 dt-col-sm-6 dt-col-md-6 dt-col-qxlg-3 dt-col-hxlg-3 dt-col-lg-3">

                                                                <div class="product-wrapper">

                                                                    <div class="product-thumb">

                                                                        <span class="image">

                                                                            <a href="{{ route('categorie', ['famille' => $data->slug]) }}">

                                                                                <img

                                                                                    src="{{ $data->image->url() }}"

                                                                                    

                                                                                />

                                                                            </a>

                                                                        </span>

                                                                    </div>

                                                                    <div class="product-details">

                                                                        <h5><a href="{{ route('shop') }}">{{ $data->libelle }}</a> <mark class="count">{{ $data->produits->count() }} Article(s)</mark></h5>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </li>







                                                    @endforeach

                                                        









                                                    </ul>

                                                </div>

                                                <div id="1560239398468-91b389fa-70ac" class="dt-sc-empty-space"></div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="vc_row-full-width vc_clearfix"></div>

                            </div>

                            <!-- #post-19780 -->

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

                        <!-- Primary End -->

                    </div>

                    <!-- ** Container End ** -->

                </div>