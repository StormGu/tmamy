@extends('adforest.layout.oldmaster')

@section('template_title', __('advertisement.heading_title'))

@section('breadcrumbs')
    @include('adforest.partials.breadcrumbs', ['breadcrumbs' => isset($breadcrumbs) ? $breadcrumbs : []])
@endsection

@section('content')
    <section class="section-padding gray">
        <div class="container">
            <div class="row">
                {!! Form::open(['url' => url('CreateCareerJob'), 'files' => true]) !!}

                @include('adforest.advertisement.form_partials.hidden_fields')

                <div class="ad-box">
                    <h3>@lang('advertisement.company')</h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="form-group @if ($errors->has('company_name')) has-error @endif">
                                {!! Form::text('company_name', old('company_name'), ['placeholder' => __('advertisement.company_name'), 'class' => 'form-control']) !!}
                                @if ($errors->has('company_name'))
                                    <span class="text-danger">{{ $errors->first('company_name') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('company_address')) has-error @endif">
                                {!! Form::text('company_address', old('company_address'), ['placeholder' => __('advertisement.company_address'), 'class' => 'form-control']) !!}
                                @if ($errors->has('company_address'))
                                    <span class="text-danger">{{ $errors->first('company_address') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('company_phone_no')) has-error @endif">
                                {!! Form::text('company_phone_no', old('company_phone_no'), ['placeholder' => __('advertisement.company_phone_no'), 'class' => 'form-control']) !!}
                                @if ($errors->has('company_phone_no'))
                                    <span class="text-danger">{{ $errors->first('company_phone_no') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('company_website')) has-error @endif">
                                {!! Form::text('company_website', old('company_website'), ['placeholder' => __('advertisement.company_website'), 'class' => 'form-control']) !!}
                                @if ($errors->has('company_website'))
                                    <span class="text-danger">{{ $errors->first('company_website') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('company_size_id')) has-error @endif">
                                {!! Form::select('company_size_id', \App\Models\Constant::where('key', '=', 'company_size')->pluck('value', 'id'),  old('company_size_id'), ['placeholder' => __('advertisement.company_size_id'), 'class' => 'form-control']) !!}
                                @if ($errors->has('company_size_id'))
                                    <span class="text-danger">{{ $errors->first('company_size_id') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('company_over_view')) has-error @endif">
                                {!! Form::textarea('company_over_view', old('company_over_view'), ['placeholder' => __('advertisement.company_over_view'), 'class' => 'form-control', 'rows' => 3]) !!}
                                @if ($errors->has('company_over_view'))
                                    <span class="text-danger">{{ $errors->first('company_over_view') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="ad-box margin-top-10">
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
                            <div class="form-group @if ($errors->has('mobile_no')) has-error @endif">
                                {!! Form::text('mobile_no', old('mobile_no'), ['placeholder' => __('advertisement.mobile_no'), 'class' => 'form-control']) !!}
                                @if ($errors->has('mobile_no'))
                                    <span class="text-danger">{{ $errors->first('mobile_no') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('phone_no')) has-error @endif">
                                {!! Form::text('phone_no', old('phone_no'), ['placeholder' => __('advertisement.phone_no'), 'class' => 'form-control']) !!}
                                @if ($errors->has('phone_no'))
                                    <span class="text-danger">{{ $errors->first('phone_no') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('details')) has-error @endif">
                                {!! Form::textarea('details', old('details'), ['placeholder' => __('advertisement.details'), 'class' => 'form-control', 'rows' => 3]) !!}
                                @if ($errors->has('details'))
                                    <span class="text-danger">{{ $errors->first('details') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="ad-box margin-top-10">
                    <h3>@lang('advertisement.requirements')</h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            @if(null !== old('requirements'))
                                @foreach( old('requirements') as $key => $value)
                                    <div class="form-group @if ($errors->has('requirements['.$key.'][name]')) has-error @endif">
                                        <div class="input-group">
                                            {!! Form::text('requirements['.$key.'][name]', old('requirements['.$key.'][name]'), ['placeholder' => __('advertisement.requirements'), 'class' => 'form-control']) !!}
                                            <span class="input-group-btn">
                                        <button class="btn btn-secondary plus" type="button"
                                                style="padding: 11px 17px !important;font-size: 15pt;">+</button>
                                    </span>
                                        </div>
                                        @if ($errors->has('requirements['.$key.'][name]'))
                                            <span class="text-danger">{{ $errors->first('requirements['.$key.'][name]') }}</span>
                                        @endif
                                    </div>
                                @endforeach
                            @else
                                <div class="form-group @if ($errors->has('requirements[1][name]')) has-error @endif">
                                    <div class="input-group">
                                        {!! Form::text('requirements[1][name]', old('requirements[1][name]'), ['placeholder' => __('advertisement.requirements'), 'class' => 'form-control']) !!}
                                        <span class="input-group-btn">
                                        <button class="btn btn-secondary plus" type="button"
                                                style="padding: 11px 17px !important;font-size: 15pt;">+</button>
                                    </span>
                                    </div>
                                    @if ($errors->has('requirements[1][name]'))
                                        <span class="text-danger">{{ $errors->first('requirements[1][name]') }}</span>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="ad-box margin-top-10">
                    <h3>@lang('advertisement.additional_info')</h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="form-group @if ($errors->has('contact_email')) has-error @endif">
                                {!! Form::text('contact_email', old('contact_email'), ['placeholder' => __('advertisement.contact_email'), 'class' => 'form-control']) !!}
                                @if ($errors->has('contact_email'))
                                    <span class="text-danger">{{ $errors->first('contact_email') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('career_level_id')) has-error @endif">
                                {!! Form::select('career_level_id', \App\Models\Constant::where('key', '=', 'company_size')->pluck('value', 'id'),  old('career_level_id'), ['placeholder' => __('advertisement.career_level_id'), 'class' => 'form-control']) !!}
                                @if ($errors->has('career_level_id'))
                                    <span class="text-danger">{{ $errors->first('career_level_id') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('work_experience_id')) has-error @endif">
                                {!! Form::select('work_experience_id', \App\Models\Constant::where('key', '=', 'work_experience')->pluck('value', 'id'),  old('work_experience_id'), ['placeholder' => __('advertisement.work_experience_id'), 'class' => 'form-control']) !!}
                                @if ($errors->has('work_experience_id'))
                                    <span class="text-danger">{{ $errors->first('work_experience_id') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('education_level_id')) has-error @endif">
                                {!! Form::select('education_level_id', \App\Models\Constant::where('key', '=', 'education_level')->pluck('value', 'id'),  old('education_level_id'), ['placeholder' => __('advertisement.education_level_id'), 'class' => 'form-control']) !!}
                                @if ($errors->has('education_level_id'))
                                    <span class="text-danger">{{ $errors->first('education_level_id') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('employment_status_id')) has-error @endif">
                                {!! Form::select('employment_status_id', \App\Models\Constant::where('key', '=', 'company_size')->pluck('value', 'id'),  old('employment_status_id'), ['placeholder' => __('advertisement.employment_status_id'), 'class' => 'form-control']) !!}
                                @if ($errors->has('employment_status_id'))
                                    <span class="text-danger">{{ $errors->first('employment_status_id') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('gender_id')) has-error @endif">
                                {!! Form::select('gender_id', \App\Models\Constant::where('key', '=', 'gender')->pluck('value', 'id'),  old('gender_id'), ['placeholder' => __('advertisement.gender_id'), 'class' => 'form-control']) !!}
                                @if ($errors->has('gender_id'))
                                    <span class="text-danger">{{ $errors->first('gender_id') }}</span>
                                @endif
                            </div>
                            <div class="row" style="padding: 0 10px;">
                                <div class="col-md-7" style="padding: 0 5px !important;">
                                    {!! Form::text('salary_from', old('salary_from'), ['placeholder' => __('advertisement.salary_from'), 'class' => 'form-control margin-top-10']) !!}
                                </div>
                                <div class="col-md-3" style="padding: 0 5px !important;">
                                    {!! Form::text('salary_to', old('salary_to'), ['placeholder' => __('advertisement.salary_to'), 'class' => 'form-control margin-top-10']) !!}
                                </div>
                                <div class="col-md-2" style="padding: 0 5px !important;">
                                    {!! Form::select('currency_id', \App\Models\Constant::where('key', '=', 'currency')->pluck('value', 'id'),  old('currency_id'), ['placeholder' => __('advertisement.currency_id'), 'class' => 'form-control margin-top-10 required']) !!}
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                {{-- Properties Partial Block --}}
                @include('adforest.advertisement.form_partials.features')
                {{-- End Properties Partial Block --}}

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