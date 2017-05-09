@extends('adforest.layout.master')

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

                        <div class="white-bg user-contact-info margin-bottom-20">
                            <div class="heading-panel ">
                                <h3 class="main-title" style="padding: 20px">
                                    @lang('advertisement.specialties')
                                </h3>
                            </div>
                            <div class="ad-listing-meta">
                                <ul>
                                    <li>@lang('advertisement.gender'): <span
                                                class="color">{{ $resume->gender->value }}</span></li>
                                    <li>@lang('advertisement.education '): <span
                                                class="color">{{ $resume->education_level->value }}</span></li>
                                    <li>@lang('advertisement.age'): <span class="color">{{ $resume->age }}</span>
                                    </li>
                                    <li>@lang('advertisement.email'): <span
                                                class="color">{{ $resume->email }}</span></li>
                                    <li>@lang('advertisement.mobile'): <span
                                                class="color">{{ $object->mobile_no }}</span></li>
                                    <li>@lang('advertisement.phone'): <span
                                                class="color">{{ $object->phone_no }}</span></li>
                                </ul>
                            </div>
                        </div>



                        <div class="ad-box margin-top-20">
                            <div class="heading-panel">
                                <h3 class="main-title text-left">
                                    @lang('advertisement.job_aditional_info')
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
                                    <span><strong>@lang('advertisement.currency')</strong> :</span> {{ $object_career->currency->value }}
                                </div>
                            @endif
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    @if(isset($features) && $features->count())
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
                            <div class="specification">
                                <!-- Heading Area -->
                                <div class="heading-panel">
                                    <h3 class="main-title text-left">
                                        @lang('advertisement.job_description')
                                    </h3>
                                </div>
                                <p>
                                    {!! nl2br($object->details) !!}
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="ad-box margin-top-20">
                            <div class="specification">
                                <!-- Heading Area -->
                                <div class="heading-panel">
                                    <h3 class="main-title text-left">
                                        @lang('advertisement.job_skills')
                                    </h3>
                                </div>
                                <p>
                                    {!! nl2br($resume->skills) !!}
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        @if(isset($experiences) && $experiences->count())
                            <div class="ad-box margin-top-20">
                                <div class="heading-panel">
                                    <h3 class="main-title text-left">
                                        @lang('advertisement.job_requirements')
                                    </h3>
                                </div>
                                <div class="desc-points">
                                    <ul>
                                        @foreach($experiences as $experience)
                                            <li>
                                                <b>{{ $experience->company_name }}</b><br>
                                                {{ $experience->company_position }} -
                                                {{ Carbon\Carbon::parse($experience->start_date)->formatLocalized('%A, %d %B %Y') }}
                                                {{ Carbon\Carbon::parse($experience->end_date)->formatLocalized('%A, %d %B %Y') }}
                                                {{ $experience->start_date }}

                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection