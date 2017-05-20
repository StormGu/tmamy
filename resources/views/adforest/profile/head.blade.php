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
            <form action="{{ url('profile/Message') }}" method="post">
                <!-- Modal content-->
                {{ csrf_field() }}
                <div class="modal-content">
                    <div class="modal-header">

                        <h4 class="modal-title">Message</h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="from_name" value="{{ \Auth::user()->name }}">
                        <input type="hidden" name="to_user_id" value="{{ $object->id }}">
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
</div>


<div style="margin-bottom: 0px !important;height: 129px;" class="profile-data">


        <div class="image" data-user="avatar" data-type="B">
            <img id="imgAvatar"
                 src="@if (\Auth::user()->profile->avatar_status == 1){{ url(\Auth::user()->profile->avatar) }} @else {{ Gravatar::get(\Auth::user()->email) }} @endif">
        
    </div>

    <ul class="st-social">
        <li><em>{{ \App\Models\Advertisement::where('user_id', $object->id)->count() }}</em><span>ADS</span></li>
        <li><em><a href="{{ url('profile/getfollower/'.  $object->id) }}">{{ \App\Models\UserFollower::where('user_id', $object->id)->count() }}</a></em><span><a href="{{ url('profile/getfollower/'.  $object->id) }}">follower</a></span></li>
        <li>
            <em class="MyCounter">{{ \App\Models\StoreLike::where('user_id', $object->id)->count() }}</em>
            <span>
                                        Likes</span>
        </li>
    </ul>

    <ul class="st-social rig100">
        <form action="{{ url('profile/follower')}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="user_id" value="{{ $object->id }}">
            <input type="hidden" name="user_followers_id" value="{{ Auth::id() }}">
            <input type="hidden" name="user_followers_name" value="{{ \Auth::user()->name }}">
            @if(\App\Models\UserFollower::where('user_followers_id', Auth::id())->count() == 0)
                <button type="submit" class="btn btn-default1 rig"> Follow</button>
            @elseif(\App\Models\UserFollower::where('user_followers_id', Auth::id())->count() > 0)
        </form>
                <form action="{{ url('profile/unfollower') }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="user_id" value="{{ $object->id }}">
                    <input type="hidden" name="user_followers_id" value="{{ Auth::id() }}">
                    <button type="submit" class="btn btn-default1 rig"> unFollow</button>
                </form>
            @endif


            <button type="button" class="btn btn-default1 rig1" data-toggle="modal" data-target="#myModal">
                <a>Messages</a></button>
    </ul>
    <ul class="socail-share">
        <li>
            <a href="{{ $object->facebook }}" target="_blank">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
        </li>
        <li>
            <a href="{{ $object->twitter }}" target="_blank">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
        </li>
        <li>
            <a href="{{ $object->google }}" target="_blank">
                <i class="fa fa-google" aria-hidden="true"></i>
            </a>
        </li>

        <li>
            <a href="{{ $object->linkedin }}" target="_blank">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
        </li>
        <li>
            <a href="{{ $object->pinterest }}" target="_blank">
                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
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