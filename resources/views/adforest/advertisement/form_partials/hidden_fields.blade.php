{!! Form::hidden('category_id', $category_id) !!}

@if(Request::get('store_id') || old('store_id'))
    {!! Form::hidden('store_id', (old('store_id')) ? old('store_id'): Request::get('store_id')) !!}
@endif
