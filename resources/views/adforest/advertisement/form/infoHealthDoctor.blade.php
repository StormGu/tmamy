@extends('adforest.layout.master')

@section('template_title', __('advertisement.heading_title'))

@section('breadcrumbs')
    @include('adforest.partials.breadcrumbs', ['breadcrumbs' => isset($breadcrumbs) ? $breadcrumbs : []])
@endsection

@section('content')
    <section class="section-padding gray">
        <div class="container">
            <div class="row">
                {!! Form::open(['url' => url('CreateHealthDoctor'), 'files' => true]) !!}

                @include('adforest.advertisement.form_partials.hidden_fields')

                <div class="ad-box">
                    <h3>@lang('advertisement.general')</h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="row" style="padding: 0 10px;">
                                <div class="col-md-3" style="padding: 0 5px !important;">
                                    <div class="form-group @if ($errors->has('degree_short')) has-error @endif">
                                        {!! Form::select('degree_short', \App\Models\Constant::where('key', '=', 'degree_short')->pluck('value', 'id'),  old('degree_short'), ['placeholder' => __('advertisement.degree_short'), 'class' => 'form-control']) !!}
                                        @if ($errors->has('degree_short'))
                                            <span class="text-danger">{{ $errors->first('degree_short') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-9" style="padding: 0 5px !important;">
                                    <div class="form-group @if ($errors->has('title')) has-error @endif">
                                        {!! Form::text('title', old('title'), ['placeholder' => __('advertisement.doctor_name'), 'class' => 'form-control']) !!}
                                        @if ($errors->has('title'))
                                            <span class="text-danger">{{ $errors->first('title') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="form-group @if ($errors->has('practice_name')) has-error @endif">
                                {!! Form::text('practice_name', old('practice_name'), ['placeholder' => __('advertisement.practice_name'), 'class' => 'form-control']) !!}
                                @if ($errors->has('practice_name'))
                                    <span class="text-danger">{{ $errors->first('practice_name') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('specialization')) has-error @endif">
                                {!! Form::text('specialization', old('specialization'), ['placeholder' => __('advertisement.specialization'), 'class' => 'form-control']) !!}
                                @if ($errors->has('specialization'))
                                    <span class="text-danger">{{ $errors->first('specialization') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('email')) has-error @endif">
                                {!! Form::text('email', old('email'), ['placeholder' => __('advertisement.email'), 'class' => 'form-control']) !!}
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
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
                                {!! Form::textarea('details', old('details'), ['placeholder' => __('advertisement.about_doctor'), 'class' => 'form-control', 'rows' => 3]) !!}
                                @if ($errors->has('details'))
                                    <span class="text-danger">{{ $errors->first('details') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="ad-box margin-top-10">
                    <h3>@lang('advertisement.clinics')</h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="form-group @if ($errors->has('clinic[1][clinic_name]')) has-error @endif">
                                {!! Form::text('clinic[1][clinic_name]', old('clinic[1][clinic_name]'), ['placeholder' => __('advertisement.clinic_name'), 'class' => 'form-control']) !!}
                                @if ($errors->has('clinic[1][clinic_name]'))
                                    <span class="text-danger">{{ $errors->first('clinic[1][clinic_name]') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('clinic[1][clinic_mobile_no]')) has-error @endif">
                                {!! Form::text('clinic[1][clinic_mobile_no]', old('clinic[1][clinic_mobile_no]'), ['placeholder' => __('advertisement.clinic_mobile_no'), 'class' => 'form-control']) !!}
                                @if ($errors->has('clinic[1][clinic_mobile_no]'))
                                    <span class="text-danger">{{ $errors->first('clinic[1][clinic_mobile_no]') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('clinic[1][clinic_phone_no]')) has-error @endif">
                                {!! Form::text('clinic[1][clinic_phone_no]', old('clinic[1][clinic_phone_no]'), ['placeholder' => __('advertisement.clinic_phone_no'), 'class' => 'form-control']) !!}
                                @if ($errors->has('clinic[1][clinic_phone_no]'))
                                    <span class="text-danger">{{ $errors->first('clinic[1][clinic_phone_no]') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('clinic[1][address]')) has-error @endif">
                                {!! Form::text('clinic[1][address]', old('clinic[1][address]'), ['placeholder' => __('advertisement.address'), 'class' => 'form-control']) !!}
                                @if ($errors->has('clinic[1][address]'))
                                    <span class="text-danger">{{ $errors->first('clinic[1][address]') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="ad-box margin-top-10">
                    <h3>@lang('advertisement.education')</h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="form-group @if ($errors->has('educations[1][college_name]')) has-error @endif">
                                {!! Form::text('educations[1][college_name]', old('educations[1][college_name]'), ['placeholder' => __('advertisement.college_name'), 'class' => 'form-control']) !!}
                                @if ($errors->has('educations[1][college_name]'))
                                    <span class="text-danger">{{ $errors->first('educations[1][college_name]') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('educations[1][start_date]')) has-error @endif">
                                {!! Form::text('educations[1][start_date]', old('educations[1][start_date]'), ['placeholder' => __('advertisement.start_date'), 'class' => 'form-control']) !!}
                                @if ($errors->has('educations[1][start_date]'))
                                    <span class="text-danger">{{ $errors->first('educations[1][start_date]') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('educations[1][end_date]')) has-error @endif">
                                {!! Form::text('educations[1][end_date]', old('educations[1][end_date]'), ['placeholder' => __('advertisement.end_date'), 'class' => 'form-control']) !!}
                                @if ($errors->has('educations[1][end_date]'))
                                    <span class="text-danger">{{ $errors->first('educations[1][end_date]') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('educations[1][description]')) has-error @endif">
                                {!! Form::textarea('educations[1][description]', old('educations[1][description]'), ['placeholder' => __('advertisement.description'), 'class' => 'form-control', 'rows' => 3]) !!}
                                @if ($errors->has('educations[1][description]'))
                                    <span class="text-danger">{{ $errors->first('educations[1][description]') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="ad-box margin-top-10">
                    <h3>@lang('advertisement.memberships')</h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            @if(null !== old('memberships'))
                                @foreach( old('memberships') as $key => $value)
                                    <div class="form-group @if ($errors->has('memberships['.$key.'][name]')) has-error @endif">
                                        <div class="input-group">
                                            {!! Form::text('memberships['.$key.'][name]', old('memberships['.$key.'][name]'), ['placeholder' => __('advertisement.memberships'), 'class' => 'form-control']) !!}
                                            <span class="input-group-btn">
                                        <button class="btn btn-secondary plus" type="button"
                                                style="padding: 11px 17px !important;font-size: 15pt;">+</button>
                                    </span>
                                        </div>
                                        @if ($errors->has('memberships['.$key.'][name]'))
                                            <span class="text-danger">{{ $errors->first('memberships['.$key.'][name]') }}</span>
                                        @endif
                                    </div>
                                @endforeach
                            @else
                                <div class="form-group @if ($errors->has('memberships[1][name]')) has-error @endif">
                                    <div class="input-group">
                                        {!! Form::text('memberships[1][name]', old('memberships[1][name]'), ['placeholder' => __('advertisement.memberships'), 'class' => 'form-control']) !!}
                                        <span class="input-group-btn">
                                        <button class="btn btn-secondary plus" type="button"
                                                style="padding: 11px 17px !important;font-size: 15pt;">+</button>
                                    </span>
                                    </div>
                                    @if ($errors->has('memberships[1][name]'))
                                        <span class="text-danger">{{ $errors->first('memberships[1][name]') }}</span>
                                    @endif
                                </div>
                            @endif
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