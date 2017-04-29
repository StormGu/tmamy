@extends('site.layout.master')

@section('content')
    <!--Account Area Start-->
    <div class="my-account-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="s-title">
                        <h1>Reset Password</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form role="form" method="POST"
                          action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <div class="form-fields">

                            <input type="hidden" name="token" value="{{ $token }}">

                            <p class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                {!! Form::label('email', __('auth.email')) !!}
                                {!! Form::text('email', $email or old('email'), ['placeholder' => __('auth.email'), 'class' => 'form-control', 'required', 'autofocus']) !!}
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </p>

                            <p class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                {!! Form::label('password', __('auth.password')) !!}
                                {!! Form::password('password', null, ['class' => 'form-control', 'required']) !!}
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </p>

                            <p class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                {!! Form::label('password_confirmation', __('auth.confirmPassword')) !!}
                                {!! Form::password('password_confirmation', null, ['class' => 'form-control', 'required']) !!}
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </p>

                            <p class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    @lang('auth.resetPassword')
                                </button>
                            </div>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
