@if(Session::has('message'))
    @php $message = Session::get('message') @endphp
    <div class="alert alert-{{ $message['type'] }}">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        {!! $message['message'] !!}
    </div>
@endif