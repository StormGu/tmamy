@extends('adforest.layout.oldmaster')

@section('content')
    <section class="section-padding error-page pattern-bgs gray ">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12 col-sm-12">
                    <div class="single-ad">
                        <div class="ad-box featured-border">
                            <h1>{{ $object->title }}</h1>
                            <div class="short-history">
                                <ul>
                                    <li>
                                        @lang('advertisement.created_at'):
                                        <b>{{ \Carbon\Carbon::parse($object->created_at)->formatLocalized('%d %B %Y, %H:%M') }}</b>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured-ribbon">
                                <span>@lang('advertisement.Featured')</span>
                            </div>
                        </div>

                        <div class="flexslider single-page-slider">
                            <div class="flex-viewport">
                                <ul class="slides slide-main">
                                    <li class="flex-active-slide"><img
                                                src="{{ url('image/700×400/' . $object->image_filename) }}"/></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Listing Slider Thumb -->
                        <div class="flexslider" id="carousels">
                            <div class="flex-viewport">
                                <ul class="slides slide-thumbnail">
                                    <li class="flex-active-slide">
                                        <img draggable="false"
                                             src="{{ url('image/120×90/' . $object->image_filename) }}">
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="example_parent_element" style="margin:0 auto; width:900px;">

                            <div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style"
                                 style="margin-left:-100px; top:150px;">
                                <a class="a2a_button_facebook"></a>
                                <a class="a2a_button_twitter"></a>
                                <a class="a2a_button_google_plus"></a>
                                <a class="a2a_button_pinterest"></a>
                                <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                            </div>

                            <script async src="https://static.addtoany.com/menu/page.js"></script>

                        </div>

                        <div class="clearfix"></div>


                        <div class="ad-box">

                            @if($features->count())
                                <div class="short-features">
                                    <div class="heading-panel">
                                        <h3 class="main-title text-left">
                                            @lang('advertisement.properties')
                                        </h3>
                                    </div>
                                    @foreach($properties as $property)
                                        <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                            <span><strong>{{ $property->label }}</strong>: {{ $property->pivot->property_value }}</span>
                                        </div>
                                    @endforeach
                                </div>
                        @endif

                        @if($features->count())
                            <!-- Short Features  -->
                                <div class="short-features">
                                    <div class="heading-panel">
                                        <h3 class="main-title text-left">
                                            @lang('advertisement.properties')
                                        </h3>
                                    </div>

                                    <div class="desc-points">
                                        <ul>
                                            @foreach($features as $feature)
                                                <li>{{ $feature->name }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                        @endif

                        <!-- Ad Specifications -->
                            <div class="specification">
                                <!-- Heading Area -->
                                <div class="heading-panel">
                                    <h3 class="main-title text-left">
                                        @lang('advertisement.description')
                                    </h3>
                                </div>
                                <p>
                                    {{ $object->details }}
                                </p>

                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="white-bg user-contact-info margin-bottom-20">
                        <div class="text-center">
                            <img class="image margin-top-40" alt=""
                                 src="@if ($object->customer->profile->avatar_status == 1){{ url($object->customer->profile->avatar) }} @else {{ Gravatar::get($object->customer->email) }} @endif"
                                 alt="{{ $object->customer->name }}" width="100" height="100"/>
                            <br>
                            <br>
                            <a href="{{ url('profile/'.$object->customer->id) }}">{{ $object->customer->name }}</a>
                            <br>
                            <a href="#" class="btn btn-primary btn-sm">@lang('common.follow')</a><br><br>
                            <a href="#" class="btn btn-default btn-sm">@lang('common.message')</a><br><br>
                        </div>
                        <div class="ad-listing-meta">
                            <ul>
                                <li><i class="fa fa-calendar"></i> <span
                                            class="color">{{ \Carbon\Carbon::parse($object->customer->created_at)->formatLocalized('%d %B %Y') }}</span>
                                </li>
                                {{--<li><i class="fa fa-anchor"></i> <span class="color"></span></li>--}}
                                <li><i class="fa fa-mobile"></i> <span
                                            class="color">{{ $object->customer->mobile_no }}</span></li>
                                {{--<li><i class="fa fa-phone"></i> <span class="color">{{ $object->customer->phone_no }}</span></li>--}}
                                <li><i class="fa fa-envelope"></i> <span
                                            class="color">{{ $object->customer->email }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection