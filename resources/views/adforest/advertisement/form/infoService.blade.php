@extends('adforest.layout.oldmaster')

@section('template_title', __('advertisement.heading_title'))

@section('breadcrumbs')
    @include('adforest.partials.breadcrumbs', ['breadcrumbs' => isset($breadcrumbs) ? $breadcrumbs : []])
@endsection

@section('content')
    <section class="section-padding gray">
        <div class="container">
            <div class="row">
                {!! Form::open(['url' => url('CreateService'), 'files' => true]) !!}
                {!! Form::hidden('category_id', $category_id) !!}
                <div class="ad-box">
                    <h3>@lang('advertisement.general')</h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="form-group @if ($errors->has('title')) has-error @endif">
                                {!! Form::text('title', old('title'), ['placeholder' => __('advertisement.title'), 'class' => 'form-control margin-top-10']) !!}
                                @if ($errors->has('title'))
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('advertiser_name')) has-error @endif">
                                {!! Form::text('advertiser_name', old('advertiser_name'), ['placeholder' => __('advertisement.advertiser_name'), 'class' => 'form-control margin-top-10']) !!}
                                @if ($errors->has('advertiser_name'))
                                    <span class="text-danger">{{ $errors->first('advertiser_name') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('email')) has-error @endif">
                                {!! Form::text('email', old('email'), ['placeholder' => __('advertisement.email'), 'class' => 'form-control margin-top-10']) !!}
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('mobile_no')) has-error @endif">
                                {!! Form::text('mobile_no', old('mobile_no'), ['placeholder' => __('advertisement.mobile_no'), 'class' => 'form-control margin-top-10']) !!}
                                @if ($errors->has('mobile_no'))
                                    <span class="text-danger">{{ $errors->first('mobile_no') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('phone_no')) has-error @endif">
                                {!! Form::text('phone_no', old('phone_no'), ['placeholder' => __('advertisement.phone_no'), 'class' => 'form-control margin-top-10']) !!}
                                @if ($errors->has('phone_no'))
                                    <span class="text-danger">{{ $errors->first('phone_no') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('details')) has-error @endif">
                                {!! Form::textarea('details', old('details'), ['placeholder' => __('advertisement.details'), 'class' => 'form-control margin-top-10', 'rows' => 5]) !!}
                                @if ($errors->has('details'))
                                    <span class="text-danger">{{ $errors->first('details') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="ad-box margin-top-10">
                    <h3>@lang('advertisement.Services')</h3>
                    <hr>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="form-group @if ($errors->has('my_services')) has-error @endif">
                                {!! Form::textarea('my_services', old('my_services'), ['placeholder' => __('advertisement.my_services'), 'class' => 'form-control margin-top-10', 'rows' => '5']) !!}
                                @if ($errors->has('my_services'))
                                    <span class="text-danger">{{ $errors->first('my_services') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ad-box margin-top-10">
                    <h3 class="moon">@lang('advertisement.cost_of_services')</h3>
                    <hr>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-7" style="padding: 0 5px !important;">
                                    {!! Form::text('cost_of_services[1][service_title]', old('cost_of_services[1][service_title]'), ['placeholder' => __('advertisement.service'), 'class' => 'form-control margin-top-10']) !!}
                                </div>
                                <div class="col-md-3" style="padding: 0 5px !important;">
                                    {!! Form::text('cost_of_services[1][service_cost]', old('cost_of_services[1][service_cost]'), ['placeholder' => __('advertisement.service_cost'), 'class' => 'form-control margin-top-10']) !!}
                                </div>
                                <div class="col-md-2" style="padding: 0 5px !important;">
                                    {!! Form::select('cost_of_services[1][currency_id]', \App\Models\Constant::where('key', '=', 'currency')->pluck('value', 'id'),  old('cost_of_services[1][currency_id]'), ['placeholder' => __('advertisement.currency_id'), 'class' => 'form-control margin-top-10 required']) !!}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

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