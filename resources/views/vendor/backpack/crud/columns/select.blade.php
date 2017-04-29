{{-- single relationships (1-1, 1-n) --}}
<td>
    @if ($entry->{$column['entity']})
    {{ $entry->{$column['entity']}->{$column['attribute']} }}
    @endif
</td>