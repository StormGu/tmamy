@extends('adforest.layout.master')

@section('content')
    @include('adforest.profile.show_head')
    <section class="section-padding gray">
        <div class="container">
            <div class="row">

                <br>
                @include('adforest.common.message')
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="posts-masonry">
                                <div class="col-md-12 col-xs-12 col-sm-12 user-archives">

                                    @forelse ($objects as $object)
                                        <div class="col-md-3 ">
                                            @include('adforest.advertisement.adv_grid')
                                        </div>
                                        @if($loop->iteration %4 ==0 )
                                            <div class="clearfix"></div>
                                        @endif
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