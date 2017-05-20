@extends('adforest.layout.master')



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
                                    @foreach(\App\Models\Advertisement::where('user_id', $object->id)->get() as $ads)
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
                                                <div class="ad-price">{{$ads->price}}</div>
                                                <!-- Title -->
                                                <h3><a  href="{{ url('adv/'. $ads->id) }}">{{$ads->title}}</a></h3>
                                                <!-- Category -->
                                                <div class="category-title"><span><a href="#">{{ $ads->category->name }}</a></span>
                                                </div>
                                                <!-- Short Description -->
                                                <div class="clearfix visible-xs-block"></div>
                                                <p class="hidden-sm">{{ $ads->details }}</p>
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
                                                    <div class="last-updated">Updated: {{ $ads->created_at }}</div>
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
                                    @endforeach
                                    <!-- Ads Listing -->

                                </div>
                            </div>
                            <!-- Ads Archive End -->
                            <div class="clearfix"></div>
                            <!-- Pagination -->

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