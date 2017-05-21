@extends('adforest.layout.oldmaster')

@section('template_title', __('advertisement.heading_title'))

@section('breadcrumbs')
    @include('adforest.partials.breadcrumbs', ['breadcrumbs' => isset($breadcrumbs) ? $breadcrumbs : []])
@endsection

@section('content')
    <section class="section-padding gray">
        <div class="container">
            <div class="row">
                {!! Form::open(['url' => url('CreateWholesale'), 'files' => true]) !!}
                {!! Form::hidden('category_id', $category_id) !!}
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
                            <div class="row" style="padding: 0 10px;">
                                <div class="col-md-5" style="padding: 0 5px !important;">
                                    <div class="form-group @if ($errors->has('price')) has-error @endif">
                                        {!! Form::text('price', old('price'), ['placeholder' => __('advertisement.price'), 'class' => 'form-control']) !!}
                                        @if ($errors->has('price'))
                                            <span class="text-danger">{{ $errors->first('price') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-5" style="padding: 0 5px !important;">
                                    <div class="form-group @if ($errors->has('price_to')) has-error @endif">
                                        {!! Form::text('price_to', old('price_to'), ['placeholder' => __('advertisement.price_to'), 'class' => 'form-control']) !!}
                                        @if ($errors->has('price_to'))
                                            <span class="text-danger">{{ $errors->first('price_to') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2" style="padding: 0 5px !important;">
                                    <div class="form-group @if ($errors->has('currency_id')) has-error @endif">
                                        {!! Form::select('currency_id', \App\Models\Constant::where('key', '=', 'currency')->pluck('value', 'id'),  old('currency_id'), ['placeholder' => __('advertisement.currency_id'), 'class' => 'form-control']) !!}
                                        @if ($errors->has('currency_id'))
                                            <span class="text-danger">{{ $errors->first('currency_id') }}</span>
                                        @endif
                                    </div>
                                </div>
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
                            <div class="form-group @if ($errors->has('min_quantity')) has-error @endif">
                                {!! Form::text('min_quantity', old('min_quantity'), ['placeholder' => __('advertisement.min_quantity'), 'class' => 'form-control']) !!}
                                @if ($errors->has('min_quantity'))
                                    <span class="text-danger">{{ $errors->first('min_quantity') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('term_delivery_id')) has-error @endif">
                                {!! Form::select('term_delivery_id', \App\Models\Constant::where('key', '=', 'term_delivery')->pluck('value', 'id'),  old('term_delivery_id'), ['placeholder' => __('advertisement.term_delivery_id'), 'class' => 'form-control']) !!}
                                @if ($errors->has('term_delivery_id'))
                                    <span class="text-danger">{{ $errors->first('term_delivery_id') }}</span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('details')) has-error @endif">
                                {!! Form::textarea('details', old('details'), ['placeholder' => __('advertisement.details'), 'class' => 'form-control', 'rows' => 5]) !!}
                                @if ($errors->has('details'))
                                    <span class="text-danger">{{ $errors->first('details') }}</span>
                                @endif
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                @if($properties->count())
                    <div class="ad-box margin-top-10">

                        <h1>@lang('advertisement.properties')</h1>
                        <hr>
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
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
                        <div class="col-md-2"></div>
                        <div class="clearfix"></div>
                    </div>
                @endif

                <div class="ad-box margin-top-10">
                    <h1>@lang('advertisement.image')</h1>
                    <hr>
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
                    <div class="col-md-2"></div>
                    <div class="clearfix"></div>
                </div>

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

                <div>
                    <button href="#" class="btn btn-success pull-right">@lang('advertisement.submit')</button>
                </div>
                {!! Form::close() !!}
            </div>
    </section>


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