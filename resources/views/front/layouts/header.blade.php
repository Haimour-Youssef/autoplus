<header class="header-with-topbar fixed-topbar">
    <!-- topbar -->
    <div class="top-header-area bg-black">
        <div class="container">
            <div class="row align-items-center">
                <div style="min-height: 29px;"
                    class="col-md-6 text-uppercase alt-font d-flex align-items-center justify-content-center justify-content-md-start">
                    <a href="tel:0522328117" class="text-link-white-2 line-height-normal"
                        title="Tél (+212) 522 32 81 17 / 51 61 61">Tél (+212) 522 32 81 17 / 51 61 61</a>
                    <div
                        class="separator-line-verticle-extra-small bg-dark-gray display-inline-block margin-two-half-lr position-relative vertical-align-middle">
                    </div>
                    <a href="mailto:contact@maghrebaccessoires.com" class="text-link-white-2 line-height-normal"
                        title="contact@maghrebaccessoires.com">contact@maghrebaccessoires.com</a>
                </div>
                <div class="col-md-6 d-none d-md-flex align-items-center justify-content-end">



                    <div
                        style="width: 0;
height: 0;
border-style: solid;
border-width: 0 13px 37px 0;
border-color: transparent rgba(217, 13, 30,.8) transparent transparent;
">
                    </div>


                    <div class="log_header alt-font">

                        <a href="{{ route('login') }}"
                            class="text-link-white-2 line-height-normal"><i class="fas fa-unlock-alt"></i>
                            @auth
                            Mon-espace
                            @else
                            Se connecter
                            @endauth
                        </a>

                        <div class="separator-line-verticle-extra-small bg-dark-gray display-inline-block margin-two-half-lr position-relative vertical-align-middle top-1px"
                            style="background-color: rgba(255,255,255,.6);height: 12px;"></div>
                            @auth
                            @if (Auth::user()->is_admin)
                            <a
                            href="{{ route('backoffice') }}" class="text-link-white-2 line-height-normal"><i
                                class="fas fa-user"></i>Backoffice</a>
                            @else
                            <a
                            href="{{ route('contact') }}" class="text-link-white-2 line-height-normal"><i
                                class="fas fa-user"></i>Devenir client</a>
                            @endif
                            @else
                            <a
                            href="{{ route('contact') }}" class="text-link-white-2 line-height-normal"><i
                                class="fas fa-user"></i>Devenir client</a>
                            @endauth
                            
                    </div>


                    <div
                        style="width: 0;
height: 0;
border-style: solid;
border-width: 37px 0 0 11px;
border-color: transparent transparent transparent rgba(217, 13, 30,.8);
">
                    </div>

                    <div class="icon-social-very-small display-inline-block line-height-normal">
                        <a href="https://www.linkedin.com/company/autoplus-maghrebaccessoires/" title="Linked In"
                            target="_blank" class="text-link-white-2"><i class="fab fa-linkedin-in"></i></a>

                        <a href="https://www.facebook.com/maghrebaccessoires" title="Facebook" target="_blank"
                            class="text-link-white-2"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/autoplusmaghreb" title="Twitter" target="_blank"
                            class="text-link-white-2"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.youtube.com/channel/UCnUDnhuN2HnGlH2QPAe7C9A" title="Youtube"
                            target="_blank" class="text-link-white-2"><i class="fab fa-youtube"></i></a>
                        <a href="https://instagram.com/autoplus_maghrebaccessoires?igshid=YmMyMTA2M2Y="
                            title="Instagram" target="_blank" class="text-link-white-2"><i
                                class="fab fa-instagram"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end topbar -->
    <!-- start navigation -->
    <nav
        class="navbar navbar-default bootsnav navbar-fixed-top background-black header-dark nav-box-width navbar-expand-lg white-link">
        <div class="container nav-header-container">
            <!-- start logo -->
            <div class="col-auto pl-lg-0">
                <a href="{{ route('home') }}" title="Pofo" class="logo"><img
                        src="{{ asset('asset/images/logo.png') }}" data-rjs="images/logo@2x.png"
                        class="logo-dark default" alt="Pofo"><img src="{{ asset('asset/images/logo.png') }}"
                        data-rjs="images/logo-white@2x.png" alt="Pofo" class="logo-light"></a>
            </div>
            <!-- end logo -->
            <div class="col accordion-menu pr-0 pr-md-3">
                <button type="button" class="navbar-toggler collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse-toggle-1">
                    <span class="sr-only">toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse-toggle-1">
                    <ul id="accordion" class="nav navbar-nav navbar-left no-margin alt-font text-normal"
                        data-in="fadeIn" data-out="fadeOut">
                        <!-- start menu item -->
                        <li class="dropdown megamenu-fw">
                            <a href="{{ route('home') }}">Accueil</a><i class="fas  dropdown-toggle"
                                data-toggle="dropdown" aria-hidden="true"></i>
                        </li>
                        <!-- end menu item -->













                        <!-- end menu item -->
                        <li class="dropdown simple-dropdown"><a href="#">Société</a><i
                                class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                            <!-- start sub menu -->
                            <ul class="dropdown-menu" role="menu">


                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"
                                        href="{{ route('autoplus') }}">Qui sommes-nous?</a>
                                </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"
                                        href="#">Politique RH <i class="fas fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('valeurs') }}">Nos valeurs</a></li>
                                        <li><a href="{{ route('travailler') }}">Offres d'emploi</a></li>


                                        <li><a href="{{ route('processus') }}">Recrutement</a></li>
                                    </ul>
                                </li>


                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"
                                        href="{{ route('candidat') }}">Espace Candidat</a>
                                </li>

                                <!--
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="{{ route('offres') }}">Offres d'emploi</a>
    </li>-->
                            </ul>
                        </li>




                        <!-- end menu item
    <li class="dropdown simple-dropdown"><a href="#">AutoPlus</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
    
    <ul class="dropdown-menu" role="menu">
    
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="{{ route('autoplus') }}">Qui sommes-nous?</a>
    </li>
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="{{ route('nos-valeurs-autoplus', 'nos-valeurs') }}">Nos valeurs</a>
    </li>
    </ul>
    </li>
    start menu item -->



                        <li class="dropdown megamenu-fw">
                            <a href="#">Produits</a><i class="fas fa-angle-down dropdown-toggle"
                                data-toggle="dropdown" aria-hidden="true"></i>
                            <!-- start sub menu -->
                            <div class="menu-back-div dropdown-menu megamenu-content mega-menu collapse mega-menu-full icon-list-menu animated fadeOut"
                                style="top: 72px;">








                                <ul class="mega-product-ul">
                                    <!-- start sub menu column  -->
                                    <li class="mega-menu-column col-lg-4">
                                        <!-- start sub menu item  -->




                                        @foreach (App\Models\Categorie::orderBy('classement')->with('image')->where('parent', 0)->get() as $parent)
                                            <ul>

                                                <li class="dropdown-header"
                                                    data-lien="{{ route('produits', ['categorie' => $parent->id]) }}">
                                                    <img src="{{ $parent->image ? $parent->image->url() : '' }}"
                                                        style="background: rgb(255, 255, 255);
