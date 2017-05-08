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
                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                            <div class="filter-brudcrums">
                                <span>
                                    @lang('common.showing')
                                    <span class="showed">{{ $objects->currentPage() }}
                                        - {{ $objects->lastPage() }}</span>
                                </span>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="posts-masonry">
                            @forelse($objects as $object)
                                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12  ">
                                    @include('adforest.advertisement.adv_grid')
                                </div>
                            @empty
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
                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                           href="#collapseOne" aria-expanded="false" aria-controls="collapseOne"
                                           class="collapsed">
                                            <i class="more-less glyphicon glyphicon-plus"></i>
                                            @lang('category.related_categories')
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="headingOne" aria-expanded="false">
                                    <div class="panel-body categories">
                                        <ul>
                                            @foreach(\App\Models\Category::whereParentId($category_id)->withCount('advertisements')->get() as $category)
                                                <li>
                                                    <a href="{{ url('category/'. $category->id) }}">
                                                        <i class="flaticon-data"></i> {{ $category->name }}
                                                        <span>({{ $category->advertisements_count }})</span>
                                                    </a>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Categories Panel End -->

                            <div class="panel panel-default">
                                <!-- Heading -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a>
                                            @lang('category.sponsered_ads')
                                        </a>
                                    </h4>
                                </div>
                                <!-- Content -->

                                <div class="panel-collapse">
                                    <div class="panel-body" style="padding:  0px !important">
                                        <!-- Ads -->
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