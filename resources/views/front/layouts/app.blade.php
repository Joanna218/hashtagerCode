<!DOCTYPE html>

<!-- Add landing-2 to html element -->
<html lang="en" class="landing-2 light-style">
<head>
    <title>{{ $title }}</title>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta property="og:title" content="Hashtag，貼嗑我要辦活動"/>
    <meta property="og:description" content="Hashtag，今天策劃，明天上線" />
    <!-- <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}"> -->
    <meta property="og:type" content="website">
    <meta name="description" content="Hashtag，今天策劃，明天上線">
    <meta name="keywords" content="Hashtag,貼嗑,我要辦活動,建立自己的IG口碑牆">
    <link rel="icon" type="image/png" href="https://hashtager.com.tw/images/favicon.png">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow:300,400,500,600,700" rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="{{ asset('/theme/vendor/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('/theme/vendor/fonts/ionicons.css') }}">
    <link rel="stylesheet" href="{{ asset('/theme/vendor/fonts/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('/theme/vendor/fonts/open-iconic.css') }}">
    <link rel="stylesheet" href="{{ asset('/theme/vendor/fonts/pe-icon-7-stroke.css') }}">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{ asset('theme/vendor/css/rtl/bootstrap.css') }}" class="theme-settings-bootstrap-css">
    <link rel="stylesheet" href="{{ asset('theme/vendor/css/rtl/appwork.css') }}" class="theme-settings-appwork-css">
    <link rel="stylesheet" href="{{ asset('theme/vendor/css/rtl/theme-corporate.css') }}" class="theme-settings-theme-css">
    <link rel="stylesheet" href="{{ asset('theme/vendor/css/rtl/colors.css') }}" class="theme-settings-colors-css">
    <!-- <link rel="stylesheet" href="{{ asset('theme/vendor/css/rtl/uikit.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('theme/vendor/css/uikit.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    </link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    </link>

    <script src="{{ asset('theme/vendor/js/material-ripple.js') }}"></script>
    <script src="{{ asset('theme/vendor/js/layout-helpers.js') }}"></script>

    <!-- Core scripts -->
    <script src="{{ asset('theme/vendor/js/pace.js') }}"></script>
    <script src="{{ asset('theme/vendor/js/uikit.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Libs -->
    <link rel="stylesheet" href="{{ asset('theme/vendor/libs/swiper/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/vendor/libs/plyr/plyr.css') }}">

    <link rel="stylesheet" href="{{ asset(mix('css/front.css')) }}">
    <script>
        window.__letroUgcGadget = window.__letroUgcGadget || {};
        __letroUgcGadget.advertiser_id = 154;
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "https://letro.jp/tags/js/letro.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'letro-jssdk'));
    </script>

    <!-- @yield('styles') -->


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-176393974-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-176393974-1');
    </script>

    <!-- Google Tag Manager -->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-T9PVP25');
    </script>

</head>

<body>
<!-- <div class="page-loader">
    <div class="bg-primary"></div>
</div> -->

@include('front.components.nav')

@yield('content')

@include('front.components.footer')

<!-- Core scripts -->
<!-- Core scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('/theme/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('/theme/vendor/js/bootstrap.js') }}"></script>

<!-- Libs -->
<script src="{{ asset('theme/vendor/libs/swiper/swiper.js') }}"></script>
<script src="{{ asset('theme/vendor/libs/plyr/plyr.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Page -->
<script src="{{ asset(mix('js/front.js')) }}"></script>

@yield('scripts')
<script>
$(".owl-carousel").owlCarousel({
  loop: true, // 循環播放
  margin: 10, // 外距 10px
  autoplay:true,
  autoplayTimeout:6000,
  autoplayHoverPause:true,
  responsive: {
    0: {
      items: 1 // 螢幕大小為 0~600 顯示 1 個項目
    },
    600: {
      items: 1 // 螢幕大小為 600~1000 顯示 3 個項目
    },
    1000: {
      items: 1 // 螢幕大小為 1000 以上 顯示 5 個項目
    }
  }
});
</script>
</body>
<!-- Google Tag Manager (noscript) -->
<noscript>
  <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T9PVP25"
  height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
</html>
