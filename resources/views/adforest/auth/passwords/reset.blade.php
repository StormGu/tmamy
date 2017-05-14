@extends('adforest.layout.oldmaster')

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
                <div class="col-md-12">
                    @if (session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif

                <!--  Form -->
                    {!! Form::open(['url' => route('password.request'), 'role' => 'form' ]) !!}

                    {!! Form::hidden('token', $token) !!}

                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        {!! Form::label('email', trans('auth.email')) !!}
                        {!! Form::email('email', $email or old('email'), ['placeholder' => __('auth.email'), 'class' => 'form-control', 'required', 'autofocus']) !!}
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        {!! Form::label('password', trans('auth.password')) !!}
                        {!! Form::password('password', ['placeholder' => __('auth.password'), 'class' => 'form-control', 'required']) !!}
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        {!! Form::label('password_confirmation', trans('auth.confirmPassword')) !!}
                        {!! Form::password('password_confirmation', ['placeholder' => __('auth.confirmPassword'), 'class' => 'form-control', 'required']) !!}
                        @if ($errors->has('password_confirmation'))
                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                    </div>

                    <button class="btn btn-theme btn-lg btn-block">@lang('auth.resetPassword')</button>
                {!! Form::close() !!}
                <!-- Form -->
                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- Main Container End -->
    </section>
@endsection