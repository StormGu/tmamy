@extends('adforest.layout.oldmaster')

@section('template_title', $object->title)

@section('breadcrumbs')
    @include('adforest.partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs])
@endsection

@section('content')
    <section class="section-padding error-page pattern-bgs gray ">
        <!-- Main Container -->
        <div class="container">
            <div class="row margin-bottom-20">
                <div class="col-md-12">
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

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="single-ad">
                        <div class="ad-box">
                            <div class="specification">
                                <!-- Heading Area -->
                                <div class="heading-panel">
                                    <h3 class="main-title text-left">
                                        @lang('advertisement.description')
                                    </h3>
                                </div>
                                <p>
                                    {!! nl2br($object->details) !!}
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        @if($object_requirements->count())
                            <div class="ad-box margin-top-20">
                                <div class="heading-panel">
                                    <h3 class="main-title text-left">
                                        @lang('advertisement.requirements')
                                    </h3>
                                </div>
                                <div class="desc-points">
                                    <ul>
                                        @foreach($object_requirements as $requirement)
                                            <li>{{ $requirement->name }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif

                        <div class="ad-box margin-top-20">
                            <div class="heading-panel">
                                <h3 class="main-title text-left">
                                    @lang('advertisement.additional_info')
                                </h3>
                            </div>

                            @if(isset($object_career->career_level->value))
                                <div class="col-md-12 no-padding">
                                    <span><strong>@lang('advertisement.career_level')</strong> :</span> {{ $object_career->career_level->value }}
                                </div>
                            @endif
                            @if(isset($object_career->work_experience->value))
                                <div class="col-md-12 no-padding">
                                    <span><strong>@lang('advertisement.work_experience')</strong> :</span> {{ $object_career->work_experience->value }}
                                </div>
                            @endif
                            @if(isset($object_career->gender->value))
                                <div class="col-md-12 no-padding">
                                    <span><strong>@lang('advertisement.gender')</strong> :</span> {{ $object_career->gender->value }}
                                </div>
                            @endif
                            @if(isset($object_career->education_level->value))
                                <div class="col-md-12 no-padding">
                                    <span><strong>@lang('advertisement.education_level')</strong> :</span> {{ $object_career->education_level->value }}
                                </div>
                            @endif
                            @if(isset($object_career->salary_from) || isset($object_career->salary_to))
                                <div class="col-md-12 no-padding">
                                    <span><strong>@lang('advertisement.salary')</strong> :</span> {{ $object_career->salary_from }}
                                    - {{ $object_career->salary_to }}
                                </div>
                            @endif
                            @if(isset($object_career->currency->value))
                                <div class="col-md-12 no-padding">
                                    <span><strong>@lang('advertisement.currency_id')</strong> :</span> {{ $object_career->currency->value }}
                                </div>
                            @endif
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    @if(isset($features) && count($features))
                        <div class="ad-box margin-top-20">
                            <div class="heading-panel">
                                <h3 class="main-title text-left">
                                    @lang('advertisement.job_specialized_in')
                                </h3>
                            </div>
                            <div class="desc-points">
                                <ul>
                                    @foreach($features as $key => $feature)
                                        <li>{{ $feature->name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-md-6">
                    <div class="single-ad">
                        <div class="ad-box">
                            <div class="heading-panel">
                                <h3 class="main-title text-left">
                                    <img class="image" alt=""
                                         src="@if ($object->customer->profile->avatar_status == 1){{ url($object->customer->profile->avatar) }} @else {{ Gravatar::get($object->customer->email) }} @endif"
                                         alt="{{ $object->customer->name }}" width="55" height="55"
                                    /> {{ $object->customer->name }} <br>
                                </h3>
                            </div>
                            <p>
                                <b>@lang('advertisement.company_name')</b> : {{ $object_career->company_name }}
                            </p>
                            <p>
                                <b>@lang('advertisement.company_over_view')</b> : {{ $object_career->company_over_view }}
                            </p>
                            <p>
                                <b>@lang('advertisement.company_size_id')</b> : {{ $object_career->company_size_id }}
                            </p>
                            <p>
                            <div class="col-md-6">
                                <i class="fa fa-mobile"></i> {{ $object_career->company_phone_no }}
                            </div>
                            <div class="col-md-6">
                                <i class="fa fa-location-arrow"></i> {{ $object_career->company_address }}
                            </div>
                            <div class="col-md-6">
                                <i class="fa fa-inbox"></i> {{ $object_career->contact_email }}
                            </div>
                            <div class="col-md-6">
                                <i class="fa fa-anchor"></i> {{ $object_career->company_website }}
                            </div>
                            <div class="clearfix"></div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection