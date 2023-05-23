<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime()
                , event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0]
                , j = d.createElement(s)
                , dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-K3BRW7Z');

    </script>
    <!-- End Google Tag Manager -->
    <meta name="facebook-domain-verification" content="owj64iga8tqec25a3supmsp3boib2z" />

    <meta name="google-site-verification" content="" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>NTA | Nationally Recognised Training Courses in Australia</title>




    <link rel="icon" href="{{ asset('assets/images/logo/favicon.png') }}">

    <link rel="preload" href="{{asset('assets/fonts/museo_slab_0-webfont.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('assets/fonts/museo_slab_0-webfont.woff')}}" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="{{asset('assets/fonts/museo_slab_1-webfont.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('assets/fonts/museo_slab_1-webfont.woff')}}" as="font" type="font/woff" crossorigin>

    <link rel="canonical" href="{{ URL::current() }}" />

    @stack('styles')
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
    <meta name="title" content="Recognition of Prior Learning (RPL) Certificate in Sydney, Melbourne, Brisbane, Perth, Bankstown, NSW, Australia" />
    @stack('seo')
    {{-- Open Graph --}}
    <meta property="og:title" content="@yield('title') - NTA">
    <meta property="og:site_name" content="Noble Training Academy - NTA">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ URL::current() }}">
    @stack('og')
    {{-- Open Graph --}}

    <meta property="article:section" content="Noble Training Academy">
    <meta property="article:section" content="about us">
    <meta property="article:section" content="diploma in beauty therapy">
    <meta property="article:section" content="diploma in remedial massage">
    <meta property="article:section" content="certificate iii in hairdressing">
    <meta property="article:section" content="certificate iv in beauty therapy">

    <meta name="ahrefs-site-verification" content="c6df018699d9864e4f9c1521bf9ee15e4f9385ca41191ae25fe13bc86a28c0ec">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZFG86J3Y2L"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-ZFG86J3Y2L');

    </script>


    @include('partials.styles')
    @livewireStyles
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script'
            , 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '573305264193638');
        fbq('track', 'PageView');

    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=573305264193638&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
    <style>
        @media screen and (max-width: 767px) {
            #menu_bars {
                margin-right: 55px !important;
            }

            nav {}


            .course-dropdown-menu {
                margin-left: -47px !important;

            }

            .course-dropdown {
                margin-left: -44px !important;

            }

            .course_image {
                height: 14rem !important;

            }

        }

    </style>
</head>

<body class="pushmenu-push">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K3BRW7Z" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
    <!--Loader-->
    <div class="loader">
        <div class="bouncybox">
            <div class="bouncy"></div>
        </div>
    </div>
    @auth
    <div class="d-flex justify-content-center bg-light">
        <a href="{{ route('admin.home') }}"><i class="fa fa-pencil-square"></i> Back to dashboard!</a>
    </div>
    @endauth
    @if (Route::currentRouteName() == 'home')
    @include('components.header')

    {{-- @include('components.navBar') --}}
    @else
    @include('components.navBar')
    @endif

    <!--<div id="app">-->
    <!--</div>-->
    @yield('content')

    @include('components.rpl-modal')
    @include('components.footer')

    <script src="{{ asset('js/app.js') }}"></script>
    @include('partials.scripts')
    @livewireScripts
    @include('components.applyNow')

    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css"> --}}

    <script>
        /*var botmanWidget = {

            introMessage: 'Hi, from testing ',
            aboutText: 'Testing by Ahsan'

        };*/

    </script>
    {{-- <script id="botmanWidget" src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/chat.js'></script> --}}
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

</body>

</html>

