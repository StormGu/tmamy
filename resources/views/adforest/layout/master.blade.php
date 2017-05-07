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
    <link rel="icon" href="{{ asset('adforest/images/favicon.ico') }}" type="image/x-icon"/>
    <!-- =-=-=-=-=-=-= Mobile Specific =-=-=-=-=-=-= -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- =-=-=-=-=-=-= Bootstrap CSS Style =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="{{ asset('adforest/css/bootstrap.css') }}">
    <!-- =-=-=-=-=-=-= Template CSS Style =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="{{ asset('adforest/css/style.css') }}">
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
    <!-- =-=-=-=-=-=-= Check boxes =-=-=-=-=-=-= -->
    <link href="{{ asset('adforest/skins/minimal/minimal.css') }}" rel="stylesheet">
    <!-- =-=-=-=-=-=-= Responsive Media =-=-=-=-=-=-= -->
    <link href="{{ asset('adforest/css/responsive-media.css') }}" rel="stylesheet">
    <!-- =-=-=-=-=-=-= Template Color =-=-=-=-=-=-= -->
    <link rel="stylesheet" id="color" href="{{ asset('adforest/css/colors/defualt.css') }}">
    <!-- =-=-=-=-=-=-= For Style Switcher =-=-=-=-=-=-= -->
    <link rel="stylesheet" id="theme-color" type="text/css" href="{{ asset('adforest/css/colors/sea-green.css') }}"/>
    <!-- JavaScripts -->
    <script src="{{ asset('adforest//modernizr.js') }}"></script>
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
<body>
<!-- =-=-=-=-=-=-= Light Header =-=-=-=-=-=-= -->
<div class="colored-header">
    @include('adforest.partials.top')
    @include('adforest.partials.menu')
</div>

<!-- Navigation Menu End -->
@yield('breadcrumbs')

<div class="main-content-area clearfix">

@yield('content')

@include('adforest.partials.footer')

</div>
<!-- Back To Top -->
<a href="#" class="cd-top">Top</a>
<!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
<script src="{{ asset('adforest/js/jquery.min.js') }}"></script>
<!-- Bootstrap Core Css  -->
<script src="{{ asset('adforest/js/bootstrap.min.js') }}"></script>
<!-- Jquery Easing -->
<script src="{{ asset('adforest/js/easing.js') }}"></script>
<!-- Menu Hover  -->
<script src="{{ asset('adforest/js/forest-megamenu.js') }}"></script>
<!-- Jquery Appear Plugin -->
<script src="{{ asset('adforest/js/jquery.appear.min.js') }}"></script>
<!-- Numbers Animation   -->
<script src="{{ asset('adforest/js/jquery.countTo.js') }}"></script>
<!-- Jquery Smooth Scroll  -->
<script src="{{ asset('adforest/js/jquery.smoothscroll.js') }}"></script>
<!-- Jquery Select Options  -->
<script src="{{ asset('adforest/js/select2.min.js') }}"></script>
<!-- noUiSlider -->
<script src="{{ asset('adforest/js/nouislider.all.min.js') }}"></script>
<!-- Carousel Slider  -->
<script src="{{ asset('adforest/js/carousel.min.js') }}"></script>
<script src="{{ asset('adforest/js/slide.js') }}"></script>
<!-- Image Loaded  -->
<script src="{{ asset('adforest/js/imagesloaded.js') }}"></script>
<script src="{{ asset('adforest/js/isotope.min.js') }}"></script>
<!-- CheckBoxes  -->
<script src="{{ asset('adforest/js/icheck.min.js') }}"></script>
<!-- Jquery Migration  -->
<script src="{{ asset('adforest/js/jquery-migrate.min.js') }}"></script>
<!-- Sticky Bar  -->
<script src="{{ asset('adforest/js/theia-sticky-sidebar.js') }}"></script>
<!-- Style Switcher -->
<script src="{{ asset('adforest/js/color-switcher.js') }}"></script>
<!-- Template Core JS -->


<script src="{{ asset('adforest/js/ckeditor/ckeditor.js') }}" ></script>
<!-- Ad Tags  -->
<script src="{{ asset('adforest/js/jquery.tagsinput.min.js') }}"></script>
<!-- DROPZONE JS  -->
<script src="{{ asset('adforest/js/dropzone.js') }}" ></script>
<script src="{{ asset('adforest/js/form-dropzone.js') }}" ></script>

<script src="{{ asset('adforest/js/custom.js') }}"></script>
<script type="text/javascript">
    "use strict";

    /*--------- Textarea Ck Editor --------*/
    CKEDITOR.replace( 'editor1' );

    /*--------- Ad Tags --------*/
    $('#tags').tagsInput({
        'width':'100%'
    });

    /*--------- create remove function in dropzone --------*/
    Dropzone.autoDiscover = false;
    var acceptedFileTypes = "image/*"; //dropzone requires this param be a comma separated list
    var fileList = new Array;
    var i = 0;
    $("#dropzone").dropzone({
        addRemoveLinks: true,
        maxFiles: 5, //change limit as per your requirements
        acceptedFiles: '.jpeg,.jpg,.png,.gif',
        dictMaxFilesExceeded: "Maximum upload limit reached",
        acceptedFiles: acceptedFileTypes,
        url: "uploads",
        dictInvalidFileType: "upload only JPG/PNG",
        init: function () {
            // Hack: Add the dropzone class to the element
            $(this.element).addClass("dropzone");
        }
    });
    (jQuery);
</script>
</body>
</html>