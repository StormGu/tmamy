<!DOCTYPE html>
<html lang="en">

<head>

    <title>
        @if (trim($__env->yieldContent('template_title')))
            @yield('template_title') |
        @endif
        {{ config('app.name', Lang::get('titles.app')) }}
    </title>

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="{{ asset('adforest/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('adforest/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('adforest/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('adforest/css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('adforest/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('adforest/css/animate.css') }}" rel="stylesheet">

    <link href="{{ asset('adforest/lib/nivo-slider/css/nivo-slider.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('adforest/lib/nivo-slider/css/preview.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('adforest/css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('adforest/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('adforest/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('adforest/css/jquery.bxslider.css') }}" rel="stylesheet">
    <link href="{{ asset('adforest/css/meanmenu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adforest/css/color15.css') }}" rel="stylesheet">

    <link href="{{ asset('adforest/css/tmamy-style.css') }}" rel="stylesheet">
    <link href="{{ asset('adforest/css/style.css') }}" id="color" rel="stylesheet">
    <link href="{{ asset('adforest/css/defualt.css') }}" id="color" rel="stylesheet">
    <link href="{{ asset('adforest/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('adforest/css/mystyle.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    @yield('custom_css')

    {{-- Scripts --}}
    <script>
        window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
    </script>
</head>

<body class="home-four">

@include('adforest.partials.top')
@include('adforest.partials.menu')

@yield('breadcrumbs')

@yield('content')

@include('adforest.partials.footer')


<script src="{{ asset('adforest/js/vendor/modernizr-2.8.3.min.js') }}"></script>
<script src="{{ asset('adforest/js/vendor/jquery-1.11.3.min.js') }}"></script>
<script src="{{ asset('adforest/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('adforest/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('adforest/lib/nivo-slider/js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
<script src="{{ asset('adforest/lib/nivo-slider/home.js') }}" type="text/javascript"></script>
<script src="{{ asset('adforest/js/wow.js')  }}"></script>
<script>
    new WOW().init();
</script>
<script src="{{ asset('adforest/js/price-slider.js')  }}"></script>
<script src="{{ asset('adforest/js/jquery.bxslider.min.js')  }}"></script>
<script src="{{ asset('adforest/js/jquery.countdown.min.js')  }}"></script>
<script src="{{ asset('adforest/js/jquery.scrollUp.min.js')  }}"></script>
<script src="{{ asset('adforest/js/jquery.elevatezoom.js')  }}"></script>
<script src="{{ asset('adforest/js/meanmenu.js') }}"></script>
<script src="{{ asset('adforest/js/plugins.js') }}"></script>
<script src="{{ asset('adforest/js/main.js') }}"></script>

<script>
    $(document).ready(function () {
//Initialize tooltips
        $('.nav-tabs > li a[title]').tooltip();

//Wizard
        $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

            var $target = $(e.target);

            if ($target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $(".next-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
            nextTab($active);

        });
        $(".prev-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            prevTab($active);

        });
    });

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }
    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }


    //according menu

    $(document).ready(function () {
//Add Inactive Class To All Accordion Headers
        $('.accordion-header').toggleClass('inactive-header');

//Set The Accordion Content Width
        var contentwidth = $('.accordion-header').width();
        $('.accordion-content').css({});

//Open The First Accordion Section When Page Loads
        $('.accordion-header').first().toggleClass('active-header').toggleClass('inactive-header');
        $('.accordion-content').first().slideDown().toggleClass('open-content');

// The Accordion Effect
        $('.accordion-header').click(function () {
            if ($(this).is('.inactive-header')) {
                $('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
                $(this).toggleClass('active-header').toggleClass('inactive-header');
                $(this).next().slideToggle().toggleClass('open-content');
            }

            else {
                $(this).toggleClass('active-header').toggleClass('inactive-header');
                $(this).next().slideToggle().toggleClass('open-content');
            }
        });


        $('.n-a-btn .fa-shopping-cart').parent().on('click', function () {
            var href = $(this).attr('href');
            window.location = href;
        })

        return false;
    });
</script>

</body>
</html>