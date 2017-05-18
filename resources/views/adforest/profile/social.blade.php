@extends('adforest.layout.oldmaster')


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
                        {!! Form::model($object, ['url' => 'profile/settings/social', 'method' => 'post', 'files' => true]) !!}
                        <div class="row">

                            <div class="form-group col-md-12 {{ $errors->has('facebook') ? ' has-error' : '' }}">
                                {!! Form::label('facebook', __('profile.facebook')) !!}
                                {!! Form::text('facebook', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('facebook'))
                                    <span class="text-danger">{{ $errors->first('facebook') }}</span>
                                @endif
                            </div>

                            <div class="form-group col-md-12 {{ $errors->has('twitter') ? ' has-error' : '' }}">
                                {!! Form::label('twitter', __('profile.twitter')) !!}
                                {!! Form::text('twitter', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('twitter'))
                                    <span class="text-danger">{{ $errors->first('twitter') }}</span>
                                @endif
                            </div>

                            <div class="form-group col-md-12 {{ $errors->has('googleplus') ? ' has-error' : '' }}">
                                {!! Form::label('googleplus', __('profile.googleplus')) !!}
                                {!! Form::text('googleplus', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('googleplus'))
                                    <span class="text-danger">{{ $errors->first('googleplus') }}</span>
                                @endif
                            </div>

                            <div class="form-group col-md-12 {{ $errors->has('linkedin') ? ' has-error' : '' }}">
                                {!! Form::label('linkedin', __('profile.linkedin')) !!}
                                {!! Form::text('linkedin', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('linkedin'))
                                    <span class="text-danger">{{ $errors->first('linkedin') }}</span>
                                @endif
                            </div>

                            <div class="form-group col-md-12 {{ $errors->has('pinterest') ? ' has-error' : '' }}">
                                {!! Form::label('pinterest', __('profile.pinterest')) !!}
                                {!! Form::text('pinterest', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('pinterest'))
                                    <span class="text-danger">{{ $errors->first('pinterest') }}</span>
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