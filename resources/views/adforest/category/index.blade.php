@extends('adforest.layout.oldmaster')

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
                 <div class="col-lg-3 col-md-3 hidden-sm rtl" style="    width: 270px !important;">

                    <aside class="widget widget-banner">
                        <div class="side-divv">
                            <ul style="    background: #ddd;">

                                <li style="background: #06776f;
    border-bottom: 4px solid #9ea7af;
    border-right: 1px solid #343a45;
    font-size: 19px;
    font-weight: 100;
    padding: 1px;
    text-align: left;
    text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    vertical-align: middle;"><a class="active" href=""
                                style="  margin-left:35px;  color: #ffffff;">@lang('category.main_categories')</a>
                                </li>
                                @foreach(\App\Models\Category::parents()->has('advertisements')->withCount('advertisements')->get() as $category)
                                    <li style="border-left: 3px solid #6e6f72;" data-category="realestate">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <a href="{{ url('category/'. $category->id) }}"
                                                   style="margin-left: -34px;">
                                                    <img src="{{ asset('adforest/logo/'.$category->name.'.png') }}"
                                                         style="width: 30px;
    height: 30px;
    margin-top: -1px;
    margin-left: 20px;">
                                                </a>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <a href="{{ url('category/'. $category->id) }}"
                                                           style="margin-left: -47px;">{{ $category->name }}</a>
                                                    </div>
                                                    <div class="col-lg-4" style="    margin-top: 35px;">
                                                        <a href="{{ url('category/'. $category->id) }}"
                                                           class="rits">{{ $category->advertisements_count }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>
                        </div>

                        <div class="app-img"><a href=""><img src="{{ asset('adforest/logo/add-friend2.png') }}"> </a>
                        </div>
                        <div class="app-img"><a href=""><img src="{{ asset('adforest/logo/add-friend.png') }}"> </a>
                        </div>
                    </aside>

                </div>
             <!--   <div class="col-md-3 col-md-pull-9 col-sx-12">
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
                                        @forelse(\App\Models\Advertisement::where('category_id', $cat_id)->where('advertisment_type_id', 1)->limit(2)->get() as $object)
                                            @include('adforest.advertisement.adv_grid')
                                        @empty

                                        @endforelse

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                      <!-- Sidebar Widgets End -->
                <!-- Left Sidebar End -->
                
            </div>
            <!-- Row End -->
        </div>
        <!-- Main Container End -->
    </section>
@endsection