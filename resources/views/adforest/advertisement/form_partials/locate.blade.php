<div class="ad-box margin-top-10">

    <h1>@lang('advertisement.map')</h1>
    <hr>
    <div class="col-md-2"></div>
    <div class="col-md-8">
        {!! Mapper::render() !!}
    </div>
    <div class="col-md-2"></div>
    {!! Form::hidden('lon', old('lon'), ['id' => 'hdnLon']) !!}
    {!! Form::hidden('lat', old('lat'), ['id' => 'hdnLat']) !!}
    @if ($errors->has('lon') || $errors->has('lon'))
        <span class="text-danger">{{ $errors->first('lon') }}</span>
    @endif
    <div class="clearfix"></div>
</div>