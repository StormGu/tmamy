<style>
    .section-padding {
        padding: 0px 0 !important;
    }
</style>

@include('adforest.home.slider')

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <form action="{{ url('profile/Message') }}" method="post">
            <!-- Modal content-->
            {{ csrf_field() }}
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Message</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="from_name" value="{{ \Auth::user()->name }}">
                    <input type="hidden" name="to_user_id" value="{{ $user->id }}">
                    <input type="hidden" name="from_user_id" value="{{ Auth::id() }}">
                    <textarea name="messages" class="form-control" rows="5" id="comment"
                              placeholder="Enter Your Message"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default1 rig1" data-dismiss="modal"><a>Close</a></button>
                    <button type="submit" class="btn btn-default1 rig1"><a>Send</a></button>
                </div>
            </div>
        </form>
    </div>
</div>

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

        <div class="details" style="height: 116px;">
            <p>{{ $object->name }}</p>
            <p><a href="{{ url('profile/Message/'. Auth::id()) }}">My messages</a></p>
            <p>{{ $object->email }}</p>

        </div>
    </div>
</div>

<div class="dashboard-menu-container">
    <ul>
        <li class="active">
            <a href="{{ url('profile/ads') }}">
                <div class="menu-name">@lang('profile.ads')</div>
            </a>
        </li>
        <li>
            <a href="{{ url('profile/stores') }}">
                <div class="menu-name">@lang('profile.stores')</div>
            </a>
        </li>

        <li>
            <a href="{{ url('profile/upgrade') }}">
                <div class="menu-name">@lang('profile.upgrade')</div>
            </a>
        </li>
        <li class="pull-right ">
            <a href="{{ url('profile/settings') }}">
                <div class="menu-name">@lang('profile.settings')</div>
            </a>
        </li>

    </ul>
</div>
