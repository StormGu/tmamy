@extends('adforest.layout.master')


@section('breadcrumbs')
    @include('adforest.partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs])
@endsection

@section('content')

    <section class="section-padding gray">
    @include('adforest.profile.head')
        <div class="container">
            <div class="row">
                <!-- Middle Content Area -->
                
            <!-- Row End -->
            <br>
            <div class="row">
                <!-- Middle Content Area -->
                <div class="col-md-4 leftbar-stick blog-sidebar">
                    <!-- Sidebar Widgets -->
                    <div class="user-profile widget">
                        <div class="widget-heading">
                            <h4 class="panel-title"><a>@lang('profile.setting')</a></h4>
                        </div>
                        <ul>
                            <li @if(Request::is('profile/settings'))class="active"@endif><a
                                        href="{{ url('profile/settings') }}">@lang('profile.settings_all')</a></li>
                            <li @if(Request::is('profile/settings/password'))class="active"@endif><a
                                        href="{{ url('profile/settings/password') }}">@lang('profile.password')</a>
                            </li>
                            <li @if(Request::is('profile/settings/social'))class="active"@endif><a
                                        href="{{ url('profile/settings/social') }}">@lang('profile.social')</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-8">
                    @include('adforest.common.message')
                    <div class="profile-section margin-bottom-20">
                        {!! Form::model($object, ['url' => 'profile/settings', 'method' => 'post', 'files' => true]) !!}
                        <div class="row">
                            <div class="form-group col-md-12 {{ $errors->has('avatar') ? ' has-error' : '' }}">
                                {!! Form::label('avatar', __('profile.avatar')) !!}

                                <div class="input-group">
                                                <span class="input-group-btn">
                                                <span class="btn btn-default btn-file">
                                                @lang('profile.Browse') <input name="avatar" type="file" id="imgInp">
                                                </span>
                                                </span>
                                    <input type="text" class="form-control" readonly>
                                </div>

                                @if ($errors->has('avatar'))
                                    <span class="text-danger">{{ $errors->first('avatar') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-12 {{ $errors->has('email') ? ' has-error' : '' }}">
                                {!! Form::label('email', __('profile.email')) !!}
                                {!! Form::text('email', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6 {{ $errors->has('first_name') ? ' has-error' : '' }}">
                                {!! Form::label('first_name', __('profile.first_name')) !!}
                                {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('first_name'))
                                    <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6 {{ $errors->has('last_name') ? ' has-error' : '' }}">
                                {!! Form::label('last_name', __('profile.last_name')) !!}
                                {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('last_name'))
                                    <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-12 {{ $errors->has('language_id') ? ' has-error' : '' }}">
                                {!! Form::label('language_id', __('profile.language')) !!}
                                {!! Form::select('language_id', ['' => __('common.choose') ] + \App\Models\Language::all()->pluck('name', 'id')->toArray(), null, ['class' => 'form-control']) !!}
                                @if ($errors->has('language_id'))
                                    <span class="text-danger">{{ $errors->first('language_id') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-12 {{ $errors->has('country_id') ? ' has-error' : '' }}">
                                {!! Form::label('country_id', __('profile.country')) !!}
                                {!! Form::select('country_id', \App\Models\Country::all()->pluck('name', 'id'), null, ['class' => 'form-control']) !!}
                                @if ($errors->has('country_id'))
                                    <span class="text-danger">{{ $errors->first('country_id') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-12 {{ $errors->has('dob') ? ' has-error' : '' }}">
                                {!! Form::label('city_id', __('profile.city')) !!}
                                {!! Form::select('city_id', \App\Models\Country::all()->pluck('name', 'id'), null, ['class' => 'form-control']) !!}
                                @if ($errors->has('mobile_no'))
                                    <span class="text-danger">{{ $errors->first('mobile_no') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-12 {{ $errors->has('address') ? ' has-error' : '' }}">
                                {!! Form::label('address', __('profile.address')) !!}
                                {!! Form::text('address', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('address'))
                                    <span class="text-danger">{{ $errors->first('address') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-12 {{ $errors->has('bio') ? ' has-error' : '' }}">
                                {!! Form::label('bio', __('profile.bio')) !!}
                                {!! Form::textarea('bio', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('bio'))
                                    <span class="text-danger">{{ $errors->first('bio') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-12 {{ $errors->has('dob') ? ' has-error' : '' }} {{ $errors->has('dob') ? ' has-error' : '' }}">
                                {!! Form::label('dob', __('profile.dob'), ['class' => 'control-label']) !!}
                                {!! Form::text('dob', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('dob'))
                                    <span class="text-danger">{{ $errors->first('dob') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-12 {{ $errors->has('mobile_no') ? ' has-error' : '' }}">
                                {!! Form::label('mobile_no', __('profile.mobile_no')) !!}
                                {!! Form::text('mobile_no', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('mobile_no'))
                                    <span class="text-danger">{{ $errors->first('mobile_no') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-12 {{ $errors->has('gender_id') ? ' has-error' : '' }}">
                                {!! Form::label('gender_id', __('profile.gender_id')) !!}
                                {!! Form::select('gender_id', ['' => __('common.choose') ] + \App\Models\Constant::where('key', '=', 'gender')->get()->pluck('value', 'id')->toArray(), null, ['class' => 'form-control']) !!}
                                @if ($errors->has('gender_id'))
                                    <span class="text-danger">{{ $errors->first('gender_id') }}</span>
                                @endif
                            </div>

                            <div class="clearfix margin-bottom-20"></div>
                            <div class="col-md-8 col-sm-8 col-xs-12">

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