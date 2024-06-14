<!-- **Footer** -->

                <footer id="footer">

                    <div class="container">

                        <div data-delay="0" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid dt-sc-dark-bg vc_custom_1584096479264 vc_row-has-fill">

                            <div class="wpb_column vc_column_container vc_col-sm-2" data-delay="0">

                                <div class="vc_column-inner"><div class="wpb_wrapper"></div></div>

                            </div>

                            <div class="wpb_column vc_column_container vc_col-sm-8" data-delay="0">

                                <div class="vc_column-inner">

                                    <div class="wpb_wrapper">

                                        <div id="1584092621101-7576bcad-091b" class="dt-sc-empty-space"></div>

                                        <div id="dt-1583994780316-a8229537-3bf6" class="dt-logo-container logo-align-center" data-delay="0">

                                            <a href={{ route('home') }} rel="home"><img src="{{ url('/') }}/asset/wp-content/uploads/2019/07/logo-light.png" style="width: 340px" alt="Triss" /></a>

                                        </div>

                                        <div id="1584096280929-027a2f2e-78ef" class="dt-sc-empty-space"></div>

                                        <div class="dt-sc-newsletter-section type6" data-delay="0">

                                            <form class="dt-sc-subscribe-frm" name="frmsubscribe" action="#" method="post">

                                                <input type="email" name="dt_mc_emailid" required="required" placeholder="Votre adresse Email" /><input type="hidden" name="dt_mc_apikey" value="8853d846f5b4a0e721d02d273fa89522-us20" />

                                                <input type="hidden" name="dt_mc_listid" value="731ca0cf40" /><input type="submit" name="mc_submit" value="Inscrivez-vous" />

                                            </form>

                                            <div class="dt_ajax_subscribe_msg"></div>

                                        </div>

                                        <div id="1584092669912-622bbc2c-d174" class="dt-sc-empty-space"></div>

                                        <div class="wpb_text_column wpb_content_element aligncenter">

                                            <div class="wpb_wrapper">

                                                <p>{!! nl2br(App\Models\Parametre::where('id',20)->select('valeur')->get()->first()->valeur) !!}</p>

                                            </div>

                                        </div>

                                        <ul

                                            id="dt-1505557179803-73060c21-3899"

                                            data-delay="0"

                                            class="dt-sc-sociable extra-large center no-vertical-space"

                                            data-default-style="none"

                                            data-default-border-radius="no"

                                            data-default-shape=""

                                            data-hover-style="none"

                                            data-hover-border-radius="no"

                                            data-hover-shape=""

                                        >

                                            <li class="facebook">

                                                <a href="{!! nl2br(App\Models\Parametre::where('id',29)->select('valeur')->get()->first()->valeur) !!}" title="Facebook" target="_blank">

                                                    <span class="dt-icon-default"> <span></span> </span> <i></i>Facebook <span class="dt-icon-hover"> <span></span> </span>

                                                </a>

                                            </li>

                                            <li class="twitter">

                                                <a href="{!! nl2br(App\Models\Parametre::where('id',31)->select('valeur')->get()->first()->valeur) !!}" title="Twitter" target="_blank">

                                                    <span class="dt-icon-default"> <span></span> </span> <i></i>Twitter <span class="dt-icon-hover"> <span></span> </span>

                                                </a>

                                            </li>

                                            <li class="youtube">

                                                <a href="{!! nl2br(App\Models\Parametre::where('id',30)->select('valeur')->get()->first()->valeur) !!}" title="Pinterest" target="_blank">

                                                    <span class="dt-icon-default"> <span></span> </span> <i></i>Pinterest <span class="dt-icon-hover"> <span></span> </span>

                                                </a>

                                            </li>

                                            <li class="instagram">

                                                <a href="{!! nl2br(App\Models\Parametre::where('id',32)->select('valeur')->get()->first()->valeur) !!}" title="Dribbble" target="_blank">

                                                    <span class="dt-icon-default"> <span></span> </span> <i></i>Dribbble <span class="dt-icon-hover"> <span></span> </span>

                                                </a>

                                            </li>

                                           

                                        </ul>

                                        <div id="1584092667680-fa3e4034-1e51" class="dt-sc-empty-space"></div>

                                        <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text">

                                            <span class="vc_sep_holder vc_sep_holder_l"><span style="border-color: rgb(255, 255, 255); border-color: rgba(255, 255, 255, 0.18);" class="vc_sep_line"></span></span>

                                            <span class="vc_sep_holder vc_sep_holder_r"><span style="border-color: rgb(255, 255, 255); border-color: rgba(255, 255, 255, 0.18);" class="vc_sep_line"></span></span>

                                        </div>

                                        <div class="wpb_text_column wpb_content_element vc_custom_1584092648035 aligncenter">

                                            <div class="wpb_wrapper">

                                                <p>

                                                    {!! nl2br(App\Models\Parametre::where('id',21)->select('valeur')->get()->first()->valeur) !!}

                                                </p>

                                            </div>

                                        </div>

                                        <div id="1560146568835-26616a63-323f" class="dt-sc-empty-space"></div>

                                    </div>

                                </div>

                            </div>

                            <div class="wpb_column vc_column_container vc_col-sm-2" data-delay="0">

                                <div class="vc_column-inner"><div class="wpb_wrapper"></div></div>

                            </div>

                        </div>

                        <div class="vc_row-full-width vc_clearfix"></div>

                    </div>

                </footer>

                <!-- **Footer - End** -->