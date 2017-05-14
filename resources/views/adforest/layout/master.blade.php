<!DOCTYPE html>
<html lang="en">
<head>

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @if (trim($__env->yieldContent('template_title')))
            @yield('template_title') |
        @endif
        {{ config('app.name', Lang::get('titles.app')) }}
    </title>

    <meta name="description" content="">
    <meta name="author" content="ScriptsBundle">

    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->

    <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
    <link rel="icon" href="{{ asset('adforest/images/') }}" type="image/x-icon"/>
    <!-- =-=-=-=-=-=-= Mobile Specific =-=-=-=-=-=-= -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    @if ($current_locale->direction == 'rtl')
    <!-- =-=-=-=-=-=-= Bootstrap CSS Style =-=-=-=-=-=-= -->
        <link rel="stylesheet" href="{{ asset('adforest/rtl_css/bootstrap.css') }}">
        <!-- =-=-=-=-=-=-= Template CSS Style =-=-=-=-=-=-= -->
        {{--        <link rel="stylesheet" href="{{ asset('adforest/rtl_css/style.css') }}">--}}
    <!-- =-=-=-=-=-=-= Font Awesome =-=-=-=-=-=-= -->
        <link rel="stylesheet" href="{{ asset('adforest/rtl_css/font-awesome.css') }}" type="text/css">
        <!-- =-=-=-=-=-=-= Flat Icon =-=-=-=-=-=-= -->
        <link href="{{ asset('adforest/rtl_css/flaticon.css') }}" rel="stylesheet">
        <!-- =-=-=-=-=-=-= Et Line Fonts =-=-=-=-=-=-= -->
        <link rel="stylesheet" href="{{ asset('adforest/rtl_css/et-line-fonts.css') }}" type="text/css">
        <!-- =-=-=-=-=-=-= Menu Drop Down =-=-=-=-=-=-= -->
        <link rel="stylesheet" href="{{ asset('adforest/rtl_css/forest-menu.css') }}" type="text/css">
        <!-- =-=-=-=-=-=-= Animation =-=-=-=-=-=-= -->
        <link rel="stylesheet" href="{{ asset('adforest/rtl_css/animate.min.css') }}" type="text/css">
        <!-- =-=-=-=-=-=-= Select Options =-=-=-=-=-=-= -->
        <link href="{{ asset('adforest/rtl_css/select2.min.css') }}" rel="stylesheet"/>
        <!-- =-=-=-=-=-=-= noUiSlider =-=-=-=-=-=-= -->
        <link href="{{ asset('adforest/rtl_css/nouislider.min.css') }}" rel="stylesheet">

        <!-- =-=-=-=-=-=-= Bootstrap Rtl Style =-=-=-=-=-=-= -->
        <link href="{{ asset('adforest/rtl_css/bootstrap-rtl.css') }}" rel="stylesheet">
        <!-- =-=-=-=-=-=-= Listing Slider =-=-=-=-=-=-= -->
        <link href="{{ asset('adforest/rtl_css/slider.css') }}" rel="stylesheet">
        <!-- =-=-=-=-=-=-= Owl carousel =-=-=-=-=-=-= -->
        <link rel="stylesheet" type="text/css" href="{{ asset('adforest/rtl_css/owl.carousel.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('adforest/rtl_css/owl.theme.css') }}">
<<<<<<< HEAD
        <link href="{{ asset('adforest/rtl_css/owl.transitions.css') }}" rel="stylesheet" >
=======
        <link href="{{ asset('adforest/rtl_css/owl.transitions.css') }}" rel="stylesheet" > 
