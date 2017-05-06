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
                <div class="col-md-5 col-md-push-7 col-sm-6 col-xs-12">
                    <!--  Form -->

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

                    <!-- Form -->
                </div>
                <div class="col-md-7  col-md-pull-5  col-xs-12 col-sm-6">
                    <div class="heading-panel">
                        <h3 class="main-title text-left">
                            Sign In to your account
                        </h3>
                    </div>
                    <div class="content-info">
                        <div class="features">
                            <div class="features-icons">
                                <img src="{{ asset('adforest/images/icons/chat.png') }}" alt="img">
                            </div>
                            <div class="features-text">
                                <h3>Chat &amp; Messaging</h3>
                                <p>
                                    Access your chats and account info from any device.
                                </p>
                            </div>
                        </div>
                        <div class="features">
                            <div class="features-icons">
                                <img src="{{ asset('adforest/images/icons/panel.png') }}" alt="img">
                            </div>
                            <div class="features-text">
                                <h3>User Dashboard</h3>
                                <p>
                                    Maintain a wishlist by saving your favourite items.
                                </p>
                            </div>
                        </div>
                        <span class="arrowsign hidden-sm hidden-xs"><img src="{{ asset('adforest/images/arrow.png') }}"
                                                                         alt=""></span>
                    </div>
                </div>
                <!-- Middle Content Area  End -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Main Container End -->
    </section>

@endsection