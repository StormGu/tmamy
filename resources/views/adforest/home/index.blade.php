@extends('adforest.layout.master')

@section('content')
    @include('adforest.home.slider')

    <div class="main-content-area clearfix">
        <section class="section-padding gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        @foreach(\App\Models\Category::parents()->has('advertisements')->pluck('name', 'id') as $category_id => $category_name)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a>{{ $category_name }}</a></h4>
                                </div>
                                <div class="panel-collapse">
                                    <div class="panel-body recent-ads">
                                        <div class="featured-slider-3">
                                            <div class="item">
                                                @foreach (\App\Models\Advertisement::whereCategoryId($category_id)->approved()->get() as $adv)
                                                    <div class="col-md-4 no-padding">

                                                        <div class="category-grid-box">
                                                            <div class="category-grid-img">
                                                                <img class="img-responsive"
                                                                     src="{{ url('image/190×244/' . $adv->image_filename) }}">
                                                                <div class="user-preview">
                                                                    <a href="{{ url('adv/'. $adv->id) }}"> <img
                                                                                src="{{ url('image/200×200/' . $adv->image_filename) }}"
                                                                                class="avatar avatar-small" alt="">
                                                                    </a>
                                                                </div>
                                                                <a href="{{ url('adv/'. $adv->id) }}"
                                                                   class="view-details">View Details</a>
                                                            </div>
                                                            <!-- Ad Img End -->
                                                            <div class="short-description">
                                                                <!-- Ad Category -->
                                                                <div class="category-title"><span><a
                                                                                href="#">Cars</a></span>
                                                                </div>
                                                                <!-- Ad Title -->
                                                                <h3><a title=""
                                                                       href="{{ url('adv/'. $adv->id) }}">{{ $adv->title }}</a>
                                                                </h3>
                                                                <!-- Price -->
                                                                <div class="price">$18,200 <span
                                                                            class="negotiable">(Negotiable)</span></div>
                                                            </div>
                                                            <div class="ad-info">
                                                                <ul>
                                                                    <li><i class="fa fa-map-marker"></i>London</li>
                                                                    <li><i class="fa fa-clock-o"></i> 15 minutes ago
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                    <!-- Middle Content Area  End -->
                    <!-- Left Sidebar -->
                    <div class="col-md-3">
                        <div class="sidebar">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a>Recent Ads</a></h4>
                                    </div>
                                    <div class="panel-collapse">
                                        <div class="panel-body">

                                            <div class="category-grid-box">
                                                <div class="category-grid-img">
                                                    <img class="img-responsive" alt=""
                                                         src="{{ url('image/190×244/' . $adv->image_filename) }}">
                                                    <div class="user-preview">
                                                        <a href="{{ url('adv/'. $adv->id) }}"> <img
                                                                    src="{{ url('image/200×200/' . $adv->image_filename) }}"
                                                                    class="avatar avatar-small" alt="">
                                                        </a>
                                                    </div>
                                                    <a href="{{ url('adv/'. $adv->id) }}" class="view-details">View
                                                        Details</a>
                                                </div>
                                                <!-- Ad Img End -->
                                                <div class="short-description">
                                                    <!-- Ad Category -->
                                                    <div class="category-title"><span><a href="#">Cars</a></span>
                                                    </div>
                                                    <!-- Ad Title -->
                                                    <h3><a title=""
                                                           href="{{ url('adv/'. $adv->id) }}">{{ $adv->title }}</a></h3>
                                                    <!-- Price -->
                                                    <div class="price">$18,200 <span
                                                                class="negotiable">(Negotiable)</span></div>
                                                </div>
                                                <div class="ad-info">
                                                    <ul>
                                                        <li><i class="fa fa-map-marker"></i>London</li>
                                                        <li><i class="fa fa-clock-o"></i> 15 minutes ago</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
        @endsection

        @section('custom_css')
            <link href="{{ asset('adforest/js/masterslider/style/masterslider.css') }}" rel="stylesheet">
            <link href="{{ asset('adforest/js/masterslider/skins/default/style.css') }}" rel="stylesheet">
            <link href="{{ asset('adforest/js/masterslider/style/style.css') }}" rel="stylesheet">
    @endsection

    @section('custom_js')
        <!-- MasterSlider -->
            <script src="{{ asset('adforest/js/masterslider/masterslider.min.js') }}"></script>
            <script type="text/javascript">
                (function ($) {
                    "use strict";
                    var slider = new MasterSlider();

                    // adds Arrows navigation control to the slider.
                    slider.control('arrows');
                    slider.control('timebar', {insertTo: '#masterslider'});
                    slider.control('bullets');

                    slider.setup('masterslider', {
                        width: 1400,    // slider standard width
                        height: 650,   // slider standard height
                        space: 1,
                        layout: 'fullwidth',
                        loop: true,
                        preload: 0,
                        instantStartLayers: true,
                        autoplay: true
                    });
                })(jQuery);
            </script>
@endsection