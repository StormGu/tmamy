@include('adforest.home.slider')

<div class="profile-data">
    <div class="container">
        <div class="image">
            <img id="imgAvatar"
                 src="@if ($user->profile->avatar_status == 1){{ url($user->profile->avatar) }} @else {{ Gravatar::get($user->email) }} @endif">
        </div>
        <div class="details">
            <h3>{{ $user->name }}</h3>
        </div>
        <ul class="st-social">
            <li>
                <em>{{ \App\Models\Advertisement::where('user_id', $user->id)->count() }}</em>
                <span>@lang('profile.ads')</span>
            </li>
            <li>
                <em>
                    <a href="{{ url('profile/getfollower/'.  $user->id) }}">
                        {{ \App\Models\UserFollower::where('user_id', $user->id)->count() }}</a>
                </em>
                <span><a href="{{ url('profile/getfollower/'.  $user->id) }}">@lang('profile.followers')</a></span>
            </li>
            <li>
                <em class="MyCounter">{{ \App\Models\StoreLike::where('user_id', $user->id)->count() }}</em>
                <span>@lang('profile.ad_likes')</span>
            </li>
        </ul>
        <ul class="st-social rig100">
            @if(\App\Models\UserFollower::whereUserId($user->id)->whereUserFollowersId(\Auth::id())->count())
                {!! Form::open(['url' => url('profile/unfollower')]) !!}
            @else
                {!! Form::open(['url' => url('profile/follower')]) !!}
            @endif
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <input type="hidden" name="user_followers_id" value="{{ \Auth::id() }}">
            <button type="submit" class="btn btn-default1 rig">
                @if(\App\Models\UserFollower::whereUserId($user->id)->whereUserFollowersId(\Auth::id())->count())
                    @lang('profile.unfollow')
                @else
                    @lang('profile.follow')
                @endif
            </button>
            {!! Form::close() !!}
            <button type="button" class="btn btn-default1 rig1" data-toggle="modal" data-target="#myModal">
                @lang('profile.message')
            </button>
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
                <li><a href="{{ $profile->pinterest }}" target="_blank">
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                    </a></li>
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
                <a href="{{ url('profile/'.$user->id.'/ads') }}">
                    <div class="menu-name">@lang('profile.ads')</div>
                </a>
            </li>
            <li>
                <a href="{{ url('profile/'.$user->id.'/stores') }}">
                    <div class="menu-name">@lang('profile.stores')</div>
                </a>
            </li>
        </ul>
    </div>
</div>
