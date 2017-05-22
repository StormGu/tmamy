<div class="ad-box margin-top-10">
    <h1>@lang('advertisement.hotselling')</h1>
    <hr>
    <div class="col-md-2"></div>
    <div class="col-md-8">
        @if(\Request::input('hot') == 1) {!! Form::checkbox('hotselling', 1 , ['checked' => 'checked']) !!} @else  {!! Form::checkbox('hotselling', 1 ) !!} @endif @lang('advertisement.hotselling')
    </div>
    <div class="col-md-2"></div>
    <div class="clearfix"></div>
</div>