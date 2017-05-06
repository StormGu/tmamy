@extends('adforest.layout.master')

@section('breadcrumbs')
    @include('adforest.partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs])
@endsection

@section('content')
    <section class="section-padding ">
        <!-- Main Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding commentForm">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                        @include('adforest.common.message')

                        <div class="">
                            <h2>@lang('contact.description')</h2>
                            {!! Form::open(['url' => 'contact']) !!}
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        {!! Form::text('name', old('name'), ['required', 'class' => 'form-control', 'placeholder' => __('contact.name') ]) !!}
                                        @if($errors->first('name'))
                                            {!! $errors->first('name','<div class="text-danger">:message</div>') !!}
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        {!! Form::email('email', null, ['required', 'class' => 'form-control', 'placeholder' => __('contact.email') ]) !!}
                                        @if($errors->first('email'))
                                            {!! $errors->first('email','<div class="text-danger">:message</div>') !!}
                                        @endif

                                    </div>
                                    <div class="form-group">
                                        {!! Form::text('subject', null, ['required', 'class' => 'form-control', 'placeholder' => __('contact.subject') ]) !!}
                                        @if($errors->first('subject'))
                                            {!! $errors->first('subject','<div class="text-danger">:message</div>') !!}
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        {!! Form::textarea('message', null, ['cols' => '12', 'rows' => '7', 'required', 'class' => 'form-control', 'placeholder' => __('contact.message') ]) !!}
                                        @if($errors->first('message'))
                                            {!! $errors->first('message','<div class="text-danger">:message</div>') !!}
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <button class="btn btn-theme" type="submit">@lang('contact.send')</button>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="contactInfo">
                            <h2>@lang('contact.contact_info')</h2>
                            <div class="singleContadds">
                                <i class="fa fa-map-marker"></i>
                                <p>{{ config('settings.address') }}</p>
                            </div>
                            <div class="singleContadds phone">
                                <i class="fa fa-phone"></i>
                                <p>{{ config('settings.mobile_no') }}</p>

                            </div>
                            <div class="singleContadds">
                                <i class="fa fa-envelope"></i>
                                <a href="mailto:{{ config('settings.contact_email') }}">{{ config('settings.contact_email') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- Main Container End -->
    </section>
@endsection