width: 40px;
border-radius: 50%;
margin-right: 5px;
padding: 6px;"
                                                        alt="" data-no-retina="" /> {{ $parent->title }}
                                                </li>


                                            </ul>




                                            @if ($loop->index == 3 || $loop->index == 7 || $loop->index == 17)
                                    </li>
                                    <!-- end sub menu column -->
                                    <!-- start sub menu column -->
                                    <li class="mega-menu-column col-lg-4">
                                        <!-- start sub menu item  -->
                                        @endif
                                        @endforeach

                                    </li>

                                </ul>










                            </div>
                        </li>








                        <!-- end menu item -->
                        <li class="dropdown simple-dropdown"><a href="{{ route('marquesautoplus') }}">Marque
                                Autoplus</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown"
                                aria-hidden="true"></i>
                            <!-- start sub menu -->
                            <ul class="dropdown-menu" role="menu">

                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"
                                        href="{{ route('marquesautoplus.filtration') }}">Filtration</a>
                                </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"
                                        href="{{ route('marquesautoplus.freinage') }}">Freinage</a>
                                </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"
                                        href="{{ route('marquesautoplus.amort') }}">Amort./Susp./Direc.</a>
                                </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"
                                        href="{{ route('marquesautoplus.lubrif') }}">Lubrifiant & Fluide</a>
                                </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"
                                        href="{{ route('marquesautoplus.demarrage') }}">Démarrage électrique</a>
                                </li>
                            </ul>
                        </li>






                        <!-- end menu item -->
                        <li class="dropdown simple-dropdown"><a href="{{ route('services') }}">Services</a><i
                                class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown"
                                aria-hidden="true"></i>
                            <!-- start sub menu -->
                            <ul class="dropdown-menu" role="menu">

                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"
                                        href="{{ route('services.presence') }}">Présence Terrain</a>
                                </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"
                                        href="{{ route('services.livraison') }}">Livraison express</a>
                                </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"
                                        href="{{ route('services.business') }}">Accompagnement business</a>
                                </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"
                                        href="{{ route('services.technique') }}">Accompagnement technique </a>
                                </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"
                                        href="{{ route('services.evenements') }}">Evènements </a>
                                </li>
                            </ul>
                        </li>



                        <!-- start menu item -->
                        <li class="dropdown megamenu-fw">
                            <a href="{{ route('home') }}/varta">VARTA®</a><i class="fas  dropdown-toggle"
                                data-toggle="dropdown" aria-hidden="true"></i>
                        </li>

                        <!-- start menu item -->
                        <li class="dropdown megamenu-fw">
                            <a href="https://app.autoplusgroup.ma/sign-in" target="_blank">My-autoplus</a><i
                                class="fas  dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                        </li>


                        <!-- start menu item -->
                        <li class="dropdown megamenu-fw">
                            <a href="{{ route('media') }}">Media</a><i class="fas  dropdown-toggle"
                                data-toggle="dropdown" aria-hidden="true"></i>
                        </li>
                        <!-- end menu item -->
                        <!-- start menu item -->
                        <li class="dropdown megamenu-fw">
                            <a href="{{ route('contact') }}">Contact</a><i class="fas  dropdown-toggle"
                                data-toggle="dropdown" aria-hidden="true"></i>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-auto pr-lg-0">
                <div class="header-searchbar">
                    <a href="#search-header" class="header-search-form"><i
                            class="fas fa-search search-button"></i></a>
                    <!-- search input-->
                    <form id="search-header" method="post"
                        action="http://www.themezaa.com/html/pofo/search-result.html" name="search-header"
                        class="mfp-hide search-form-result">
                        <div class="search-form position-relative">
                            <button type="submit" class="fas fa-search close-search search-button"></button>
                            <input type="text" name="search" class="search-input"
                                placeholder="Vous cherchez ..." autocomplete="off">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->
    <!-- end navigation -->
</header>
