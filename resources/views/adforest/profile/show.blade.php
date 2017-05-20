@extends('adforest.layout.master')

@section('content')

    <section class="section-padding gray">
        <div class="container">
            <div class="row">
                @include('adforest.profile.show_head')
                <br>
                @include('adforest.common.message')
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="posts-masonry">
                                <div class="col-md-12 col-xs-12 col-sm-12 user-archives">

                                    @forelse ($objects as $object)
                                        <div class="row">
                                            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12  ">
                                                @include('adforest.advertisement.adv_grid')
                                            </div>
                                            @if($loop->iteration %4 ==0 )
                                        </div>
                                        <div class="row">
                                            @endif
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