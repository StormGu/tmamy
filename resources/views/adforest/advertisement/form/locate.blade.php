<div class="row">
    <div class="col-md-12">
        <div align="center" style="width: 100%; height: 400px;">
            {!! Mapper::render() !!}
        </div>
    </div>
</div>

{!! Form::hidden('lon', old('lon'), ['id' => 'hdnLon']) !!}
{!! Form::hidden('lat', old('lat'), ['id' => 'hdnLat']) !!}
@if ($errors->has('lon') || $errors->has('lon'))
    <span class="text-danger">{{ $errors->first('lon') }}</span>
@endif