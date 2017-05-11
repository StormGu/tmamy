@extends('adforest.layout.master')

@section('template_title', __('advertisement.heading_title'))

@section('breadcrumbs')
    @include('adforest.partials.breadcrumbs', ['breadcrumbs' => isset($breadcrumbs) ? $breadcrumbs : []])
@endsection

@section('content')

    <section class="section-padding gray">
        <div class="container">
            <div class="row">
                <div class="ad-box">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8">
                        {!! Form::open(['url' => url('CreateAdv'), 'files' => true]) !!}
                        {!! Form::hidden('category_id', $category_id) !!}
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

                        @if ($additional_info)
                            {!! $additional_info !!}
                        @endif

                        @if($properties->count())
                            <hr>
                            <h1>@lang('advertisement.properties')</h1>
                            <hr>
                            @foreach($properties as $property)
                                <div class="form-group @if ($errors->has($property->name)) has-error @endif">
                                    @if ($property->type == 'text')
                                        {!! Form::text('properties[' . $property->name . ']', null, ['placeholder' => $property->label, 'class' => 'form-control margin-top-10']) !!}
                                    @elseif($property->type == 'select')
                                        {!! Form::select('properties[' . $property->name . ']', \App\Models\Constant::where('key', '=', $property->key)->pluck('value', 'id'), null, ['placeholder' => $property->label, 'class' => 'form-control margin-top-10']) !!}
                                    @endif
                                    @if ($errors->has($property->name))
                                        <span class="text-danger">{{ $errors->first($property->name) }}</span>
                                    @endif
                                </div>
                            @endforeach
                        @endif

                        <hr>
                        <h1>@lang('advertisement.image')</h1>
                        <hr>

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

                        @if($features->count())
                            <hr>
                            <h1>@lang('advertisement.features')</h1>
                            <hr>
                            @foreach($features as $feature)
                                <div class="form-group">
                                    <h2>{{ $feature->name }}</h2>
                                    @foreach(\App\Models\FeatureList::whereParentId($feature->id)->get() as $child)
                                        <div class="col-md-6">{!! Form::checkbox('features[]', $child->id) !!} {{ $child->name }}</div>
                                        @if($loop->iteration % 2 == 0)
                                            <div class="clearfix"></div>
                                        @endif
                                    @endforeach
                                </div>
                            @endforeach
                        @endif

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
                                <td>300</td>
                            </tr>
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
                        <hr>
                        <br><br>

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
@endsection