@extends('adforest.layout.oldmaster')



@section('content')

    <section class="section-padding gray">
        <!-- Main Container -->
        @include('adforest.profile.head')
        <div class="container">
            <!-- Row -->
            <div class="row">
                <!-- Middle Content Area -->

                <br>
                <!-- Row -->
                <div class="row">
                    <!-- Middle Content Area -->
                    <div class="col-md-4 leftbar-stick blog-sidebar">
                        <!-- Sidebar Widgets -->
                        <div class="user-profile widget">
                            <div class="widget-heading">
                                <h4 class="panel-title"><a>@lang('profile.sutatus')</a></h4>
                            </div>
                            <ul>
                                <li class="active"><a href="{{ url('profile/ads') }}">@lang('profile.ads_all')</a></li>
                                <li><a href="{{ url('profile/ads/approved') }}">@lang('profile.ads_approved')</a></li>
                                <li><a href="{{ url('profile/ads/blocked') }}">@lang('profile.ads_blocked')</a></li>
                                <li><a href="{{ url('profile/ads/draft') }}">@lang('profile.ads_draft')</a></li>
                                <li><a href="{{ url('profile/ads/expired') }}">@lang('profile.ads_expired')</a></li>
                                <li><a href="{{ url('profile/ads/rejected') }}">@lang('profile.ads_rejected')</a></li>
                                <li><a href="{{ url('profile/ads/waiting_approval') }}">@lang('profile.ads_waiting_approval')</a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-8">
                        <!-- Row -->
                        <div class="row">
                            <!-- Sorting Filters -->
                            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                            </div>
                            <!-- Sorting Filters End-->
                            <div class="clearfix"></div>
                            <!-- Ads Archive -->
                            <div class="posts-masonry">
                                <div class="col-md-12 col-xs-12 col-sm-12 user-archives">
                                    <!-- Ads Listing -->
                                    <div class="ads-list-archive">
                                        <!-- Image Block -->
                                        <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                            <!-- Img Block -->
                                            <div class="ad-archive-img">
                                                <a href="#">
                                                    <div class="ribbon expired">Expired</div>
                                                    <img src="{{ asset('adforest/images/posting/2.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <!-- Img Block -->
                                        </div>
                                        <!-- Ads Listing -->
                                        <div class="clearfix visible-xs-block"></div>
                                        <!-- Content Block -->
                                        <div class="col-lg-7 col-md-7 col-sm-7 no-padding">
                                            <!-- Ad Desc -->
                                            <div class="ad-archive-desc">
                                                <!-- Price -->
                                                <div class="ad-price">$500</div>
                                                <!-- Title -->
                                                <h3>Honda Civic 2017 Sports Edition</h3>
                                                <!-- Category -->
                                                <div class="category-title"><span><a href="#">Car & Bikes</a></span>
                                                </div>
                                                <!-- Short Description -->
                                                <div class="clearfix visible-xs-block"></div>
                                                <p class="hidden-sm">Lorem ipsum dolor sit amet, quem convenire
                                                    interesset ut vix, maiestatis inciderint no, eos in elit
                                                    dicat.....</p>
                                                <!-- Ad Features -->
                                                <ul class="add_info">
                                                    <!-- Contact Details -->
                                                    <li>
                                                        <div class="custom-tooltip tooltip-effect-4">
                                                            <span class="tooltip-item"><i
                                                                        class="fa fa-phone"></i></span>
                                                            <div class="tooltip-content">
                                                                <h4>Call Timings</h4>
                                                                <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
                                                                <br>
                                                                <strong>Saturday</strong> 09.00 AM - 5.30 PM
                                                                <br>
                                                                <strong>Sunday</strong> <span
                                                                        class="label label-success">+92-123-4567</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Address -->
                                                    <li>
                                                        <div class="custom-tooltip tooltip-effect-4">
                                                            <span class="tooltip-item"><i class="fa fa-map-marker"></i></span>
                                                            <div class="tooltip-content">
                                                                <h4>Address</h4>
                                                                Musee du Louvre, 75058 Paris - France
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Ad Type -->
                                                    <li>
                                                        <div class="custom-tooltip tooltip-effect-4">
                                                            <span class="tooltip-item"><i class="fa fa-cog"></i></span>
                                                            <div class="tooltip-content">
                                                                <strong>Condition</strong> <span
                                                                        class="label label-danger">Used</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Ad Type -->
                                                    <li>
                                                        <div class="custom-tooltip tooltip-effect-4">
                                                            <span class="tooltip-item"><i
                                                                        class="fa fa-check-square-o"></i></span>
                                                            <div class="tooltip-content">
                                                                <strong>Warrinty</strong> <span
                                                                        class="label label-danger">No </span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!-- Ad History -->
                                                <div class="clearfix archive-history">
                                                    <div class="last-updated">Updated: 1 day ago</div>
                                                    <div class="ad-meta">
                                                        <a class="btn save-ad"><i class="fa fa-plus"></i> Reactive</a>
                                                        <a class="btn btn-success"><i class="fa fa-pencil"></i> Edit</a>
                                                        <a class="btn btn-danger"><i class="fa fa-times"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Ad Desc End -->
                                        </div>
                                        <!-- Content Block End -->
                                    </div>
                                    <!-- Ads Listing -->
                                    <div class="ads-list-archive">
                                        <!-- Image Block -->
                                        <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                            <!-- Img Block -->
                                            <div class="ad-archive-img">
                                                <a href="#">
                                                    <div class="ribbon expired">Expired</div>
                                                    <img src="{{ asset('adforest/images/posting/5.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <!-- Img Block -->
                                        </div>
                                        <!-- Ads Listing -->
                                        <div class="clearfix visible-xs-block"></div>
                                        <!-- Content Block -->
                                        <div class="col-lg-7 col-md-7 col-sm-7 no-padding">
                                            <!-- Ad Desc -->
                                            <div class="ad-archive-desc">
                                                <!-- Price -->
                                                <div class="ad-price">$900</div>
                                                <!-- Title -->
                                                <h3>Honda CBR 1000RR for Sale </h3>
                                                <!-- Category -->
                                                <div class="category-title"><span><a href="#">Car & Bikes</a></span>
                                                </div>
                                                <!-- Short Description -->
                                                <div class="clearfix visible-xs-block"></div>
                                                <p class="hidden-sm">Lorem ipsum dolor sit amet, quem convenire
                                                    interesset ut vix, maiestatis inciderint no, eos in elit
                                                    dicat.....</p>
                                                <!-- Ad Features -->
                                                <ul class="add_info">
                                                    <!-- Contact Details -->
                                                    <li>
                                                        <div class="custom-tooltip tooltip-effect-4">
                                                            <span class="tooltip-item"><i
                                                                        class="fa fa-phone"></i></span>
                                                            <div class="tooltip-content">
                                                                <h4>Call Timings</h4>
                                                                <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
                                                                <br>
                                                                <strong>Saturday</strong> 09.00 AM - 5.30 PM
                                                                <br>
                                                                <strong>Sunday</strong> <span
                                                                        class="label label-success">+92-123-4567</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Address -->
                                                    <li>
                                                        <div class="custom-tooltip tooltip-effect-4">
                                                            <span class="tooltip-item"><i class="fa fa-map-marker"></i></span>
                                                            <div class="tooltip-content">
                                                                <h4>Address</h4>
                                                                Musee du Louvre, 75058 Paris - France
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Ad Type -->
                                                    <li>
                                                        <div class="custom-tooltip tooltip-effect-4">
                                                            <span class="tooltip-item"><i class="fa fa-cog"></i></span>
                                                            <div class="tooltip-content">
                                                                <strong>Condition</strong> <span
                                                                        class="label label-danger">Used</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Ad Type -->
                                                    <li>
                                                        <div class="custom-tooltip tooltip-effect-4">
                                                            <span class="tooltip-item"><i
                                                                        class="fa fa-check-square-o"></i></span>
                                                            <div class="tooltip-content">
                                                                <strong>Warrinty</strong> <span
                                                                        class="label label-danger">No </span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!-- Ad History -->
                                                <div class="clearfix archive-history">
                                                    <div class="last-updated">Updated: 1 day ago</div>
                                                    <div class="ad-meta">
                                                        <a class="btn save-ad"><i class="fa fa-plus"></i> Reactive</a>
                                                        <a class="btn btn-success"><i class="fa fa-pencil"></i> Edit</a>
                                                        <a class="btn btn-danger"><i class="fa fa-times"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Ad Desc End -->
                                        </div>
                                        <!-- Content Block End -->
                                    </div>
                                    <!-- Ads Listing -->
                                    <div class="ads-list-archive">
                                        <!-- Image Block -->
                                        <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                            <!-- Img Block -->
                                            <div class="ad-archive-img">
                                                <a href="#">
                                                    <div class="ribbon expired">Expired</div>
                                                    <img src="{{ asset('adforest/images/posting/4.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <!-- Img Block -->
                                        </div>
                                        <!-- Ads Listing -->
                                        <div class="clearfix visible-xs-block"></div>
                                        <!-- Content Block -->
                                        <div class="col-lg-7 col-md-7 col-sm-7 no-padding">
                                            <!-- Ad Desc -->
                                            <div class="ad-archive-desc">
                                                <!-- Price -->
                                                <div class="ad-price">$120</div>
                                                <!-- Title -->
                                                <h3>Xbox 360 + Games + Accessories</h3>
                                                <!-- Category -->
                                                <div class="category-title"><span><a href="#">Art & Toys </a></span>
                                                </div>
                                                <!-- Short Description -->
                                                <div class="clearfix visible-xs-block"></div>
                                                <p class="hidden-sm">Lorem ipsum dolor sit amet, quem convenire
                                                    interesset ut vix, maiestatis inciderint no, eos in elit
                                                    dicat.....</p>
                                                <!-- Ad Features -->
                                                <ul class="add_info">
                                                    <!-- Contact Details -->
                                                    <li>
                                                        <div class="custom-tooltip tooltip-effect-4">
                                                            <span class="tooltip-item"><i
                                                                        class="fa fa-phone"></i></span>
                                                            <div class="tooltip-content">
                                                                <h4>Call Timings</h4>
                                                                <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
                                                                <br>
                                                                <strong>Saturday</strong> 09.00 AM - 5.30 PM
                                                                <br>
                                                                <strong>Sunday</strong> <span
                                                                        class="label label-success">+92-123-4567</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Address -->
                                                    <li>
                                                        <div class="custom-tooltip tooltip-effect-4">
                                                            <span class="tooltip-item"><i class="fa fa-map-marker"></i></span>
                                                            <div class="tooltip-content">
                                                                <h4>Address</h4>
                                                                Musee du Louvre, 75058 Paris - France
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Ad Type -->
                                                    <li>
                                                        <div class="custom-tooltip tooltip-effect-4">
                                                            <span class="tooltip-item"><i class="fa fa-cog"></i></span>
                                                            <div class="tooltip-content">
                                                                <strong>Condition</strong> <span
                                                                        class="label label-danger">Used</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Ad Type -->
                                                    <li>
                                                        <div class="custom-tooltip tooltip-effect-4">
                                                            <span class="tooltip-item"><i
                                                                        class="fa fa-check-square-o"></i></span>
                                                            <div class="tooltip-content">
                                                                <strong>Warrinty</strong> <span
                                                                        class="label label-danger">No </span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!-- Ad History -->
                                                <div class="clearfix archive-history">
                                                    <div class="last-updated">Updated: 1 day ago</div>
                                                    <div class="ad-meta">
                                                        <a class="btn save-ad"><i class="fa fa-plus"></i> Reactive</a>
                                                        <a class="btn btn-success"><i class="fa fa-pencil"></i> Edit</a>
                                                        <a class="btn btn-danger"><i class="fa fa-times"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Ad Desc End -->
                                        </div>
                                        <!-- Content Block End -->
                                    </div>
                                    <!-- Ads Listing -->
                                    <div class="ads-list-archive">
                                        <!-- Image Block -->
                                        <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                            <!-- Img Block -->
                                            <div class="ad-archive-img">
                                                <a href="#">
                                                    <div class="ribbon expired">Expired</div>
                                                    <img src="{{ asset('adforest/images/posting/6.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <!-- Img Block -->
                                        </div>
                                        <!-- Ads Listing -->
                                        <div class="clearfix visible-xs-block"></div>
                                        <!-- Content Block -->
                                        <div class="col-lg-7 col-md-7 col-sm-7 no-padding">
                                            <!-- Ad Desc -->
                                            <div class="ad-archive-desc">
                                                <!-- Price -->
                                                <div class="ad-price">$700</div>
                                                <!-- Title -->
                                                <h3>Sony VAIO Duo Convertible 13.3" i7 </h3>
                                                <!-- Category -->
                                                <div class="category-title"><span><a href="#">Laptops</a></span></div>
                                                <!-- Short Description -->
                                                <div class="clearfix visible-xs-block"></div>
                                                <p class="hidden-sm">Lorem ipsum dolor sit amet, quem convenire
                                                    interesset ut vix, maiestatis inciderint no, eos in elit
                                                    dicat.....</p>
                                                <!-- Ad Features -->
                                                <ul class="add_info">
                                                    <!-- Contact Details -->
                                                    <li>
                                                        <div class="custom-tooltip tooltip-effect-4">
                                                            <span class="tooltip-item"><i
                                                                        class="fa fa-phone"></i></span>
                                                            <div class="tooltip-content">
                                                                <h4>Call Timings</h4>
                                                                <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
                                                                <br>
                                                                <strong>Saturday</strong> 09.00 AM - 5.30 PM
                                                                <br>
                                                                <strong>Sunday</strong> <span
                                                                        class="label label-success">+92-123-4567</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Address -->
                                                    <li>
                                                        <div class="custom-tooltip tooltip-effect-4">
                                                            <span class="tooltip-item"><i class="fa fa-map-marker"></i></span>
                                                            <div class="tooltip-content">
                                                                <h4>Address</h4>
                                                                Musee du Louvre, 75058 Paris - France
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Ad Type -->
                                                    <li>
                                                        <div class="custom-tooltip tooltip-effect-4">
                                                            <span class="tooltip-item"><i class="fa fa-cog"></i></span>
                                                            <div class="tooltip-content">
                                                                <strong>Condition</strong> <span
                                                                        class="label label-danger">Used</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Ad Type -->
                                                    <li>
                                                        <div class="custom-tooltip tooltip-effect-4">
                                                            <span class="tooltip-item"><i
                                                                        class="fa fa-check-square-o"></i></span>
                                                            <div class="tooltip-content">
                                                                <strong>Warrinty</strong> <span
                                                                        class="label label-danger">No </span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!-- Ad History -->
                                                <div class="clearfix archive-history">
                                                    <div class="last-updated">Updated: 1 day ago</div>
                                                    <div class="ad-meta">
                                                        <a class="btn save-ad"><i class="fa fa-plus"></i> Reactive</a>
                                                        <a class="btn btn-success"><i class="fa fa-pencil"></i> Edit</a>
                                                        <a class="btn btn-danger"><i class="fa fa-times"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Ad Desc End -->
                                        </div>
                                        <!-- Content Block End -->
                                    </div>
                                    <!-- Ads Listing -->
                                    <div class="ads-list-archive">
                                        <!-- Image Block -->
                                        <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                            <!-- Img Block -->
                                            <div class="ad-archive-img">
                                                <a href="#">
                                                    <div class="ribbon expired">Expired</div>
                                                    <img src="{{ asset('adforest/images/posting/1.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <!-- Img Block -->
                                        </div>
                                        <!-- Ads Listing -->
                                        <div class="clearfix visible-xs-block"></div>
                                        <!-- Content Block -->
                                        <div class="col-lg-7 col-md-7 col-sm-7 no-padding">
                                            <!-- Ad Desc -->
                                            <div class="ad-archive-desc">
                                                <!-- Price -->
                                                <div class="ad-price">$350</div>
                                                <!-- Title -->
                                                <h3>Sony Xperia Z5 Waterproof</h3>
                                                <!-- Category -->
                                                <div class="category-title"><span><a href="#">Mobiles</a></span></div>
                                                <!-- Short Description -->
                                                <div class="clearfix visible-xs-block"></div>
                                                <p class="hidden-sm">Lorem ipsum dolor sit amet, quem convenire
                                                    interesset ut vix, maiestatis inciderint no, eos in elit
                                                    dicat.....</p>
                                                <!-- Ad Features -->
                                                <ul class="add_info">
                                                    <!-- Contact Details -->
                                                    <li>
                                                        <div class="custom-tooltip tooltip-effect-4">
                                                            <span class="tooltip-item"><i
                                                                        class="fa fa-phone"></i></span>
                                                            <div class="tooltip-content">
                                                                <h4>Call Timings</h4>
                                                                <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
                                                                <br>
                                                                <strong>Saturday</strong> 09.00 AM - 5.30 PM
                                                                <br>
                                                                <strong>Sunday</strong> <span
                                                                        class="label label-success">+92-123-4567</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Address -->
                                                    <li>
                                                        <div class="custom-tooltip tooltip-effect-4">
                                                            <span class="tooltip-item"><i class="fa fa-map-marker"></i></span>
                                                            <div class="tooltip-content">
                                                                <h4>Address</h4>
                                                                Musee du Louvre, 75058 Paris - France
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Ad Type -->
                                                    <li>
                                                        <div class="custom-tooltip tooltip-effect-4">
                                                            <span class="tooltip-item"><i class="fa fa-cog"></i></span>
                                                            <div class="tooltip-content">
                                                                <strong>Condition</strong> <span
                                                                        class="label label-danger">Used</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Ad Type -->
                                                    <li>
                                                        <div class="custom-tooltip tooltip-effect-4">
                                                            <span class="tooltip-item"><i
                                                                        class="fa fa-check-square-o"></i></span>
                                                            <div class="tooltip-content">
                                                                <strong>Warrinty</strong> <span
                                                                        class="label label-danger">No </span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!-- Ad History -->
                                                <div class="clearfix archive-history">
                                                    <div class="last-updated">Updated: 1 day ago</div>
                                                    <div class="ad-meta">
                                                        <a class="btn save-ad"><i class="fa fa-plus"></i> Reactive</a>
                                                        <a class="btn btn-success"><i class="fa fa-pencil"></i> Edit</a>
                                                        <a class="btn btn-danger"><i class="fa fa-times"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Ad Desc End -->
                                        </div>
                                        <!-- Content Block End -->
                                    </div>
                                    <!-- Ads Listing -->
                                    <div class="ads-list-archive">
                                        <!-- Image Block -->
                                        <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                            <!-- Img Block -->
                                            <div class="ad-archive-img">
                                                <a href="#">
                                                    <div class="ribbon expired">Expired</div>
                                                    <img src="{{ asset('adforest/images/posting/7.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <!-- Img Block -->
                                        </div>
                                        <!-- Ads Listing -->
                                        <div class="clearfix visible-xs-block"></div>
                                        <!-- Content Block -->
                                        <div class="col-lg-7 col-md-7 col-sm-7 no-padding">
                                            <!-- Ad Desc -->
                                            <div class="ad-archive-desc">
                                                <!-- Price -->
                                                <div class="ad-price">$1200</div>
                                                <!-- Title -->
                                                <h3>Honda Cbr900 Extreme Edition</h3>
                                                <!-- Category -->
                                                <div class="category-title"><span><a href="#">Car & Bikes</a></span>
                                                </div>
                                                <!-- Short Description -->
                                                <div class="clearfix visible-xs-block"></div>
                                                <p class="hidden-sm">Lorem ipsum dolor sit amet, quem convenire
                                                    interesset ut vix, maiestatis inciderint no, eos in elit
                                                    dicat.....</p>
                                                <!-- Ad Features -->
                                                <ul class="add_info">
                                                    <!-- Contact Details -->
                                                    <li>
                                                        <div class="custom-tooltip tooltip-effect-4">
                                                            <span class="tooltip-item"><i
                                                                        class="fa fa-phone"></i></span>
                                                            <div class="tooltip-content">
                                                                <h4>Call Timings</h4>
                                                                <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
                                                                <br>
                                                                <strong>Saturday</strong> 09.00 AM - 5.30 PM
                                                                <br>
                                                                <strong>Sunday</strong> <span
                                                                        class="label label-success">+92-123-4567</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Address -->
                                                    <li>
                                                        <div class="custom-tooltip tooltip-effect-4">
                                                            <span class="tooltip-item"><i class="fa fa-map-marker"></i></span>
                                                            <div class="tooltip-content">
                                                                <h4>Address</h4>
                                                                Musee du Louvre, 75058 Paris - France
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Ad Type -->
                                                    <li>
                                                        <div class="custom-tooltip tooltip-effect-4">
                                                            <span class="tooltip-item"><i class="fa fa-cog"></i></span>
                                                            <div class="tooltip-content">
                                                                <strong>Condition</strong> <span
                                                                        class="label label-danger">Used</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Ad Type -->
                                                    <li>
                                                        <div class="custom-tooltip tooltip-effect-4">
                                                            <span class="tooltip-item"><i
                                                                        class="fa fa-check-square-o"></i></span>
                                                            <div class="tooltip-content">
                                                                <strong>Warrinty</strong> <span
                                                                        class="label label-danger">No </span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!-- Ad History -->
                                                <div class="clearfix archive-history">
                                                    <div class="last-updated">Updated: 1 day ago</div>
                                                    <div class="ad-meta">
                                                        <a class="btn save-ad"><i class="fa fa-plus"></i> Reactive</a>
                                                        <a class="btn btn-success"><i class="fa fa-pencil"></i> Edit</a>
                                                        <a class="btn btn-danger"><i class="fa fa-times"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Ad Desc End -->
                                        </div>
                                        <!-- Content Block End -->
                                    </div>
                                    <!-- Ads Listing -->
                                    <div class="ads-list-archive">
                                        <!-- Image Block -->
                                        <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                            <!-- Img Block -->
                                            <div class="ad-archive-img">
                                                <a href="#">
                                                    <div class="ribbon expired">Expired</div>
                                                    <img src="{{ asset('adforest/images/posting/8.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <!-- Img Block -->
                                        </div>
                                        <!-- Ads Listing -->
                                        <div class="clearfix visible-xs-block"></div>
                                        <!-- Content Block -->
                                        <div class="col-lg-7 col-md-7 col-sm-7 no-padding">
                                            <!-- Ad Desc -->
                                            <div class="ad-archive-desc">
                                                <!-- Price -->
                                                <div class="ad-price">$120</div>
                                                <!-- Title -->
                                                <h3>Samsung Galaxy S2</h3>
                                                <!-- Category -->
                                                <div class="category-title"><span><a href="#">Car & Bikes</a></span>
                                                </div>
                                                <!-- Short Description -->
                                                <div class="clearfix visible-xs-block"></div>
                                                <p class="hidden-sm">Lorem ipsum dolor sit amet, quem convenire
                                                    interesset ut vix, maiestatis inciderint no, eos in elit
                                                    dicat.....</p>
                                                <!-- Ad Features -->
                                                <ul class="add_info">
                                                    <!-- Contact Details -->
                                                    <li>
                                                        <div class="custom-tooltip tooltip-effect-4">
                                                            <span class="tooltip-item"><i
                                                                        class="fa fa-phone"></i></span>
                                                            <div class="tooltip-content">
                                                                <h4>Call Timings</h4>
                                                                <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
                                                                <br>
                                                                <strong>Saturday</strong> 09.00 AM - 5.30 PM
                                                                <br>
                                                                <strong>Sunday</strong> <span
                                                                        class="label label-success">+92-123-4567</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Address -->
                                                    <li>
                                                        <div class="custom-tooltip tooltip-effect-4">
                                                            <span class="tooltip-item"><i class="fa fa-map-marker"></i></span>
                                                            <div class="tooltip-content">
                                                                <h4>Address</h4>
                                                                Musee du Louvre, 75058 Paris - France
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Ad Type -->
                                                    <li>
                                                        <div class="custom-tooltip tooltip-effect-4">
                                                            <span class="tooltip-item"><i class="fa fa-cog"></i></span>
                                                            <div class="tooltip-content">
                                                                <strong>Condition</strong> <span
                                                                        class="label label-danger">Used</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Ad Type -->
                                                    <li>
                                                        <div class="custom-tooltip tooltip-effect-4">
                                                            <span class="tooltip-item"><i
                                                                        class="fa fa-check-square-o"></i></span>
                                                            <div class="tooltip-content">
                                                                <strong>Warrinty</strong> <span
                                                                        class="label label-danger">No </span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!-- Ad History -->
                                                <div class="clearfix archive-history">
                                                    <div class="last-updated">Updated: 1 day ago</div>
                                                    <div class="ad-meta">
                                                        <a class="btn save-ad"><i class="fa fa-plus"></i> Reactive</a>
                                                        <a class="btn btn-success"><i class="fa fa-pencil"></i> Edit</a>
                                                        <a class="btn btn-danger"><i class="fa fa-times"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Ad Desc End -->
                                        </div>
                                        <!-- Content Block End -->
                                    </div>
                                </div>
                            </div>
                            <!-- Ads Archive End -->
                            <div class="clearfix"></div>
                            <!-- Pagination -->
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <ul class="pagination pagination-lg">
                                    <li><a href="#"> <i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"> <i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <!-- Pagination End -->
                        </div>
                        <!-- Row End -->
                    </div>
                    <!-- Middle Content Area  End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Main Container End -->
    </section>
@endsection