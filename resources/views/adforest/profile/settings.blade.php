@extends('adforest.layout.master')


@section('breadcrumbs')
    @include('adforest.partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs])
@endsection

@section('content')

    <section class="section-padding gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <section class="search-result-item">
                        <a class="image-link" href="#"><img class="image" alt=""
                                                            src="@if ($object->profile->avatar_status == 1) {{ $object->profile->avatar }} @else {{ Gravatar::get($object->email) }} @endif"
                                                            alt="{{ $object->name }}"> </a>
                        <div class="search-result-item-body">
                            <div class="row">
                                <div class="col-md-5 col-sm-12 col-xs-12">
                                    <h4 class="search-result-item-heading"><a href="#">{{ $object->name }}</a></h4>
                                    <p class="info">{{ $object->email }}</p>
                                    <p class="description">{{ $object->profile->bio }}</p>
                                </div>
                                <div class="col-md-7 col-sm-12 col-xs-12">
                                    <div class="row ad-history">
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="user-stats">
                                                <h2>374</h2>
                                                <small>@lang('titles.ads')</small>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="user-stats">
                                                <h2>980</h2>
                                                <small>@lang('titles.approved_ads')</small>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="user-stats">
                                                <h2>413</h2>
                                                <small>@lang('titles.favorite_ads')</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <div class="dashboard-menu-container">
                        <ul>
                            <li class="active">
                                <a href="">
                                    <div class="menu-name"> @lang('profile.profile')</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('stores') }}">
                                    <div class="menu-name">@lang('profile.stores')</div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="menu-name">@lang('profile.ads')</div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- Middle Content Area  End -->
            </div>
            <!-- Row End -->

            <br>

            <div class="row">
                <!-- Middle Content Area -->

                <div class="col-md-8">
                    @include('adforest.common.message')
                    <div class="profile-section margin-bottom-20">
                        {!! Form::model($object, ['url' => 'setting', 'method' => 'post']) !!}
                        <div class="row">
                            <div class="form-group col-md-12">
                                {!! Form::label('avatar', __('profile.avatar')) !!}

                                <div class="input-group">
                                                <span class="input-group-btn">
                                                <span class="btn btn-default btn-file">
                                                Browse… <input type="file" id="imgInp">
                                                </span>
                                                </span>
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                {!! Form::label('email', __('profile.email')) !!}
                                {!! Form::text('email', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::label('first_name', __('profile.first_name')) !!}
                                {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::label('last_name', __('profile.last_name')) !!}
                                {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group col-md-12">
                                {!! Form::label('language_id', __('profile.language')) !!}
                                {!! Form::select('language_id', ['' => __('common.choose') ] + \App\Models\Language::all()->pluck('name', 'id')->toArray(), null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group col-md-12">
                                {!! Form::label('country_id', __('profile.country')) !!}
                                {!! Form::select('country_id', \App\Models\Country::all()->pluck('name', 'id'), null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group col-md-12">
                                {!! Form::label('city_id', __('profile.city')) !!}
                                {!! Form::select('city_id', \App\Models\Country::all()->pluck('name', 'id'), null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group col-md-12">
                                {!! Form::label('address', __('profile.address')) !!}
                                {!! Form::text('address', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group col-md-12">
                                {!! Form::label('bio', __('profile.bio')) !!}
                                {!! Form::textarea('bio', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group col-md-12">
                                {!! Form::label('dob', __('profile.dob')) !!}
                                {!! Form::text('dob', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group col-md-12">
                                {!! Form::label('mobile_no', __('profile.mobile_no')) !!}
                                {!! Form::text('mobile_no', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group col-md-12">
                                {!! Form::label('gender_id', __('profile.gender_id')) !!}
                                {!! Form::select('gender_id', ['' => __('common.choose') ] + \App\Models\Constant::where('key', '=', 'gender')->get()->pluck('value', 'id')->toArray(), null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="clearfix margin-bottom-20"></div>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <div class="form-group">
                                    <div class="skin-minimal">
                                        <ul class="list">
                                            <li>
                                                <input type="checkbox" id="minimal-checkbox-7">
                                                <label for="minimal-checkbox-7">i agree <a href="#">Terms
                                                        of Services</a></label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                                <button type="submit" class="btn btn-theme btn-sm">Update My Info
                                </button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <!-- Middle Content Area  End -->
                </div>

            </div>
            <!-- Main Container End -->
    </section>
@endsection