@extends('adforest.layout.master')

@section('breadcrumbs')
    @include('adforest.partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs])
@endsection

@section('content')
    <section class="section-padding error-page pattern-bg ">
        <!-- Main Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <!-- Middle Content Area -->
                <div class="col-md-8 col-md-push-2 col-sm-12 col-xs-12">
                    <!--  Form -->
                    <div class="form-grid">
                        <form role="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                {!! Form::label('email', trans('auth.email')) !!}
                                {!! Form::email('email', old('email'), ['placeholder' => __('auth.email'), 'class' => 'form-control', 'required', 'autofocus']) !!}
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                {{ Form::label('password', __('auth.password')) }}
                                {{ Form::password('password', ['placeholder' => __('auth.password'), 'class' => 'form-control', 'required']) }}
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="skin-minimal">
                                            <ul class="list">
                                                <li>
                                                    <input type="checkbox"
                                                           name="remember" {{ old('remember') ? 'checked' : '' }} />
                                                    {!! Form::label('remember', __('auth.rememberMe')) !!}
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-7 text-right">
                                        <p class="help-block"><a
                                                    href="{{ route('password.request') }}">@lang('auth.forgot')</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-theme btn-lg btn-block">@lang('auth.login')</button>
                        </form>

                        <div class="row margin-top-20">
                            <div class="col-md-12">
                                <div class="col-md-3">
                                    <a href="{{ route('social.redirect', ['provider' => 'facebook']) }}"
                                       class="btn btn-lg btn-primary btn-block facebook">Facebook</a>
                                </div>
                                <div class="col-md-3">
                                    <a href="{{ route('social.redirect', ['provider' => 'twitter']) }}"
                                       class="btn btn-lg btn-primary btn-block twitter">Twitter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Form -->
                </div>

                <!-- Middle Content Area  End -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Main Container End -->
    </section>

@endsection