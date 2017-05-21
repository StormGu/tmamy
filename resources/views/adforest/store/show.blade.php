@extends('adforest.layout.oldmaster')

@section('breadcrumbs')
    @include('adforest.partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs])
@endsection

@section('content')
    @include('adforest.profile.head')
    <section class="section-padding gray">

        <!-- Main Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <!-- Middle Content Area -->
                <br>
                <div class="row margin-bottom-20">
                    <div class="col-md-12">
                        <a href="{{ url('store/create') }}" class="btn btn-primary pull-right">
                            @lang('profile.store_Post_Store')
                        </a>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <!-- Middle Content Area -->
                    <div class="col-md-3 leftbar-stick blog-sidebar">
                        <!-- Sidebar Widgets -->
                        <div class="user-profile widget">
                            <div class="widget-heading">
                                <h4 class="panel-title"><a>@lang('profile.store')</a></h4>
                            </div>
                            <ul>
                                <li><a href="">@lang('store.all_categories')</a></li>
                            </ul>
                        </div>

                    </div>


                    <div class="col-md-9">
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
                                                <a href="{{ url('store/'.$object->user_id ) }}">
                                                    <img src="{{ url('image/300×240/stores/' . $object->id . '/'.  $object->logo_file_name) }}"
                                                         class="img-responsive">
                                                </a>
                                            </div>
                                            <!-- Short Description -->
                                            <div class="short-description-1 ">
                                                <!-- Category Title -->
                                                <div class="category-title">
                                                    <span>{{ $object->category->name }}</span>
                                                </div>
                                                <!-- Ad Title -->
                                                <h3>
                                                    <a href="{{ url('store/'.$object->user_id ) }}">{{ $object->title }}</a>
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