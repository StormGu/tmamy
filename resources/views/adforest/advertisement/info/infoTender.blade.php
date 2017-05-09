@extends('adforest.layout.master')

@section('template_title', $object->title)

@section('breadcrumbs')
    @include('adforest.partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs])
@endsection

@section('content')
    <section class="section-padding error-page pattern-bgs gray ">
        <div class="container">
            <div class="col-md-9">
                <div class="row margin-bottom-20">
                    <div class="col-md-12">
                        <div class="ad-box">
                            <div class="col-md-2">
                                <div class="text-center">
                                    <img class="image  margin-top-40" alt=""
                                         src="@if ($object->customer->profile->avatar_status == 1){{ url($object->customer->profile->avatar) }} @else {{ Gravatar::get($object->customer->email) }} @endif"
                                         alt="{{ $object->customer->name }}" width="100" height="100"/>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <h1>{{ $object->title }}</h1>
                                <div class="short-history">
                                    <ul>
                                        {{--<li>--}}
                                        {{--<i class="fa fa-anchor"></i> {{ $object->address }}--}}
                                        {{--</li>--}}
                                        <li>
                                            <i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($object->created_at)->formatLocalized('%d %B %Y, %H:%M') }}
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope-o"></i> {{ $object->customer->email }}
                                        </li>
                                    </ul>
                                </div>
                                <hr>
                                <p>
                                    {!! nl2br($object->details) !!}
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">

                        <div class="white-bg user-contact-info margin-bottom-20">
                        <h3 class="main-title" style="padding: 20px">
                        @lang('advertisement.tender')
                        </h3>
                        <hr/>
                        <div class="ad-listing-meta">
                        <ul>
                        <li>@lang('advertisement.ref_no') <span>{{ $tender->tender_ref_no }}</span></li>
                        <li>@lang('advertisement.value') <span>{{ $tender->tender_value }}</span></li>
                        <li>@lang('advertisement.document_cost') <span>{{ $tender->document_cost }}</span></li>
                        <li>@lang('advertisement.announcement_date') <span>{{ $tender->announcement_date }}</span></li>
                        <li>@lang('advertisement.value_currency_id') <span>{{ $tender->tender_value_currency_id }}</span></li>
                        <li>@lang('advertisement.document_cost_currency_id') <span>{{ $tender->document_cost_currency_id }}</span></li>
                        <li>@lang('advertisement.opening_date') <span>{{ $tender->opening_date }}</span></li>
                        <li>@lang('advertisement.opening_time') <span>{{ $tender->opening_time }}</span></li>
                        <li>@lang('advertisement.last_collection_date') <span>{{ $tender->last_collection_date }}</span></li>
                        <li>@lang('advertisement.address') <span>{{ $tender->address }}</span></li>
                        <li>@lang('advertisement.organisation_name') <span>{{ $tender->organisation_name }}</span></li>
                        <li>@lang('advertisement.organisation_street') <span>{{ $tender->organisation_street }}</span></li>
                        <li>@lang('advertisement.organisation_phone') <span>{{ $tender->organisation_phone }}</span></li>
                        <li>@lang('advertisement.organisation_fax') <span>{{ $tender->organisation_fax }}</span></li>
                        <li>@lang('advertisement.organisation_email') <span>{{ $tender->organisation_email }}</span></li>
                        <li>@lang('advertisement.contact_person') <span>{{ $tender->contact_person }}</span></li>

                        </ul>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        {{--<div class="ad-box  white-bg user-contact-info margin-bottom-20">--}}
                        {{--<h3 class="main-title" style="padding: 20px">--}}
                        {{--@lang('service.about')--}}
                        {{--</h3>--}}
                        {{--<hr/>--}}
                        {{--<p>--}}
                        {{--{{ $service->my_services }}--}}
                        {{--</p>--}}
                        {{--</div>--}}
                        {{--<div class="ad-box  white-bg user-contact-info margin-bottom-20">--}}
                        {{--<h3 class="main-title" style="padding: 20px">--}}
                        {{--@lang('advertisement.cost_of_services')--}}
                        {{--</h3>--}}
                        {{--<hr/>--}}
                        {{--<div class="ad-listing-meta">--}}
                        {{--<ul>--}}
                        {{--@foreach($costs as $cost)--}}
                        {{--<li> {{ $cost->service_title }} <span>{{ $cost->service_cost . ' ' .  $cost->currency->value }}</span></li>--}}
                        {{--@endforeach--}}
                        {{--</ul>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--@if($educations->count())--}}
                        {{--<div class="ad-box margin-top-20">--}}
                        {{--<h1> @lang('advertisement.education')</h1>--}}
                        {{--<hr/>--}}
                        {{--<div class="desc-points">--}}
                        {{--<ul>--}}
                        {{--@foreach($educations as $education)--}}
                        {{--<li>--}}
                        {{--<b>{{ $education->college_name }}</b>--}}
                        {{--{{ $education->start_date }} - {{ $education->end_date }}<br>--}}
                        {{--{{ $education->description }}--}}
                        {{--</li>--}}
                        {{--@endforeach--}}
                        {{--</ul>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--@endif--}}
                        {{--@if($memberships->count())--}}
                        {{--<div class="ad-box margin-top-20">--}}
                        {{--<h1> @lang('advertisement.membership')</h1>--}}
                        {{--<hr/>--}}
                        {{--<div class="desc-points">--}}
                        {{--<ul>--}}
                        {{--@foreach($memberships as $membership)--}}
                        {{--<li>{{ $membership->name }}</li>--}}
                        {{--@endforeach--}}
                        {{--</ul>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--@endif--}}
                        {{--@if($features->count())--}}
                        {{--<div class="ad-box margin-top-20">--}}
                        {{--<h1> @lang('advertisement.specialized_in')</h1>--}}
                        {{--<hr/>--}}
                        {{--<div class="desc-points">--}}
                        {{--<ul>--}}
                        {{--@foreach($features as $feature)--}}
                        {{--<li>{{ $feature->name }}</li>--}}
                        {{--@endforeach--}}
                        {{--</ul>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--@endif--}}
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="white-bg user-contact-info margin-bottom-20">
                    <div class="text-center">
                        <img class="image margin-top-40" alt=""
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
                            <li><i class="fa fa-calendar"></i> <span
                                        class="color">{{ \Carbon\Carbon::parse($object->customer->created_at)->formatLocalized('%d %B %Y') }}</span>
                            </li>
                            {{--<li><i class="fa fa-anchor"></i> <span class="color"></span></li>--}}
                            <li><i class="fa fa-mobile"></i> <span
                                        class="color">{{ $object->customer->mobile_no }}</span></li>
                            {{--<li><i class="fa fa-phone"></i> <span class="color">{{ $object->customer->phone_no }}</span></li>--}}
                            <li><i class="fa fa-envelope"></i> <span class="color">{{ $object->customer->email }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection