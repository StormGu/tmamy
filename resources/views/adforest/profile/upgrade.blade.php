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

                    <div class="col-md-12">
                        @include('adforest.common.message')
                        <div class="profile-section margin-bottom-20">
                            {!! Form::model($object, ['url' => 'profile/upgrade', 'method' => 'post', 'files' => true]) !!}
                            <div class="row">
                                <div class="form-group col-md-12 {{ $errors->has('roles') ? ' has-error' : '' }}">
                                    {!! Form::label('roles', __('profile.roles')) !!}

                                    {!! Form::select('roles', \jeremykenedy\LaravelRoles\Models\Role::whereNotIn('id', \Auth::user()->roles()->pluck('role_user.id'))->whereLevel(1)->pluck('name', 'id'), null, ['class' => 'form-control']) !!}
                                    @if ($errors->has('roles'))
                                        <span class="text-danger">{{ $errors->first('roles') }}</span>
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