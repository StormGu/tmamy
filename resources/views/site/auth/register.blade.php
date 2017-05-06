@extends('site.layout.master')

@section('content')
    <!--Account Area Start-->
    <div class="my-account-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="s-title">
                        <h1>@lang('auth.register_title')</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    {!! Form::open(['route' => 'register', 'role' => 'form', 'method' => 'POST'] ) !!}

                    {{ csrf_field() }}
                        <div class="form-fields">
                            <h2>@lang('auth.register')</h2>
                            <p class="form-group {{ $errors->has('first_name') ? ' has-error' : '' }}">
                                {!! Form::label('first_name', __('auth.first_name')) !!}
                                {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => __('auth.ph_firstname'), 'required', 'autofocus']) !!}
                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </p>
                            <p class="form-group {{ $errors->has('last_name') ? ' has-error' : '' }}">
                                {!! Form::label('last_name', __('auth.last_name')) !!}
                                {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => __('auth.ph_lastname'), 'required', 'autofocus']) !!}
                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </p>
                            <p class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                {!! Form::label('email', __('auth.email')) !!}
                                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => __('auth.ph_email'), 'required']) !!}
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </p>
                            <div class="row">
                            <p class="form-group col-sm-6 col-md-6 col-lg-6 {{ ($errors->has('password')) ? ' has-error' : '' }}">
                                {!! Form::label('password', __('auth.password')) !!}
                                {!! Form::password('password', ['class' => 'form-control', 'id' => 'password', 'placeholder' => __('auth.ph_password'), 'required']) !!}
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </p>
                            <p class="form-group col-sm-6 col-md-6 col-lg-6">
                                {!! Form::label('password_confirmation', __('auth.confirmPassword')) !!}
                                {!! Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password-confirm', 'placeholder' => __('auth.ph_password_conf'), 'required']) !!}
                            </p>
                            </div>
                            <p class="form-group ">
                                <div class="g-recaptcha" data-sitekey="{{ env('RE_CAP_SITE') }}"></div>
                            </p>
                        </div>
                        <div class="form-action">
                            <input type="submit" value="@lang('auth.register')">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer_scripts')
    <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection