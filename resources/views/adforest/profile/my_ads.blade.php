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
                                        <div class="col-md-4">
                                        <div class="white category-grid-box-1 ">
                                            <!-- Image Box -->
                                            <div class="image">

                                                <img
                                                        src="{{  url('image/300×300/advertisements/' . $object->id.'/'. $object->image_filename) }}"
                                                        class="img-responsive">
                                            </div>
                                            <!-- Short Description -->
                                            <div class="short-description-1 ">
                                                <!-- Category Title -->
                                                <div class="category-title">
                                                    <span>{{ $object->category->name }}</span>
                                                </div>
                                                <!-- Ad Title -->
                                                <h3>
                                                    <a href="{{ url('adv/'.$object->id ) }}">{{ $object->title }}</a>
                                                </h3>
                                                <!-- Location -->
                                            </div>
                                            <!-- Ad Meta Stats -->
                                            <div class="ad-info-1">
                                                <ul class="pull-left">
                                                    <li><i class="fa fa-thumbs-up"></i> {{ $object->price }}</li>

                                                </ul>
                                                <ul class="pull-right">
                                                    <li>
                                                    <i class="fa fa-trash" aria-hidden="true"><a href="{{ url('profile/adDelet') }}/{{ $object->id }}">@lang('common.delete')</a></i></li>
                                                   @hasrole('admin')
                                                    <li>

                                                    <i class="fa fa-trash" aria-hidden="true"><a href="{{ url('adv/change_status/' . $object->id . '/approved') }}/{{ $object->id }}">@lang('common.approve')</a></i></li>
                                                    @endhasrole
                                                    
                                                </ul>

                                            </div>
                                        </div>
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