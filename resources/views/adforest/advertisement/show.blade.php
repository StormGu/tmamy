@extends('adforest.layout.master')

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

                        <div class="ad-share text-center">
                            <div class="ad-box col-md-4 col-sm-4 col-xs-12">
                                <i class="fa fa-share-alt"></i>
                                <span class="hidetext">@lang('advertisement.Share')</span>
                            </div>
                            <a class="ad-box col-md-4 col-sm-4 col-xs-12" href="#">
                                <i class="fa fa-star active"></i>
                                <span class="hidetext">@lang('advertisement.add')</span>
                            </a>
                            <div class="ad-box col-md-4 col-sm-4 col-xs-12">
                                <i class="fa fa-warning"></i>
                                <span class="hidetext">@lang('advertisement.Report')</span>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="ad-box">
                            <div class="short-features">
                                <div class="heading-panel">
                                    <h3 class="main-title text-left">
                                        @lang('advertisement.properties')
                                    </h3>
                                </div>
                                
                                <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                    <span><strong></strong> :</span>
                                </div>

                            </div>
                            <!-- Short Features  -->
                            <h3 class="main-title text-left">
                                @lang('advertisement.features')
                            </h3>
                            <div class="desc-points">
                                <ul>
                                    @foreach($features as $feature)
                                        <li>{{ $feature->name }}</li>
                                    @endforeach
                                </ul>
                            </div>

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
                            <h3>{{ $object->customer->name }}</h3>
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