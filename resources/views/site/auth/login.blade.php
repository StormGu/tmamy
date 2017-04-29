@extends('site.layout.master')

@section('content')

    <!--Account Area Start-->
    <div class="my-account-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="s-title">
                        <h1>@lang('auth.title')</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <form role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-fields">
                            <h2>@lang('auth.login')</h2>
                            <p class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label>@lang('auth.email') <span class="required">*</span></label>
                                <input id="email" type="email" class="form-control" name="email"
                                       value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </p>
                            <div class="cleafix"></div>
                            <p class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                {{ Form::label('password', __('auth.password')) }}
                                {{ Form::password('password', null, ['class' => 'form-control', 'required']) }}
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </p>
                            <p class="text-center margin-bottom-3">
                                @lang('auth.or_login_with')
                            </p>
                            @include('partials.socials-icons')
                        </div>
                        <div class="form-action">
                            <p class="lost_password">
                                <a href="{{ route('password.request') }}">@lang('auth.forgot')</a>
                            </p>
                            <input type="submit" value="@lang('auth.login')">
                            <label><input type="checkbox"
                                          name="remember" {{ old('remember') ? 'checked' : '' }} /> @lang('auth.rememberMe')
                            </label>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!--End of Account ARea-->

@endsection
