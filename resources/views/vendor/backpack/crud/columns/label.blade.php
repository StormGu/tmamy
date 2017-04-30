{{-- colored label --}}
@php
    if (array_key_exists($entry->{$column['name']}, $column['colors']))
        $color = $column['colors'][$entry->{$column['name']}];
    else
        $color = 'blue';
@endphp
<td>
    <small class="label bg-{{ $color }}">
        @lang('store.' . $entry->{$column['name']})
    </small>
</td>