@extends('adforest.layout.master')

@section('breadcrumbs')
    @include('adforest.partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs])
@endsection

@section('content')
    <div class="main-content-area clearfix">
        <section class="section-padding error-page pattern-bg ">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-md-push-7 col-sm-12 col-xs-12">
                        <div class="form-grid">
                            {!! Form::open(['route' => 'register', 'role' => 'form', 'method' => 'POST'] ) !!}

                            {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('first_name') ? ' has-error' : '' }}">
                                {!! Form::label('first_name', __('auth.first_name')) !!}
                                {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => __('auth.first_name'), 'required', 'autofocus']) !!}
                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('last_name') ? ' has-error' : '' }}">
                                {!! Form::label('last_name', __('auth.last_name')) !!}
                                {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => __('auth.last_name'), 'required', 'autofocus']) !!}
                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                {!! Form::label('email', __('auth.email')) !!}
                                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => __('auth.email'), 'required']) !!}
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group {{ ($errors->has('password')) ? ' has-error' : '' }}">
                                {!! Form::label('password', __('auth.password')) !!}
                                {!! Form::password('password', ['class' => 'form-control', 'id' => 'password', 'placeholder' => __('auth.password'), 'required']) !!}
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group ">
                                {!! Form::label('password_confirmation', __('auth.confirmPassword')) !!}
                                {!! Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password-confirm', 'placeholder' => __('auth.confirmPassword'), 'required']) !!}
                            </div>
                            <p class="form-group ">
                            <div class="g-recaptcha" data-sitekey="{{ env('RE_CAP_SITE') }}"></div>
                            </p>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-7">
                                        <div class="skin-minimal">
                                            <ul class="list">
                                                <li>
                                                    <input type="checkbox" id="minimal-checkbox-1">
                                                    <label for="minimal-checkbox-1">@lang('auth.agree')</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <button class="btn btn-theme btn-lg btn-block">@lang('auth.register')</button>
                            </form>
                        </div>
                        <!-- Form -->
                    </div>

                    <div class="col-md-7  col-md-pull-5  col-sm-12 col-xs-12">
                        <div class="heading-panel">
                            <h3 class="main-title text-left">
                                Create Your Account
                            </h3>
                        </div>
                        <div class="content-info">
                            <div class="features">
                                <div class="features-icons">
                                    <img src="{{ asset('adforest/images/icons/chat.png') }}" alt="img">
                                </div>
                                <div class="features-text">
                                    <h3>Chat & Messaging</h3>
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
                            <div class="features">
                                <div class="features-icons">
                                    <img src="{{ asset('adforest/images/icons/history.png') }}" alt="img">
                                </div>
                                <div class="features-text">
                                    <h3>Track History</h3>
                                    <p>
                                        Track the status of your ads history.
                                    </p>
                                </div>
                            </div>
                            <div class="features">
                                <div class="features-icons">
                                    <img src="{{ asset('adforest/images/icons/featured-listing.png') }}" alt="img">
                                </div>
                                <div class="features-text">
                                    <h3>features Listing</h3>
                                    <p>
                                        Get more value fro your ad.
                                    </p>
                                </div>
                            </div>
                            <span class="arrowsign hidden-sm hidden-xs"><img
                                        src="{{ asset('adforest/images/arrow.png') }}" alt=""></span>
                        </div>
                    </div>
                    <!-- Middle Content Area  End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Main Container End -->
        </section>
        @endsection


        @section('custom_js')
            <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection