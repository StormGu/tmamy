@extends('adforest.layout.master')

@section('template_title', __('advertisement.heading_title'))

@section('breadcrumbs')
    @include('adforest.partials.breadcrumbs', ['breadcrumbs' => isset($breadcrumbs) ? $breadcrumbs : []])
@endsection

@section('content')
    <section class="section-padding gray">
        <div class="container">
            <div class="row">
                {!! Form::open(['url' => url('CreateExhibition'), 'files' => true]) !!}

                @include('adforest.advertisement.form_partials.hidden_fields')

                <div class="ad-box">
                    <h3>@lang('advertisement.general')</h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="form-group @if ($errors->has('title')) has-error @endif">
                                {!! Form::text('title', old('title'), ['placeholder' => __('advertisement.title'), 'class' => 'form-control']) !!}
                                @if ($errors->has('title'))
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('interval')) has-error @endif">
                                {!! Form::select('interval', \App\Models\Constant::where('key', '=', 'interval')->pluck('value', 'id'),  old('interval'), ['placeholder' => __('advertisement.interval'), 'class' => 'form-control']) !!}
                                @if ($errors->has('interval'))
                                    <span class="text-danger">{{ $errors->first('interval') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('founded_date')) has-error @endif">
                                {!! Form::text('founded_date', old('founded_date'), ['placeholder' => __('advertisement.founded_date'), 'class' => 'form-control']) !!}
                                @if ($errors->has('founded_date'))
                                    <span class="text-danger">{{ $errors->first('founded_date') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('details')) has-error @endif">
                                {!! Form::textarea('details', old('details'), ['placeholder' => __('advertisement.details'), 'class' => 'form-control']) !!}
                                @if ($errors->has('details'))
                                    <span class="text-danger">{{ $errors->first('details') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="ad-box margin-top-10">
                    <h3>@lang('advertisement.exhibition_info')</h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="form-group @if ($errors->has('venue_country_id')) has-error @endif">
                                {!! Form::select('venue_country_id', \App\Models\Country::pluck('name', 'id'),  old('venue_country_id'), ['placeholder' => __('advertisement.venue_country_id'), 'class' => 'form-control']) !!}
                                @if ($errors->has('venue_country_id'))
                                    <span class="text-danger">{{ $errors->first('venue_country_id') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('venue_name')) has-error @endif">
                                {!! Form::text('venue_name', old('venue_name'), ['placeholder' => __('advertisement.venue_name'), 'class' => 'form-control']) !!}
                                @if ($errors->has('venue_name'))
                                    <span class="text-danger">{{ $errors->first('venue_name') }}</span>
                                @endif
                            </div>
                            <div class="row" style="padding: 0 10px;">
                                <div class="col-md-6" style="padding: 0 5px !important;">
                                    <div class="form-group @if ($errors->has('start_date')) has-error @endif">
                                        {!! Form::text('start_date', old('start_date'), ['placeholder' => __('advertisement.start_date'), 'class' => 'form-control']) !!}
                                        @if ($errors->has('start_date'))
                                            <span class="text-danger">{{ $errors->first('start_date') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding: 0 5px !important;">
                                    <div class="form-group @if ($errors->has('end_date')) has-error @endif">
                                        {!! Form::text('end_date', old('end_date'), ['placeholder' => __('advertisement.end_date'), 'class' => 'form-control']) !!}
                                        @if ($errors->has('end_date'))
                                            <span class="text-danger">{{ $errors->first('end_date') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="padding: 0 10px;">
                                <div class="col-md-6" style="padding: 0 5px !important;">
                                    <div class="form-group @if ($errors->has('from_time')) has-error @endif">
                                        {!! Form::text('from_time', old('from_time'), ['placeholder' => __('advertisement.from_time'), 'class' => 'form-control']) !!}
                                        @if ($errors->has('from_time'))
                                            <span class="text-danger">{{ $errors->first('from_time') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding: 0 5px !important;">
                                    <div class="form-group @if ($errors->has('to_time')) has-error @endif">
                                        {!! Form::text('to_time', old('to_time'), ['placeholder' => __('advertisement.to_time'), 'class' => 'form-control']) !!}
                                        @if ($errors->has('to_time'))
                                            <span class="text-danger">{{ $errors->first('to_time') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding: 0 10px;">
                                <div class="col-md-6" style="padding: 0 5px !important;">
                                    <div class="form-group @if ($errors->has('currency_id')) has-error @endif">
                                        {!! Form::select('currency_id', \App\Models\Constant::where('key', '=', 'currency')->pluck('value', 'id'),  old('currency_id'), ['placeholder' => __('advertisement.currency_id'), 'class' => 'form-control']) !!}
                                        @if ($errors->has('currency_id'))
                                            <span class="text-danger">{{ $errors->first('currency_id') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding: 0 5px !important;">
                                    <div class="form-group @if ($errors->has('space')) has-error @endif">
                                        {!! Form::select('space', \App\Models\Constant::where('key', '=', 'space')->pluck('value', 'id'),  old('space'), ['placeholder' => __('advertisement.space'), 'class' => 'form-control']) !!}
                                        @if ($errors->has('space'))
                                            <span class="text-danger">{{ $errors->first('space') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding: 0 10px;">
                                <div class="col-md-6" style="padding: 0 5px !important;">
                                    <div class="form-group @if ($errors->has('from_price')) has-error @endif">
                                        {!! Form::text('from_price', old('from_price'), ['placeholder' => __('advertisement.from_price'), 'class' => 'form-control']) !!}
                                        @if ($errors->has('from_price'))
                                            <span class="text-danger">{{ $errors->first('from_price') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding: 0 5px !important;">
                                    <div class="form-group @if ($errors->has('to_price')) has-error @endif">
                                        {!! Form::text('to_price', old('to_price'), ['placeholder' => __('advertisement.to_price'), 'class' => 'form-control']) !!}
                                        @if ($errors->has('to_price'))
                                            <span class="text-danger">{{ $errors->first('to_price') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                {{-- Ad Image Partial Block --}}
                @include('adforest.advertisement.form_partials.image')
                {{-- End Ad Image Partial Block --}}

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
                <div>
                    <button href="#" class="btn btn-success pull-right">@lang('advertisement.submit')</button>
                </div>
                {!! Form::close() !!}
            </div>
    </section>

@endsection

@section('custom_js')
    @include('adforest.advertisement.form_partials.custom_js')
@endsection