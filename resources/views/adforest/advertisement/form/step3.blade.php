@extends('adforest.layout.oldmaster')

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
                    {!! Form::open(['url' => url('CreateAdv'), 'files' => true]) !!}
                    {!! Form::hidden('category_id', $category_id) !!}
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

                    @if ($additional_info)
                        {!! $additional_info !!}
                    @endif

                    @if($properties->count())
                        <div class="ad-box margin-top-10">

                            <h1>@lang('advertisement.properties')</h1>
                            <hr>
                            @foreach($properties as $property)
                                <div class="form-group @if ($errors->has($property->name)) has-error @endif">
                                    @if ($property->type == 'text')
                                        {!! Form::text('properties[' . $property->id . ']', null, ['placeholder' => $property->label, 'class' => 'form-control margin-top-10']) !!}
                                    @elseif($property->type == 'select')
                                        {!! Form::select('properties[' . $property->id . ']', \App\Models\ListOfValueDetail::where('parent_id', '=', $property->key)->pluck('title', 'id'), null, ['placeholder' => $property->label, 'class' => 'form-control margin-top-10']) !!}
                                    @endif
                                    @if ($errors->has($property->name))
                                        <span class="text-danger">{{ $errors->first($property->name) }}</span>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <div class="ad-box margin-top-10">
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
                    </div>

                    @if($features->count())
                        <div class="ad-box margin-top-10">
                            <h1>@lang('advertisement.features')</h1>
                            <hr>
                            @foreach($features as $feature)
                                <div class="form-group">
                                    <h4>{{ $feature->name }}</h4>
                                    @foreach(\App\Models\Feature::whereParentId($feature->id)->get() as $child)
                                        <div class="col-md-6">{!! Form::checkbox('features[]', $child->id) !!} {{ $child->name }}</div>
                                        @if($loop->iteration % 2 == 0)
                                            <div class="clearfix"></div>
                                        @endif
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <div class="ad-box margin-top-10">
                        <h1>@lang('advertisement.map')</h1>
                        <hr>
                        @include('adforest.advertisement.form.locate')
                    </div>

                    <div class="ad-box margin-top-10">
                        <h1>@lang('advertisement.hotselling')</h1>
                        <hr>
                        <div class="form-group">
                            <div class="col-md-12">@if(\Request::input('hot') == 1) {!! Form::checkbox('hotselling', 1 , ['checked' => 'checked']) !!} @else  {!! Form::checkbox('hotselling', 1 ) !!} @endif @lang('advertisement.hotselling')</div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="ad-box margin-top-10" id="billing">
                        @include('adforest.advertisement.form.billing')
                    </div>
                    @if ($errors->has('after_points'))
                        <span class="text-danger">{!! $errors->first('after_points') !!}</span>
                    @endif
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
    <script type="text/javascript">
        $(function () {
            $(document).on('change', "input[name='hotselling']", function () {
                var query = '?';

                if ($(this).is(':checked')) {
                    query += 'hot=1'
                }
                $.get("{{ url('AddAdv/billing') }}" + query, function (data) {
                    $("#billing").html(data);
                    alert("Load was performed.");
                });
            });
        });

    </script>
@endsection