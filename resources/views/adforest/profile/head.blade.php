<style>
    .section-padding {
        padding: 0px 0 !important;
    }
</style>

@include('adforest.home.slider')

<div class="profile-data">
    <div class="container">
        <div class="image">
            <img id="imgAvatar"
                 src="@if (\Auth::user()->profile->avatar_status == 1){{ url(\Auth::user()->profile->avatar) }} @else {{ Gravatar::get(\Auth::user()->email) }} @endif">
        </div>

        <div class="details">
            <h3>{{ $user->name }}</h3>
            <h5><a href="{{ url('profile/inbox') }}">@lang('profile.inbox')</a></h5>
        </div>
        <ul class="st-social">
            <li>
                <em>{{ \App\Models\Advertisement::where('user_id', $user->id)->count() }}</em>
                <span>@lang('profile.my_ads')</span>
            </li>
            <li>
                <em><a href="{{ url('profile/getfollower/'.  $user->id) }}">{{ \App\Models\UserFollower::where('user_id', $user->id)->count() }}</a></em>
                <span><a href="{{ url('profile/getfollower/'.  $user->id) }}">@lang('profile.followers')</a></span>
            </li>
            <li>
                <em class="MyCounter">{{ \App\Models\StoreLike::where('user_id', $user->id)->count() }}</em>
                <span>@lang('profile.ad_likes')</span>
            </li>
            <li>
                <em class="MyCounter">{{ $profile->points }}</em>
                <span>@lang('profile.points')</span>
            </li>
        </ul>
        <ul class="socail-share">
            @if($profile->facebook)
                <li>
                    <a href="{{ $profile->facebook }}" target="_blank">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </li>
            @endif
            @if($profile->twitter)
                <li>
                    <a href="{{ $profile->twitter }}" target="_blank">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                </li>
            @endif
            @if($profile->googleplus)
                <li>
                    <a href="{{ $profile->googleplus }}" target="_blank">
                        <i class="fa fa-google" aria-hidden="true"></i>
                    </a>
                </li>
            @endif
            @if($profile->linkedin)
                <li>
                    <a href="{{ $profile->linkedin }}" target="_blank">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                </li>
            @endif
            @if($profile->pinterest)
                <li>
                    <a href="{{ $profile->pinterest }}" target="_blank">
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                    </a>
                </li>
            @endif
        </ul>
        <div class="info">
            <p>
                <i class="fa fa-calendar" aria-hidden="true"></i>
                {{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}
            </p>
            @if(isset($profile->country->name))
                <p>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    {{ $profile->country->name }}
                </p>
            @endif
            @if(isset($profile->mobile_no))
                <p>
                    <i class="fa fa-mobile" aria-hidden="true"></i>
                    {{ $profile->mobile_no }}
                </p>
            @endif

        </div>

    </div>
</div>
<div class="profile-admin-menu">
    <div class="container">
        <ul class="st-bar-menu site_links">
            <li class="active">
                <a href="{{ url('profile/ads') }}">
                    <div class="menu-name">@lang('profile.my_ads')</div>
                </a>
            </li>
            <li>
                <a href="{{ url('profile/stores') }}">
                    <div class="menu-name">@lang('profile.my_stores')</div>
                </a>
            </li>
            <li>
                <a href="{{ url('profile/upgrade') }}">
                    <div class="menu-name">@lang('profile.upgrade')</div>
                </a>
            </li>

            <li class="menusettings">
                <a href="{{ url('profile/settings') }}">
                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    @lang('profile.settings')
                </a>
            </li>
        </ul>
    </div>
</div>


