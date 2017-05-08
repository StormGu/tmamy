@extends('adforest.layout.master')

@section('template_title', $object->title)

@section('breadcrumbs')
    @include('adforest.partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs])
@endsection

@section('content')
    <section class="section-padding gray">
        <!-- Main Container -->
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-push-3 col-lg-9 col-sx-12">
                    <div class="row">
                        @if($objects->count())
                            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                <div class="filter-brudcrums">
                                <span>
                                    @lang('common.showing')
                                    <span class="showed">{{ $objects->currentPage() }}
                                        - {{ $objects->lastPage() }}</span>
                                </span>
                                </div>
                            </div>
                        @endif
                        <div class="clearfix"></div>
                        <div class="posts-masonry">
                            @forelse($objects as $object)
                                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12  ">
                                    @include('adforest.advertisement.adv_grid')
                                </div>
                            @empty
                                <div class="col-md-12 col-xs-12 col-sm-12 user-archives">
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
                        <div class="clearfix"></div>
                        <div class="text-center margin-top-30">
                            {!! str_replace('/?', '?', $objects->render()) !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-md-pull-9 col-sx-12">
                    <div class="sidebar">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="more-less glyphicon glyphicon-plus"></i>
                                            @lang('category.related_categories')
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body categories">
                                        <ul>
                                            @foreach(\App\Models\Category::whereParentId($category_id)->withCount('advertisements')->get() as $category)
                                                <li><a href="{{ url('category/'. $category->id) }}">
                                                        {{ $category->name }}
                                                        <span>({{ $category->advertisements_count }})</span>
                                                    </a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a>
                                            @lang('category.sponsered_ads')
                                        </a>
                                    </h4>
                                </div>

                                <div class="panel-collapse">
                                    <div class="panel-body" style="padding:  0px !important">
                                        @forelse($sponsored as $object)
                                            @include('adforest.advertisement.adv_grid')
                                        @empty

                                        @endforelse

                                    </div>
                                </div>
                            </div>
                            <!-- Latest Ads Panel End -->
                        </div>
                        <!-- panel-group end -->
                    </div>
                    <!-- Sidebar Widgets End -->
                </div>
                <!-- Left Sidebar End -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Main Container End -->
    </section>
@endsection