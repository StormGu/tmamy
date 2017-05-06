<div class="small-breadcrumb">
    <div class="container">
        <div class="breadcrumb-link">
            <ul>
                <li><a href="{{ url('/') }}">@lang('common.home')</a></li>
                @foreach($breadcrumbs as $name => $url)
                    <li><a @if($url == '#') class="active" @endif href="@if($url == '#')'#'@else{{ $url }}@endif">{{ $name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<!-- Small Breadcrumb -->