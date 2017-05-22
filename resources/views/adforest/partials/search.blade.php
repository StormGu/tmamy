{{--<div class="search-form">--}}
{{--{!! Form::open(['url' => url('search'), 'id' => 'search-form', 'method' => 'get']) !!}--}}
{{--<div class="categories">--}}
{{--<div class="box-search-select">--}}
{{--<a class="mdl">@lang('common.advanced_saerch')</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--{!! Form::text('keyword', isset($keyword)? $keyword? '', ['placeholder' => __('common.searchPlaceholder')]) !!}--}}

{{--<button type="submit">--}}
{{--<i class="fa fa-search"></i> @lang('common.search')--}}
{{--</button>--}}
{{--{!! Form::close() !!}--}}
{{--</div>--}}
{!! Form::open(['url' => url('search'), 'method' => 'get']) !!}
<div class="search-holder margin-top-30 pull-right" style="min-width: 400px">
    <div id="custom-search-input">
        <div class="input-group col-md-12 col-xs-12 col-sm-12">
            {!! Form::select('keyword', isset($keyword)?$keyword:'', ['placeholder' => __('common.searchPlaceholder'), 'class' => 'form-control']) !!}

            <span class="input-group-btn">
<button class="btn btn-theme" type="button" style="padding: 15px !important;">
<span class=" glyphicon glyphicon-search"></span>
</button>
</span>
        </div>
    </div>
</div>
{!! Form::close() !!}