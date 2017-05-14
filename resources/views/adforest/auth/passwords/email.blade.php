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
                    {!! Form::open(['url' => route('password.email'), 'role' => 'form' ]) !!}
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        {!! Form::label('email', trans('auth.email')) !!}
                        {!! Form::email('email', old('email'), ['placeholder' => __('auth.email'), 'class' => 'form-control', 'required', 'autofocus']) !!}
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <button class="btn btn-theme btn-lg btn-block">@lang('auth.clickHereReset')</button>
                {!! Form::close() !!}
                <!-- Form -->
                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- Main Container End -->
    </section>
@endsection