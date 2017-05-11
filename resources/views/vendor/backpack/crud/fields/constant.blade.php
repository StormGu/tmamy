<!-- select -->

<div @include('crud::inc.field_wrapper_attributes') >

    <label>{!! $field['label'] !!}</label>
    @include('crud::inc.field_translatable_icon')
    <?php $entity_model = $crud->model; ?>
    <select
        name="{{ $field['name'] }}"
        @include('crud::inc.field_attributes')
        >

        @if ($entity_model::isColumnNullable($field['name']))
            <option value="">-</option>
        @endif

            @if (isset($field['model']))
                @foreach ($field['model']::get()->pluck('key', 'key') as $key => $value)
                    <option value="{{$key}}">
                        {{ $value }}
                    </option>
                @endforeach
            @endif
    </select>

    {{-- HINT --}}
    @if (isset($field['hint']))
        <p class="help-block">{!! $field['hint'] !!}</p>
    @endif

</div>