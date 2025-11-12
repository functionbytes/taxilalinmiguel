<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ setting('meta_title') }}</title>
    <meta name="description" content="{{ setting('meta_description') }}">
    <meta name="keywords" content="{{ setting('meta_keywords') }}">
    <meta name="google-site-verification" content="+nxGUDJ4QpAZ5l9Bsjdi102tLVC21AIh5d1Nl23908vVuFHs34=" />
    <meta name="image" content="{{ getMeta() }}" />
    <meta name="robots" content="index,follow">
    <meta name="rating" content="RTA-5042-1996-1400-1577-RTA" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="{{ setting('meta_title') }}">
    <meta name="twitter:description" content="{{ setting('meta_description') }}">
    <meta name="twitter:creator" content="@author_handle">
    <meta name="twitter:image" content="{{ getMeta() }}">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ setting('meta_title') }}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{  url()->current() }}" />
    <meta property="og:image" content="{{ getMeta() }}" />
    <meta property="og:description" content="{{ setting('meta_description') }}" />
    <meta property="og:site_name" content="{{ setting('meta_title') }}" />

    {!! SEOMeta::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}
    {!! JsonLdMulti::generate() !!}
    {!! SEO::generate() !!}
    {!! SEO::generate(true) !!}
    <link rel="icon" href="{{ getFavicon() }}" type="image/x-icon">

    {!! app('seotools')->generate() !!}

    @yield('head')

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@100;200;300;400;500;600;700;800;900;1000&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">


    @stack('css')

    <link rel="stylesheet" href="{{ url('pages/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('pages/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('pages/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('pages/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('pages/css/dripicons.css') }}">
    <link rel="stylesheet" href="{{ url('pages/css/slick.css') }}">
    <link rel="stylesheet" href="{{ url('pages/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ url('pages/css/default.css') }}">
    <link rel="stylesheet" href="{{ url('pages/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('pages/css/responsive.css') }}">


</head>

<body>

    @include ('pages.includes.header')

    <div class="offcanvas-menu">
        <span class="menu-close"><i class="fas fa-times"></i></span>
        <form role="search" method="get" id="searchform"   class="searchform" action="http://wordpress.zcube.in/xconsulta/">
           <input type="text" name="s" id="search" placeholder="Search"/>
           <button><i class="fa fa-search"></i></button>
        </form>
        <div id="cssmenu3" class="menu-one-page-menu-container">
           <ul  class="menu">
              <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="index.html">Home</a></li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="about.html">About Us</a></li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom"> <a href="service.html">Our Taxi</a></li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="pricing.html">Pricing </a></li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="team.html">Our Drivers</a></li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="projects.html">Gallery</a></li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="blog.html">Blog</a></li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="contact.html">Contact</a></li>
           </ul>
        </div>
        <div id="cssmenu2" class="menu-one-page-menu-container">
           <ul id="menu-one-page-menu-12" class="menu">
              <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#home"><span>+8 12 3456897</span></a></li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#howitwork"><span>info@example.com</span></a></li>
           </ul>
        </div>
     </div>
     <div class="offcanvas-overly"></div>


        <main>

            @yield('content')

        </main>

        @include ('pages.includes.footer')

        @include ('pages.includes.socials')


        <script src="{{ url('pages/js/vendor/modernizr-3.5.0.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('pages/js/vendor/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('pages/js/popper.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('pages/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('pages/js/slick.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('pages/js/ajax-form.js') }}" type="text/javascript"></script>
        <script src="{{ url('pages/js/paroller.js') }}" type="text/javascript"></script>
        <script src="{{ url('pages/js/wow.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('pages/js/js_isotope.pkgd.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('pages/js/imagesloaded.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('pages/js/parallax.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('pages/js/jquery.waypoints.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('pages/js/jquery.counterup.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('pages/js/jquery.scrollUp.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('pages/js/jquery.meanmenu.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('pages/js/parallax-scroll.js') }}" type="text/javascript"></script>
        <script src="{{ url('pages/js/jquery.magnific-popup.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('pages/js/element-in-view.js') }}" type="text/javascript"></script>
        <script src="{{ url('pages/js/main.js') }}" type="text/javascript"></script>

    @stack('javascripts')


    @if(setting('google_analytics_enable') == 'true' )
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ setting('google_analytics') }}"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', '{{ setting('google_analytics') }}');
        </script>
    @endif

    @if(setting('fb_pixel_enable') == 'true' )
        <!-- Meta Pixel Code -->
        <script>
                !function(f,b,e,v,n,t,s)
                {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                    n.queue=[];t=b.createElement(e);t.async=!0;
                    t.src=v;s=b.getElementsByTagName(e)[0];
                    s.parentNode.insertBefore(t,s)}(window, document,'script',
                    'https://connect.facebook.net/en_US/fbevents.js');
                fbq('init', '{{setting('fb_pixel_enable')}}');
                fbq('track', 'PageView');
            </script>

            <noscript><img height="1" width="1" style="display:none"
                        src="https://www.facebook.com/tr?id={{setting('fb_pixel_enable')}}&ev=PageView&noscript=1"
                /></noscript>
            <!-- End Meta Pixel Code -->
        @endif



    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    @stack('scripts')

</body>

</html>
