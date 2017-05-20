@extends('adforest.layout.oldmaster')

@section('breadcrumbs')
    @include('adforest.partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs])
@endsection

@section('content')

    <section class="section-padding gray">

    <!-- Main Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
            @include('adforest.profile.head')

            <!-- Middle Content Area -->
                <br>
                <div class="row margin-bottom-20">
                    <div class="col-md-12">
                        <a href="{{ url('profile/poststores') }}"
                           class="btn btn-primary pull-right">@lang('profile.store_Post_Store')</a>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <!-- Middle Content Area -->
                    <div class="col-md-4 leftbar-stick blog-sidebar">
                        <!-- Sidebar Widgets -->
                        <div class="user-profile widget">
                            <div class="widget-heading">
                                <h4 class="panel-title"><a>@lang('profile.status')</a></h4>
                            </div>
                            <ul>
                                <li @if(Request::is('profile/stores'))class="active"@endif><a
                                            href="{{ url('profile/stores') }}">@lang('profile.store_all')</a></li>
                                <li @if(Request::is('profile/stores/approved'))class="active"@endif><a
                                            href="{{ url('profile/stores/approved') }}">@lang('profile.store_approved')</a>
                                </li>
                                <li @if(Request::is('profile/stores/blocked'))class="active"@endif><a
                                            href="{{ url('profile/stores/blocked') }}">@lang('profile.store_blocked')</a>
                                </li>
                                <li @if(Request::is('profile/stores/draft'))class="active"@endif><a
                                            href="{{ url('profile/stores/draft') }}">@lang('profile.store_draft')</a>
                                </li>
                                <li @if(Request::is('profile/stores/expired'))class="active"@endif><a
                                            href="{{ url('profile/stores/expired') }}">@lang('profile.store_expired')</a>
                                </li>
                                <li @if(Request::is('profile/stores/rejected'))class="active"@endif><a
                                            href="{{ url('profile/stores/rejected') }}">@lang('profile.store_rejected')</a>
                                </li>
                                <li @if(Request::is('profile/stores/waiting_approval'))class="active"@endif>
                                    <a href="{{ url('profile/stores/waiting_approval') }}">@lang('profile.store_waiting_approval')</a>
                                </li>
                            </ul>
                        </div>

                    </div>


                    <div class="col-md-8">
                        <!-- Row -->
                        <div class="row">
                            <!-- Sorting Filters -->
                            <!-- Ads Archive -->
                            <div class="posts-masonry">

                                @forelse ($objects as $object)
                                    <div class="col-md-4">
                                        <div class="white category-grid-box-1 ">
                                            <!-- Image Box -->
                                            <div class="image">

                                                <img alt="Tour Package"
                                                     src="{{ url('image/300×240/' . $object->logo_file_name) }}"
                                                     class="img-responsive">
                                            </div>
                                            <!-- Short Description -->
                                            <div class="short-description-1 ">
                                                <!-- Category Title -->
                                                <div class="category-title"><span><a
                                                                href="{{ url('ShowStoresDetails/'.$object->id ) }}">{{ $object->category->name }}</a></span></div>
                                                <!-- Ad Title -->
                                                <h3>
                                                    <a target="" href="{{ url('profile/ShowStoresDetails/'.$object->id ) }}">{{ $object->title }}</a>
                                                </h3>
                                                <!-- Location -->
                                            </div>
                                            <!-- Ad Meta Stats -->
                                            <div class="ad-info-1">
                                                <ul class="pull-left">
                                                    <li><i class="fa fa-thumbs-up"></i> 123</li>
                                                    <li><i class="fa fa-buysellads"></i> 123</li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-md-12">
                                        <section class="advertising">
                                            <div class="banner">
                                                <div class="wrapper">
                                                    <span class="title">@lang('common.no_results')</span>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                @endforelse

                            </div>
                            <!-- Ads Archive End -->
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection