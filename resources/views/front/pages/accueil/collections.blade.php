 <section data-vc-full-width="true" data-vc-full-width-init="false" class="vc_section dt-skin-tertiary-bg vc_custom_1584344963482 vc_section-has-fill">

    <div data-delay="0" class="vc_row wpb_row vc_row-fluid">

        <div class="wpb_column vc_column_container vc_col-sm-12" data-delay="0">

            <div class="vc_column-inner">

                <div class="wpb_wrapper">

                    <div id="1560150532413-7cde7547-1144" class="dt-sc-empty-space"></div>

                    <div class="vc_row wpb_row vc_inner vc_row-fluid">

                        <div class="wpb_column vc_column_container vc_col-sm-2">

                            <div class="vc_column-inner"><div class="wpb_wrapper"></div></div>

                        </div>

                        <div class="wpb_column vc_column_container vc_col-sm-8" style="text-align: center;">

                            <div class="vc_column-inner">

                                <div class="wpb_wrapper">

                                    <h2 class=" " data-delay="0">{!! nl2br(App\Models\Parametre::where('id',5)->select('valeur')->get()->first()->valeur) !!}</h2>

                                    <h5 class=" " data-delay="0">{!! nl2br(App\Models\Parametre::where('id',6)->select('valeur')->get()->first()->valeur) !!}</h5>

                                </div>

                            </div>

                        </div>

                        <div class="wpb_column vc_column_container vc_col-sm-2">

                            <div class="vc_column-inner"><div class="wpb_wrapper"></div></div>

                        </div>

                    </div>

                    <div id="1560150554794-8d8afa6a-68df" class="dt-sc-empty-space"></div>

                    <div class="vc_row wpb_row vc_inner vc_row-fluid white-btn-bg">

                        





                        @foreach (App\Models\Famille::withCount('produits')->orderBy('produits_count', 'desc')->get() as $data)





                        <div class="rs_col-sm-12 wpb_column vc_column_container vc_col-sm-3">

                            <div class="vc_column-inner">

                                <div class="wpb_wrapper">

                                    <div

                                    class="ult-animation ult-animate-viewport ult-no-mobile"

                                    

                                    >

                                    <div class="dt-sc-image-caption type4 aligncenter" data-delay="0">

                                        <div class="dt-sc-image-wrapper">

                                            <a href="{{ route('categorie', ['famille' => $data->slug]) }}" target="_self" title="About Us">

                                                <img

                                                

                                                src="{{ $data->image->url() }}"

                                                

                                                />

                                            </a>

                                        </div>

                                        <div class="dt-sc-image-content">

                                            <div class="dt-sc-image-title">

                                                <h3>{{ $loop->index + 1 }}</h3>

                                                <h6>{{ $data->libelle }}</h6>

                                            </div>

                                            <p>{{ $data->description }}</p>

                                            <p>

                                                <a href="{{ route('categorie', ['famille' => $data->slug]) }}" target="_self" title="About Us" class="dt-sc-button medium filled filled-outline" data-delay="0"> <span>Voir Plus</span> </a>

                                            </p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>



                    @endforeach





                </div>

                <div id="1560150577514-98c1db0f-f4d1" class="dt-sc-empty-space"></div>

            </div>

        </div>

    </div>

</div>

</section>

<div class="vc_row-full-width vc_clearfix"></div>