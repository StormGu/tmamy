@extends('adforest.layout.master')

@section('breadcrumbs')
    @include('adforest.partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs])
@endsection

@section('content')

    <section class="section-padding gray">
        <div class="container">
            <div class="row">
                <!-- Middle Content Area -->
                @include('adforest.profile.head')
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
                        {!! Form::model($object, ['url' => 'profile/settings/password', 'method' => 'post', 'files' => true]) !!}
                        <div class="row">

                            <div class="form-group col-md-12 {{ $errors->has('password') ? ' has-error' : '' }}">
                                {!! Form::label('password', __('profile.password')) !!}
                                {!! Form::password('password', ['class' => 'form-control']) !!}
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-12 {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                {!! Form::label('password_confirmation', __('profile.password_confirmation')) !!}
                                {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                                @if ($errors->has('password_confirmation'))
                                    <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
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