>>>>>>> 9ca43e414967080d81bb05b53df7750318db4269
        <!-- =-=-=-=-=-=-= Check boxes =-=-=-=-=-=-= -->
        <link href="{{ asset('adforest/skins/minimal/minimal.css') }}" rel="stylesheet">
        <!-- =-=-=-=-=-=-= Responsive Media =-=-=-=-=-=-= -->
        <link href="{{ asset('adforest/rtl_css/responsive-media.css') }}" rel="stylesheet">
        <!-- =-=-=-=-=-=-= Template Color =-=-=-=-=-=-= -->
        <link rel="stylesheet" id="color" href="{{ asset('adforest/rtl_css/colors/defualt.css') }}">
    @else
    <!-- =-=-=-=-=-=-= Bootstrap CSS Style =-=-=-=-=-=-= -->
        <link rel="stylesheet" href="{{ asset('adforest/css/bootstrap.css') }}">
        <!-- =-=-=-=-=-=-= Template CSS Style =-=-=-=-=-=-= -->
        {{--<link rel="stylesheet" href="{{ asset('adforest/css/style.css') }}">--}}
    <!-- =-=-=-=-=-=-= Font Awesome =-=-=-=-=-=-= -->
        <link rel="stylesheet" href="{{ asset('adforest/css/font-awesome.css') }}" type="text/css">
        <!-- =-=-=-=-=-=-= Flat Icon =-=-=-=-=-=-= -->
        <link href="{{ asset('adforest/css/flaticon.css') }}" rel="stylesheet">
        <!-- =-=-=-=-=-=-= Et Line Fonts =-=-=-=-=-=-= -->
        <link rel="stylesheet" href="{{ asset('adforest/css/et-line-fonts.css') }}" type="text/css">
        <!-- =-=-=-=-=-=-= Menu Drop Down =-=-=-=-=-=-= -->
        <link rel="stylesheet" href="{{ asset('adforest/css/forest-menu.css') }}" type="text/css">
        <!-- =-=-=-=-=-=-= Animation =-=-=-=-=-=-= -->
        <link rel="stylesheet" href="{{ asset('adforest/css/animate.min.css') }}" type="text/css">
        <!-- =-=-=-=-=-=-= Select Options =-=-=-=-=-=-= -->
        <link href="{{ asset('adforest/css/select2.min.css') }}" rel="stylesheet"/>
        <!-- =-=-=-=-=-=-= noUiSlider =-=-=-=-=-=-= -->
        <link href="{{ asset('adforest/css/nouislider.min.css') }}" rel="stylesheet">
        <!-- =-=-=-=-=-=-= Listing Slider =-=-=-=-=-=-= -->
        <link href="{{ asset('adforest/css/slider.css') }}" rel="stylesheet">
        <!-- =-=-=-=-=-=-= Owl carousel =-=-=-=-=-=-= -->
        <link rel="stylesheet" type="text/css" href="{{ asset('adforest/css/owl.carousel.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('adforest/css/owl.theme.css') }}">
<<<<<<< HEAD
        <link href="{{ asset('adforest/css/owl.transitions.css') }}" rel="stylesheet" >
=======
        <link href="{{ asset('adforest/css/owl.transitions.css') }}" rel="stylesheet" > 
>>>>>>> 9ca43e414967080d81bb05b53df7750318db4269
        <!-- =-=-=-=-=-=-= Check boxes =-=-=-=-=-=-= -->
        <link href="{{ asset('adforest/skins/minimal/minimal.css') }}" rel="stylesheet">
        <!-- =-=-=-=-=-=-= Responsive Media =-=-=-=-=-=-= -->
        <link href="{{ asset('adforest/css/responsive-media.css') }}" rel="stylesheet">
        <!-- =-=-=-=-=-=-= Template Color =-=-=-=-=-=-= -->

    @endif

    <link href="{{ asset('adforest/lib/nivo-slider/css/nivo-slider.css') }}" rel="stylesheet" >
    <link href="{{ asset('adforest/lib/nivo-slider/css/preview.css') }}" rel="stylesheet" >
    <link href="{{ asset('adforest/css/tmamy-style.css') }}" rel="stylesheet" >
    <link href="{{ asset('adforest/css/style.css') }}" rel="stylesheet" >
<<<<<<< HEAD
    <link rel="stylesheet" id="color" href="{{ asset('adforest/css/colors/defualt.css') }}">
    <link href="{{ asset('adforest/css/responsive.css') }}" rel="stylesheet" >
    <link href=" {{ asset('adforest/css/mystyle.css') }}" rel="stylesheet" >
