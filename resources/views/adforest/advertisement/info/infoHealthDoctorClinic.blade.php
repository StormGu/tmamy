@extends('adforest.layout.oldmaster')

@section('template_title', $object->title)

@section('breadcrumbs')
    @include('adforest.partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs])
@endsection

@section('content')
    <section class="section-padding error-page pattern-bgs gray ">
        <div class="container">
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
                            <h1>{{ $health->titles }}</h1>
                            <h3>{{ $health->practice_name }}</h3>
                            <h3>{{ $health->specialization }}</h3>
                            <div class="short-history">
                                <ul>
                                    <li>
                                        <i class="fa fa-anchor"></i> {{ $health->address }}
                                    </li>
                                    <li>
                                        <i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($health->created_at)->formatLocalized('%d %B %Y, %H:%M') }}
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o"></i> {{ $health->email }}
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
                <div class="col-md-6">
                    @if($clinics->count())
                        <div class="ad-box margin-top-20">
                            <h1> @lang('advertisement.clinics')</h1>
                            @foreach($clinics as $clinic)
                                <hr/>
                                <p>
                                <h3>{{ $clinic->clinic_name }}</h3>
                                </p>
                                <p>
                                    <i class="fa fa-mobile"></i> {{ $clinic->clinic_mobile_no }}
                                </p>
                                <p>
                                    <i class="fa fa-phone"></i> {{ $clinic->clinic_phone_no }}
                                </p>
                                <p>
                                    <i class="fa fa-anchor"></i> {{ $clinic->address }}
                                </p>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="col-md-6">
                    @if($educations->count())
                        <div class="ad-box margin-top-20">
                            <h1> @lang('advertisement.education')</h1>
                            <hr/>
                            <div class="desc-points">
                                <ul>
                                    @foreach($educations as $education)
                                        <li>
                                            <b>{{ $education->college_name }}</b>
                                            {{ $education->start_date }} - {{ $education->end_date }}<br>
                                            {{ $education->description }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                    @if($memberships->count())
                        <div class="ad-box margin-top-20">
                            <h1> @lang('advertisement.membership')</h1>
                            <hr/>
                            <div class="desc-points">
                                <ul>
                                    @foreach($memberships as $membership)
                                        <li>{{ $membership->name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                    @if($features->count())
                        <div class="ad-box margin-top-20">
                            <h1> @lang('advertisement.specialized_in')</h1>
                            <hr/>
                            <div class="desc-points">
                                <ul>
                                    @foreach($features as $feature)
                                        <li>{{ $feature->name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </section>
@endsection