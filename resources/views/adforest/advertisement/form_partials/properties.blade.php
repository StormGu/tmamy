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