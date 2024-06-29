<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from www.themezaa.com/html/pofo/center-navigation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Sep 2020 12:58:19 GMT -->

<head>






    <!-- Google tag (gtag.js)
<script async src="https://www.googletagmanager.com/gtag/js?id=G-V7PVPX2Z7F"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-V7PVPX2Z7F');
</script>
-->


    <!-- title -->
    {{-- <title>@yield('title') AUTOPLUS | Leader du marché des pièces de rechange au Maroc | Entreprise Internationale
        opérant dans le secteur de la pièce de rechange automobile et poids lourds - autoplus.net</title> --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="author" content="ThemeZaa">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- meta -->
    @inject('meta', 'App\Http\Controllers\Admin\SeoController')
    {{ $meta::generateSeo(url()->full()) }}
    @if (!$meta::generateSeo(url()->full()))
     <title>@yield('title') AUTOPLUS | Leader du marché des pièces de rechange au Maroc | Entreprise Internationale
        opérant dans le secteur de la pièce de rechange automobile et poids lourds - autoplus.net</title>   
    @endif
    <!--  -->

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('asset/faviconBlack.png') }}">
    <!-- animation -->
    <link rel="stylesheet" href="{{ asset('asset/css/animate.css') }}" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}" />
    <!-- et line icon -->
    <link rel="stylesheet" href="{{ asset('asset/css/et-line-icons.css') }}" />
    <!-- font-awesome icon -->
    <link rel="stylesheet" href="{{ asset('asset/css/font-awesome.min.css') }}" />
    <!-- themify icon -->
    <link rel="stylesheet" href="{{ asset('asset/css/themify-icons.css') }}">
    <!-- swiper carousel -->
    <link rel="stylesheet" href="{{ asset('asset/css/swiper.min.css') }}">
    <!-- justified gallery  -->
    <link rel="stylesheet" href="{{ asset('asset/css/justified-gallery.min.css') }}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('asset/css/magnific-popup.css') }}" />

    <link rel="stylesheet" href="{{ asset('asset/css/bootsnav.css') }}">
    <!-- style -->
    <link rel="stylesheet" href="{{ asset('asset/css/style2.css?v=70100112') }}" />
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('asset/css/responsive.css?v=21111') }}" />
    <!--[if IE]>
            <script src="{{ asset('asset/js/html5shiv.js') }}"></script>
        <![endif]-->

    <style>
        .swiper-multy-row-container-valeurs .swiper-slide>div {
            min-height: 526px;
        }
    </style>












    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TC8PV939');
    </script>
    <!-- End Google Tag Manager -->

</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TC8PV939" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <!--
    <div class="preload" style="background:#000 url(http://www.themezaa.com/html/pofo/images/homepage-9-parallax-img5.jpg);cursor: none;width: 100%;height: 100%;position: fixed;top: 0;z-index: 100000;">
    <div class="preload_contenu" style="width: 100%;height: 100%;background:url({{ asset('asset/images/logo-bg.png') }}) no-repeat center center;"></div>
    </div>

-->




    @include('front.layouts.header')

    @yield('content')


    @include('front.layouts.footer')



    <!-- start scroll to top -->
    <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
    <!-- end scroll to top  -->
    <!-- javascript libraries -->
    <script type="text/javascript" src="{{ asset('asset/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/bootstrap.bundle.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/skrollr.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/smooth-scroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/jquery.appear.js') }}"></script>
    <!-- menu navigation -->
    <script type="text/javascript" src="{{ asset('asset/js/bootsnav.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/jquery.nav.js') }}"></script>
    <!-- animation -->
    <script type="text/javascript" src="{{ asset('asset/js/wow.min.js') }}"></script>
    <!-- page scroll -->
    <script type="text/javascript" src="{{ asset('asset/js/page-scroll.js') }}"></script>
    <!-- swiper carousel -->
    <script type="text/javascript" src="{{ asset('asset/js/swiper.min.js') }}"></script>
    <!-- counter -->
    <script type="text/javascript" src="{{ asset('asset/js/jquery.count-to.js') }}"></script>
    <!-- parallax -->
    <script type="text/javascript" src="{{ asset('asset/js/jquery.stellar.js') }}"></script>
    <!-- magnific popup -->
    <script type="text/javascript" src="{{ asset('asset/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- portfolio with shorting tab -->
    <script type="text/javascript" src="{{ asset('asset/js/isotope.pkgd.min.js') }}"></script>
    <!-- images loaded -->
    <script type="text/javascript" src="{{ asset('asset/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- pull menu -->
    <script type="text/javascript" src="{{ asset('asset/js/classie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/hamburger-menu.js') }}"></script>
    <!-- counter  -->
    <script type="text/javascript" src="{{ asset('asset/js/counter.js') }}"></script>
    <!-- fit video  -->
    <script type="text/javascript" src="{{ asset('asset/js/jquery.fitvids.js') }}"></script>
    <!-- skill bars  -->
    <script type="text/javascript" src="{{ asset('asset/js/skill.bars.jquery.js') }}"></script>
    <!-- justified gallery  -->
    <script type="text/javascript" src="{{ asset('asset/js/justified-gallery.min.js') }}"></script>
    <!--pie chart-->
    <script type="text/javascript" src="{{ asset('asset/js/jquery.easypiechart.min.js') }}"></script>
    <!-- retina -->
    <script type="text/javascript" src="{{ asset('asset/js/retina.min.js') }}"></script>


    <script type="text/javascript" src="{{ asset('asset/js/main.js?v=2213') }}"></script>

    <script type="text/javascript">
        $('#accordion a[href="' + window.location + '"]').parent().addClass('active');
    </script>
</body>

<!-- Mirrored from www.themezaa.com/html/pofo/center-navigation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Sep 2020 12:58:42 GMT -->

</html>
