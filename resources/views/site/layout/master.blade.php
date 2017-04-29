<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]>
<html lang="en" class="ie6"><![endif]-->
<!--[if IE 7 ]>
<html lang="en" class="ie7"><![endif]-->
<!--[if IE 8 ]>
<html lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@if (trim($__env->yieldContent('template_title'))) @yield('template_title')
        | @endif {{ config('app.name', Lang::get('titles.app')) }}</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <!-- Favicon ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('site/img/favicon.ico') }}">
    <!-- CSS  -->

    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('site/css/bootstrap.min.css') }}">

    <!-- owl.carousel CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('site/css/owl.carousel.css') }}">

    <!-- owl.theme CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('site/css/owl.theme.css') }}">

    <!-- owl.transitions CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('site/css/owl.transitions.css') }}">

    <!-- font-awesome.min CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('site/css/font-awesome.min.css') }}">

    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('site/css/animate.css') }}">

    <!-- nivo slider CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('site/lib/nivo-slider/css/nivo-slider.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('site/lib/nivo-slider/css/preview.css') }}" type="text/css" media="screen"/>

    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('site/css/normalize.css') }}">

    <!-- main CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('site/css/main.css') }}">

    <!-- UI CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('site/css/jquery-ui.css') }}">

    <!-- BX Slider CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('site/css/jquery.bxslider.css') }}">

    <!-- Meanmenu CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('site/css/meanmenu.min.css') }}">

    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('site/tmamy-style.css') }}">

    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('site/css/responsive.css') }}">

    <script src="{{ asset('site/js/vendor/modernizr-2.8.3.min.js') }}"></script>

    {{-- Scripts --}}
    <script>
        window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
    </script>
</head>
<body class="home-four">
<!--Header Top Area Start-->
@include('site.partials.top')

<!--End of Header Top Area-->
<!--Header Area Start-->
@include('site.partials.header')

<!--End of Header Area-->
@include('site.partials.menu')

@yield('content')

@include('site.partials.footer')

<!-- jquery-1.11.3.min js
============================================ -->
<script src="{{ asset('site/js/vendor/jquery-1.11.3.min.js') }}"></script>

<!-- bootstrap js
============================================ -->
<script src="{{ asset('site/js/bootstrap.min.js') }}"></script>

<!-- owl.carousel.min js
============================================ -->
<script src="{{asset('site/js/owl.carousel.min.js') }}"></script>

<!-- nivo slider js
============================================ -->
<script src="{{asset('site/lib/nivo-slider/js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
<script src="{{asset('site/lib/nivo-slider/home.js') }}" type="text/javascript"></script>

<!-- wow js
============================================ -->
<script src="{{asset('site/js/wow.js') }}"></script>
<script>
    new WOW().init();
</script>

<!-- Price Slider js
============================================ -->
<script src="{{asset('site/js/price-slider.js') }}"></script>

<!-- BX Slider js
============================================ -->
<script src="{{asset('site/js/jquery.bxslider.min.js') }}"></script>

<!--Countdown js-->
<script src="{{asset('site/js/jquery.countdown.min.js') }}"></script>

<!-- Scroll Up js
============================================ -->
<script src="{{asset('site/js/jquery.scrollUp.min.js') }}"></script>

<!-- Elevate Zoom js
============================================ -->
<script src="{{asset('site/js/jquery.elevatezoom.js') }}"></script>

<!-- Meanmenu js
============================================ -->
<script src="{{asset('site/js/meanmenu.js') }}"></script>

<!-- plugins js
============================================ -->
<script src="{{asset('site/js/plugins.js') }}"></script>
<!-- main js
============================================ -->
<script src="{{asset('site/js/main.js') }}"></script>

@yield('footer_scripts')
</body>
</html>