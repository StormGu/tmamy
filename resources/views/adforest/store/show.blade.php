@extends('adforest.layout.oldmaster')

@section('breadcrumbs')
    @include('adforest.partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs])
@endsection

@section('content')

    @include('adforest.store.head')

    <section class="section-padding gray">

        s
        <div class="container">
            <div class="row">
                <br>

                @if(\Auth::id() == $object->user_id)
                    <div class="row margin-bottom-20">
                        <div class="col-md-12">
                            <a href="{{ url('AddAdv/' . $object->category_id . '?store_id=' . $object->id) }}"
                               class="btn btn-primary pull-right" style="margin: 0 4px">
                                @lang('profile.ad_Post_ad')
                            </a>
                            <a href="{{ url('store/' . $object->id . '/edit') }}"
                               class="btn btn-warning pull-right" style="margin: 0 4px">
                                @lang('store.edit')
                            </a>
                        </div>
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-3 leftbar-stick blog-sidebar">
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
                                        @include('adforest.advertisement.adv_grid')
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