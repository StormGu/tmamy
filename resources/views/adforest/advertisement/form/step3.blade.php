@extends('adforest.layout.master')

@section('template_title', __('advertisement.heading_title'))

@section('breadcrumbs')
    @include('adforest.partials.breadcrumbs', ['breadcrumbs' => isset($breadcrumbs) ? $breadcrumbs : []])
@endsection

@section('content')
    <div class="container">
        <section class="section-padding gray">

            <div class="row">

                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    {!! Form::open(['url' => url('CreateAdv') , 'files' => true]) !!}

                    @include('adforest.advertisement.form_partials.hidden_fields')
                    <div class="ad-box margin-top-10">
                        <h1>@lang('advertisement.general')</h1>
                        <hr>
                        <div class="form-group @if ($errors->has('title')) has-error @endif">
                            {!! Form::text('title', old('title'), ['placeholder' => __('advertisement.title'), 'class' => 'form-control margin-top-10']) !!}
                            @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group @if ($errors->has('price')) has-error @endif">
                                    {!! Form::text('price',  old('price'), ['placeholder' => __('advertisement.price'), 'class' => 'form-control margin-top-10']) !!}
                                    @if ($errors->has('price'))
                                        <span class="text-danger">{{ $errors->first('price') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group @if ($errors->has('currency_id')) has-error @endif">
                                    {!! Form::select('currency_id', \App\Models\Constant::where('key', '=', 'currency')->pluck('value', 'id'),  old('currency_id'), ['placeholder' => __('advertisement.currency_id'), 'class' => 'form-control margin-top-10 required']) !!}
                                    @if ($errors->has('currency_id'))
                                        <span class="text-danger">{{ $errors->first('currency_id') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group @if ($errors->has('mobile')) has-error @endif">
                            {!! Form::text('mobile',   old('mobile'), ['placeholder' => __('advertisement.mobile'), 'class' => 'form-control margin-top-10']) !!}
                            @if ($errors->has('mobile'))
                                <span class="text-danger">{{ $errors->first('mobile') }}</span>
                            @endif
                        </div>
                        <div class="form-group @if ($errors->has('phone')) has-error @endif">
                            {!! Form::text('phone', old('phone'), ['placeholder' => __('advertisement.phone'), 'class' => 'form-control margin-top-10']) !!}
                            @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                        <div class="form-group @if ($errors->has('details')) has-error @endif">
                            {!! Form::textarea('details', old('details'), ['placeholder' => __('advertisement.details'), 'class' => 'form-control margin-top-10']) !!}
                            @if ($errors->has('details'))
                                <span class="text-danger">{{ $errors->first('details') }}</span>
                            @endif
                        </div>
                    </div>

                    @role('business user')
                    <div class="ad-box margin-top-10">
                        <h1>@lang('advertisement.video')</h1>
                        <hr>
                        <div class="form-group @if ($errors->has('video_url')) has-error @endif">
                            {!! Form::text('video_url', old('video_url'), ['placeholder' => __('advertisement.video_url'), 'class' => 'form-control margin-top-10']) !!}
                            @if ($errors->has('video_url'))
                                <span class="text-danger">{{ $errors->first('video_url') }}</span>
                            @endif
                        </div>
                    </div>
                    @endrole

                    {{-- Properties Partial Block --}}
                    @include('adforest.advertisement.form_partials.properties')
                    {{-- End Properties Partial Block --}}

                    {{-- Ad Image Partial Block --}}
                    @include('adforest.advertisement.form_partials.image')
                    {{-- End Ad Image Partial Block --}}

                    {{-- Features Partial Block --}}
                    @include('adforest.advertisement.form_partials.features')
                    {{-- End Features Partial Block --}}

                    {{-- Locate On Map Partial Block --}}
                    @include('adforest.advertisement.form_partials.locate')
                    {{-- End Locate On Map Partial Block --}}

                    {{-- Hot Selling Partial Block --}}
                    @include('adforest.advertisement.form_partials.hotselling')
                    {{-- End Hot Selling Partial Block --}}

                    {{-- Billing Partial Block --}}
                    <div id="billing">
                        @include('adforest.advertisement.form_partials.billing')
                    </div>
                    {{-- End Billing Partial Block --}}

                    <hr>

                    <div>
                        <button href="#" class="btn btn-success pull-right">@lang('advertisement.submit')</button>
                    </div>
                </div>
                <div class="col-md-2">
                </div>

                <div class="clearfix"></div>

            </div>
    </div>

    </section>
    </div>
@endsection

@section('custom_js')
    @include('adforest.advertisement.form_partials.custom_js')
@endsection