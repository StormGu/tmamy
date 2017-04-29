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
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    <form role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-fields">
                            <h2>@lang('auth.login')</h2>
                            <p class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label>@lang('auth.email') <span class="required">*</span></label>
                                <input id="email" type="email" class="form-control" name="email"
                                       value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </p>

                        </div>
                        <div class="form-action">
                            <input type="submit" value="@lang('auth.clickHereReset')">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!--End of Account ARea-->
@endsection
