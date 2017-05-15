@extends('adforest.layout.master')

@section('content')
    @foreach($user_msg as $key)
    <div class="panel panel-default">
        <div class="panel-body">
            {{ $key->messages }}
        </div>
        <div class="panel-footer"></div>
    </div>
    @endforeach
    @endsection