<style>
    .section-padding {
        padding: 0px 0 !important;
    }
</style>

@include('adforest.home.slider')

<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            {!! Form::open(['url' => url('profile/Message')]) !!}
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">@lang('profile.sent_message')</h4>
                </div>
                <div class="modal-body">
                    {!! Form::hidden('from_user_id', \Auth::id()) !!}
                    {!! Form::hidden('to_user_id', $user->id) !!}
                    {!! Form::textarea('messages', null, ['class' => 'form-control', 'rows' => 5, 'placeholder' => __('profile.enter_message')]) !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default1 rig1" data-dismiss="modal"><a>Close</a></button>
                    <button type="submit" class="btn btn-default1 rig1"><a>Send</a></button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>


<div style="margin-bottom: 0px !important;height: 129px;" class="profile-data">
    <div class="container">

        <div class="image" data-user="avatar" data-type="B">
            <img id="imgAvatar"
                 src="@if ($user->profile->avatar_status == 1){{ url($user->profile->avatar) }} @else {{ Gravatar::get($user->email) }} @endif">
        </div>
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
            <a>@lang('profile.message')</a></button>
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
        @if($profile->google)
            <li>
                <a href="{{ $profile->google }}" target="_blank">
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


    <div class="details" style="height: 116px;">
        <p>{{ $user->name }}</p>

        <p>{{ $user->email }}</p>
    </div>
</div>
</div>

<div class="dashboard-menu-container">
    <ul>
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