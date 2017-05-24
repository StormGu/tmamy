@extends('adforest.layout.oldmaster')


@section('breadcrumbs')
    @include('adforest.partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs])
@endsection

@section('content')
    @include('adforest.profile.head')
    <section class="section-padding gray">

        <div class="container">
            <div class="row">

                <br>
                <div class="row">
                    <!-- Middle Content Area -->

                    <div class="col-md-12">
                        @include('adforest.common.message')
                        <div class="profile-section margin-bottom-20">
                            {!! Form::model($user, ['url' => 'profile/upgrade', 'method' => 'post', 'files' => true]) !!}

                            <div class="row">
                                <div class="form-group col-md-12 {{ $errors->has('roles') ? ' has-error' : '' }}">
                                    {!! Form::label('current_roles', __('profile.current_roles')) !!}
                                    <ul>
                                        @foreach(\Auth::user()->roles as $role)
                                            <li>{{ $role->name }}</li>
                                        @endforeach
                                    </ul>
                                </div>

                                {{--<div class="form-group col-md-12 {{ $errors->has('roles') ? ' has-error' : '' }}">--}}
                                    {{--{!! Form::label('roles', __('profile.roles')) !!}--}}

                                    {{--{!! Form::select('roles', [2 => 'Yellow User', 4 => 'Business User'], null, ['class' => 'form-control']) !!}--}}
                                    {{--@if ($errors->has('roles'))--}}
                                        {{--<span class="text-danger">{{ $errors->first('roles') }}</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}

                                <div class="form-group col-md-12 {{ $errors->has('roles') ? ' has-error' : '' }}">
                                    {!! Form::label('coupon', __('profile.coupon')) !!}
                                    {!! Form::text('coupon', null, ['class' => 'form-control']) !!}
                                    @if ($errors->has('coupon'))
                                        <span class="text-danger">{{ $errors->first('coupon') }}</span>
                                    @endif
                                </div>


                                <div class="clearfix margin-bottom-20"></div>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                                    <button type="submit" class="btn btn-theme btn-sm"> @lang('profile.upgrade_account')
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