=======
<link rel="stylesheet" id="color" href="{{ asset('adforest/css/colors/defualt.css') }}">
<link href="{{ asset('adforest/css/responsive.css') }}" rel="stylesheet" >
<link href=" {{ asset('adforest/css/mystyle.css') }}" rel="stylesheet" >
>>>>>>> 9ca43e414967080d81bb05b53df7750318db4269
    <!-- =-=-=-=-=-=-= For Style Switcher =-=-=-=-=-=-= -->

    <!-- JavaScripts -->
    <script src="{{ asset('adforest/js/modernizr.js') }}"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
    <![endif]-->

    @yield('custom_css')

    {{-- Scripts --}}
    <script>
        window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
    </script>
</head>
<body class="home-four @if ($current_locale->direction == 'rtl')  rtl @endif">

<!-- =-=-=-=-=-=-= Light Header =-=-=-=-=-=-= -->
@include('adforest.partials.top')
@include('adforest.partials.menu')

<!-- Navigation Menu End -->
@yield('breadcrumbs')

@yield('content')


@include('adforest.partials.footer')




<!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
<script src="{{ asset('adforest/tmamy/js/vendor/jquery-1.11.3.min.js')  }}"></script>
<!-- bootstrap js
============================================ -->
<script src="{{ asset('adforest/tmamy/js/bootstrap.min.js')  }}"></script>
<!-- owl.carousel.min js
============================================ -->
<script src="{{ asset('adforest/tmamy/js/owl.carousel.min.js')  }}"></script>
<!-- nivo slider js
============================================ -->
<script src="{{ asset('adforest/tmamy/lib/nivo-slider/js/jquery.nivo.slider.js')  }}" type="text/javascript"></script>
<script src="{{ asset('adforest/tmamy/lib/nivo-slider/home.js')  }}" type="text/javascript"></script>
<!-- wow js
============================================ -->
<script src="{{ asset('adforest/tmamy/js/wow.js')  }}"></script>
<script>
    new WOW().init();
</script>
<!-- Price Slider js
============================================ -->
<script src="{{ asset('adforest/tmamy/js/price-slider.js')  }}"></script>
<!-- BX Slider js
============================================ -->
<script src="{{ asset('adforest/tmamy/js/jquery.bxslider.min.js')  }}"></script>
<!--Countdown js-->
<script src="{{ asset('adforest/tmamy/js/jquery.countdown.min.js')  }}"></script>
<!-- Scroll Up js
============================================ -->
<script src="{{ asset('adforest/tmamy/js/jquery.scrollUp.min.js')  }}"></script>
<!-- Elevate Zoom js
============================================ -->
<script src="{{ asset('adforest/tmamy/js/jquery.elevatezoom.js')  }}"></script>
<!-- Meanmenu js
============================================ -->
<script src="{{ asset('adforest/tmamy/js/meanmenu.js') }}"></script>
<!-- plugins js
============================================ -->
<script src="{{ asset('adforest/tmamy/js/plugins.js') }}"></script>
<!-- main js
============================================ -->
<script src="{{ asset('adforest/tmamy/js/main.js') }}"></script>

<script type="text/javascript">
    function fetch_select(val)
    {
        $.ajax({
            type: 'post',
            url: ' areaget.php',
            data: {
                get_option:val
            },
            success: function (response) {
                document.getElementById("new_select").innerHTML=response;
            }
        });
    }
    function fetch_select1(val)
    {
        $.ajax({
            type: 'post',
            url: ' areaget1.php',
            data: {
                get_option:val
            },
            success: function (response) {
                document.getElementById("new_select1").innerHTML=response;
            }
        });
    }
</script>
<script type="text/javascript">
    $(document).ready(function(){
    });
</script>
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;
    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight){
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        }
    }
</script>
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
    $(document).ready(function()
    {
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
            if($(this).is('.inactive-header')) {
                $('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
                $(this).toggleClass('active-header').toggleClass('inactive-header');
                $(this).next().slideToggle().toggleClass('open-content');
            }

            else {
                $(this).toggleClass('active-header').toggleClass('inactive-header');
                $(this).next().slideToggle().toggleClass('open-content');
            }
        });
        $('.n-a-btn .fa-shopping-cart').parent().on('click', function(){
            var href = $(this).attr('href');
            window.location = href;
        })

        return false;
    });
</script>

@yield('custom_js')
</body>
</html>