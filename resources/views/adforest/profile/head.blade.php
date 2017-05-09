<div class="col-md-12 col-xs-12 col-sm-12">
    <section class="search-result-item">
        <a class="image-link" href="#"><img class="image" alt=""
                                            src="@if ($object->profile->avatar_status == 1){{ url($object->profile->avatar) }}@else {{ Gravatar::get($object->email) }} @endif"
                                            alt="{{ $object->name }}"> </a>
        <div class="search-result-item-body">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <h4 class="search-result-item-heading"><a href="#">{{ $object->name }}</a></h4>
                    <p class="info">{{ $object->email }}</p>
                    <p class="description">{{ $object->profile->bio }}</p>
                    <p>Points :{{ $object->Points }}</p>

                </div>

                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="row ad-history">
                        <div class="col-md-4 col-sm-4 col-xs-12 pull-right">
                            <div class="user-stats">
                                <h2>{{ \App\Models\Advertisement::whereUserId($object->id)->count() }}</h2>
                                <small>@lang('titles.ads')</small>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 pull-right">
                            <div class="user-stats">
                                <h2>{{ \App\Models\Store::whereUserId($object->id)->count() }}</h2>
                                <small>@lang('titles.stores')</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="dashboard-menu-container">
        <ul>
            <li @if(Request::is('profile/ads*') || Request::is('profile')) class="active" @endif><a href="{{ url('profile/ads') }}">
                    <div class="menu-name"> @lang('profile.ads')</div>
                </a></li>
            <li @if(Request::is('profile/store*')) class="active" @endif><a href="{{ url('profile/stores') }}">
                    <div class="menu-name">@lang('profile.stores')</div>
                </a></li>
            <li @if(Request::is('profile/upgrade*')) class="active" @endif><a href="{{ url('profile/upgrade') }}">
                    <div class="menu-name">@lang('profile.upgrade')</div>
                </a></li>
            <li class="pull-right @if(Request::is('profile/settings*')) active @endif"><a href="{{ url('profile/settings') }}">
                    <div class="menu-name">@lang('profile.settings')</div>
                </a></li>
        </ul>
    </div>
</div>
<!-- Middle Content Area  End -->
</div>
<!-- Row End -->