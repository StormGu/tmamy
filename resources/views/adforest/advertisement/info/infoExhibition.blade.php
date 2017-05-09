@extends('adforest.layout.master')

@section('template_title', $object->title)

@section('breadcrumbs')
    @include('adforest.partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs])
@endsection

@section('content')
    <section class="section-padding error-page pattern-bgs gray ">
        <div class="container">
            <div class="row margin-bottom-20">
                <div class="col-md-9">
                    <div class="ad-box">
                        <h1>{{ $object->title }}</h1>
                        <div class="short-history">
                            <ul>
                                <li>
                                    <i class="fa fa-mobile"></i> {{ $object->mobile_no }}
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i> {{ $object->phone_no }}
                                </li>
                                <li>
                                    <i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($object->created_at)->formatLocalized('%d %B %Y, %H:%M') }}
                                </li>
                            </ul>
                        </div>
                        <hr>
                        <p>
                            {!! nl2br($object->details) !!}
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="white-bg user-contact-info margin-bottom-20">
                        <div class="text-center">
                            <img class="image  margin-top-40" alt=""
                                 src="@if ($object->customer->profile->avatar_status == 1){{ url($object->customer->profile->avatar) }} @else {{ Gravatar::get($object->customer->email) }} @endif"
                                 alt="{{ $object->customer->name }}" width="100" height="100"/>
                            <br>
                            <br>
                            <h3>{{ $object->customer->name }}</h3>
                            <br>
                            <a href="#" class="btn btn-primary btn-sm">@lang('common.follow')</a><br><br>
                            <a href="#" class="btn btn-default btn-sm">@lang('common.message')</a><br><br>
                        </div>
                        <div class="ad-listing-meta">
                            <ul>
                                <li><i class="fa fa-calendar"></i> <span class="color">{{ \Carbon\Carbon::parse($object->customer->created_at)->formatLocalized('%d %B %Y') }}</span></li>
                                {{--<li><i class="fa fa-anchor"></i> <span class="color"></span></li>--}}
                                <li><i class="fa fa-mobile"></i> <span class="color">{{ $object->customer->mobile_no }}</span></li>
                                {{--<li><i class="fa fa-phone"></i> <span class="color">{{ $object->customer->phone_no }}</span></li>--}}
                                <li><i class="fa fa-envelope"></i> <span class="color">{{ $object->customer->email }}</span></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6">

                    <div class="ad-box">
                        <h1>@lang('advertisement.job_exhibition_info')</h1>
                        <hr>
                        <p>
                        <h3>@lang('advertisement.resume_venue')</h3>
                        {{--{{ $exhibition->venue_city_id  }},--}}
                        {{--{{ $exhibition->venue_country_id  }}<br>--}}
                        {{ $exhibition->venue_name }}
                        </p>
                        <hr>
                        <p>
                        <h3>@lang('advertisement.date')</h3>
                        <b>@lang('advertisement.interval')</b>: {{ $exhibition->interval }} <br>
                        <b>@lang('advertisement.founded_date')</b>: {{ $exhibition->founded_date }} <br>
                        <b>@lang('advertisement.start_date')</b>: {{ $exhibition->start_date }} <br>
                        <b>@lang('advertisement.end_date')</b>: {{ $exhibition->end_date }}
                        </p>
                        <hr>
                        <p>
                        <h3>@lang('advertisement.hours')</h3>
                        {{ $exhibition->from_time  }} - {{ $exhibition->to_time  }}
                        </p>
                        <hr>
                        <p>
                        <h3>@lang('advertisement.sector')</h3>

                        </p>
                        <hr>
                        <p>
                        <h3>@lang('advertisement.space')</h3>
                        {{ $exhibition->venue_name }}
                        </p>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="ad-box">
                        <a href="#map" data-lat="31.5179714562342" data-lon="34.44934844970703"
                           data-modal="SHOWMAP">
                            <img src="https://maps.googleapis.com/maps/api/staticmap?center=31.5179714562342,34.44934844970703&zoom=12&size=540x200">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection