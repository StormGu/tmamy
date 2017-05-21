@extends('adforest.layout.oldmaster')

@section('template_title', __('advertisement.heading_title'))

@section('breadcrumbs')
    @include('adforest.partials.breadcrumbs', ['breadcrumbs' => isset($breadcrumbs) ? $breadcrumbs : []])
@endsection

@section('content')
    <section class="section-padding gray">
        <div class="container">
            <div class="row">
                {!! Form::open(['url' => url('CreateRestaurant'), 'files' => true]) !!}
                {!! Form::hidden('category_id', $category_id) !!}
                <div class="ad-box margin-top-10">
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
                            <div class="form-group @if ($errors->has('details')) has-error @endif">
                                {!! Form::textarea('details', old('details'), ['rows' => '5', 'placeholder' => __('advertisement.meals'), 'class' => 'form-control margin-top-10']) !!}
                                @if ($errors->has('details'))
                                    <span class="text-danger">{{ $errors->first('details') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="ad-box margin-top-10">
                    <h3>@lang('advertisement.location')</h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="form-group @if ($errors->has('address_main')) has-error @endif">
                                {!! Form::text('address_main', old('address_main'), ['placeholder' => __('advertisement.address_main'), 'class' => 'form-control margin-top-10']) !!}
                                @if ($errors->has('address_main'))
                                    <span class="text-danger">{{ $errors->first('address_main') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('address_details')) has-error @endif">
                                {!! Form::text('address_details',  old('address_details'), ['placeholder' => __('advertisement.address_details'), 'class' => 'form-control margin-top-10']) !!}
                                @if ($errors->has('address_details'))
                                    <span class="text-danger">{{ $errors->first('address_details') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('phone_no')) has-error @endif">
                                {!! Form::text('phone_no',  old('phone_no'), ['placeholder' => __('advertisement.phone_no'), 'class' => 'form-control margin-top-10']) !!}
                                @if ($errors->has('phone_no'))
                                    <span class="text-danger">{{ $errors->first('phone_no') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('fax')) has-error @endif">
                                {!! Form::text('fax',  old('fax'), ['placeholder' => __('advertisement.fax'), 'class' => 'form-control margin-top-10']) !!}
                                @if ($errors->has('fax'))
                                    <span class="text-danger">{{ $errors->first('fax') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('web')) has-error @endif">
                                {!! Form::text('web',  old('web'), ['placeholder' => __('advertisement.web'), 'class' => 'form-control margin-top-10']) !!}
                                @if ($errors->has('web'))
                                    <span class="text-danger">{{ $errors->first('web') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('email')) has-error @endif">
                                {!! Form::text('email',  old('email'), ['placeholder' => __('advertisement.email'), 'class' => 'form-control margin-top-10']) !!}
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="ad-box margin-top-10">
                    <h3>@lang('advertisement.restaurants')</h3>
                    <hr>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="form-group @if ($errors->has('resturant_details')) has-error @endif">
                                {!! Form::textarea('resturant_details', old('resturant_details'), ['placeholder' => __('advertisement.resturant_details'), 'class' => 'form-control margin-top-10', 'rows' => '5']) !!}
                                @if ($errors->has('resturant_details'))
                                    <span class="text-danger">{{ $errors->first('resturant_details') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ad-box margin-top-10">
                    <h3>@lang('advertisement.pic')</h3>
                    <hr>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">
                                <div class="input-group">
                                <span class="input-group-btn">
                                <span class="btn btn-default btn-file">
                                @lang('profile.Browse') <input name="image" type="file" id="imgInp"
                                                               value="{{old('image')}}">
                                </span>
                                </span>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                @if ($errors->has('image'))
                                    <span class="text-danger">{{ $errors->first('image') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ad-box margin-top-10">
                    <h1>@lang('advertisement.Address')</h1>
                    <hr>
                    @include('adforest.advertisement.form.locate')
                </div>
                <div class="ad-box margin-top-10">
                    <hr>
                    <h1>@lang('advertisement.billing')</h1>
                    <hr>
                    <h3>@lang('advertisement.points')</h3>
                    <table class="table table-responsive">
                        <thead>
                        <tr>
                            <th></th>
                            <th style="width:30%">@lang('advertisement.points')</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>@lang('advertisement.add_advertisement')</td>
                            <td>{{ config('settings.normal_adv') }}</td>
                        </tr>
                        @if (isset($hot))
                            <tr>
                                <td>@lang('advertisement.hot_advertisement')</td>
                                <td>{{ config('settings.hot_adv') }}</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                    <h3>@lang('advertisement.balance')</h3>
                    <table class="table table-responsive">
                        <thead>
                        <tr>
                            <th>@lang('advertisement.current_balance')</th>
                            <th style="width:30%">{{ $current_points }}</th>
                        </tr>
                        <tr>
                            <th>@lang('advertisement.new_balance')</th>
                            <th><span class="@if($after_points < 0) text-danger @endif"> {{ $after_points }}</span>
                            </th>
                        </tr>
                        </thead>
                    </table>
                    {!! Form::hidden('after_points', $after_points) !!}
                    @if ($errors->has('after_points'))
                        <span class="text-danger">{!! $errors->first('after_points') !!}</span>
                    @endif
                </div>
                <div>
                    <button href="#" class="btn btn-success pull-right">@lang('advertisement.submit')</button>
                </div>
                {!! Form::close() !!}
            </div>
    </section>


@endsection

@section('custom_js')
    <script type="text/javascript">
        function createCompany(event) {
            $('input[name=lat]').val(event.latLng.lat());
            $('input[name=lon]').val(event.latLng.lng());
        }
    </script>
    {!! Mapper::renderJavascript() !!}
@endsection