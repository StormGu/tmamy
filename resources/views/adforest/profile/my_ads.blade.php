@extends('adforest.layout.oldmaster')

@section('breadcrumbs')
    @include('adforest.partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs])
@endsection

@section('content')
    @include('adforest.profile.head')
    <section class="section-padding gray">

        <div class="container">

            <!-- Row -->
            <div class="row">
                <!-- Main Container -->


                <!-- Middle Content Area -->
                <br>
                @include('adforest.common.message')

                <div class="row margin-bottom-20 hidden">
                    <div class="col-md-12">
                        <a href="{{ url('AddAdv') }}"
                           class="btn btn-primary pull-right">@lang('profile.post_free_advertisement')</a>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <!-- Middle Content Area -->
                    <div class="col-md-3 leftbar-stick blog-sidebar">
                        <!-- Sidebar Widgets -->
                        <div class="user-profile widget">
                            <div class="widget-heading">
                                <h4 class="panel-title"><a>@lang('profile.status')</a></h4>
                            </div>
                            <ul>
                                <li @if(Request::is('profile/ads'))class="active"@endif><a
                                            href="{{ url('profile/ads') }}">@lang('profile.ads_all')</a></li>
                                <li @if(Request::is('profile/ads/approved'))class="active"@endif><a
                                            href="{{ url('profile/ads/approved') }}">@lang('profile.ads_approved')</a>
                                </li>
                                <li @if(Request::is('profile/ads/blocked'))class="active"@endif><a
                                            href="{{ url('profile/ads/blocked') }}">@lang('profile.ads_blocked')</a>
                                </li>
                                <li @if(Request::is('profile/ads/draft'))class="active"@endif><a
                                            href="{{ url('profile/ads/draft') }}">@lang('profile.ads_draft')</a></li>
                                <li @if(Request::is('profile/ads/expired'))class="active"@endif><a
                                            href="{{ url('profile/ads/expired') }}">@lang('profile.ads_expired')</a>
                                </li>
                                <li @if(Request::is('profile/ads/rejected'))class="active"@endif><a
                                            href="{{ url('profile/ads/rejected') }}">@lang('profile.ads_rejected')</a>
                                </li>
                                <li @if(Request::is('profile/ads/waiting_approval'))class="active"@endif>
                                    <a href="{{ url('profile/ads/waiting_approval') }}">@lang('profile.ads_waiting_approval')</a>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="col-md-9">
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
                                    @forelse ($objects as $object)
                                        <div class="ads-list-archive">
                                            <!-- Image Block -->
                                            <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                                <!-- Img Block -->
                                                <div class="ad-archive-img">
                                                    <a href="#">
                                                        <div class="ribbon expired">{{ __('advertisement.' . $object->status) }}</div>
                                                        <img src="{{ url('image/300×300/advertisements/' . $object->id.'/'. $object->image_filename) }}"
                                                             alt="">
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
                                                    <div class="ad-price"> {{ isset($object->currency->value) ? $object->currency->value : '' }} {{ number_format( $object->price, 2) }}</div>
                                                    <!-- Title -->
                                                    <h3>
                                                        <a href="{{ url('adv/'. $object->id) }}">{{ $object->title }}</a>
                                                    </h3>
                                                    <!-- Category -->
                                                    <div class="category-title">
                                                        <span><a href="#">{{ $object->category->title }}</a></span>
                                                    </div>
                                                    <!-- Short Description -->
                                                    <div class="clearfix visible-xs-block"></div>
                                                    <p class="hidden-sm">{{ str_limit($object->details, 150, $end = ' ..') }}</p>
                                                    <!-- Ad Features -->

                                                    <!-- Ad History -->
                                                    <div class="clearfix archive-history">

                                                        @if ($object->updated_at)
                                                            <div class="last-updated">@lang('advertisement.updated_at')
                                                                : {{ \Carbon\Carbon::parse($object->updated_at)->diffForHumans() }}</div>
                                                        @else
                                                            <div class="last-updated">@lang('advertisement.created_at')
                                                                : {{ \Carbon\Carbon::parse($object->created_at)->diffForHumans() }}</div>
                                                        @endif
                                                        <div class="ad-meta">
                                                            <a href="{{ url('profile/adDelet') }}/{{ $object->id }}"
                                                               class="btn btn-danger"><i
                                                                        class="fa fa-times"></i> @lang('common.delete')
                                                            </a>
                                                            @hasrole('admin')
                                                            <a href="{{ url('adv/change_status/' . $object->id . '/approved') }}/{{ $object->id }}"
                                                               class="btn btn-success">
                                                                <i class="fa fa-apply"></i> @lang('common.approve')
                                                            </a>
                                                            @endhasrole
                                                        </div>


                                                    </div>
                                                </div>
                                                <!-- Ad Desc End -->
                                            </div>
                                            <!-- Content Block End -->
                                        </div>
                                    @empty
                                        <section class="advertising">
                                            <div class="banner">
                                                <div class="wrapper">
                                                    <span class="title">@lang('common.no_results')</span>
                                                </div>
                                            </div>
                                        </section>
                                    @endforelse
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection