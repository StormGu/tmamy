@include('adforest.home.slider')
<div style="margin-bottom: 0px !important;" class="profile-data">
    <div class="container">

        <div class="image" data-user="avatar" data-type="B">
            <img id="imgAvatar" src="khaled.jpg">
            <div class="editable-image">
                <div class="hover-button">
                    <i class="icon icon-camera"></i>
                    <a href="javascript:;" data-modal="changeAvatar">
                        Change Image</a>
                    <a data-do="delete">
                        Remove Image</a>
                </div>
            </div>
        </div>
    </div>

        <ul class="st-social">
            <li><em>6</em><span>ADS</span></li>
            <li><em></em><span>follower</span></li>
            <li>
                <em class="MyCounter">11</em>
                <span>
                                        Likes</span>
            </li>
        </ul>

        <ul class="st-social rig100">
            <form action="{{ url('profile/follower')}}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="user_id" value="{{ $object->id }}">
                <input type="hidden" name="user_followers_id" value="{{ Auth::id() }}">
                <button type="submit" class="btn btn-default1 rig">@if(\App\Models\UserFollower::where('user_followers_id', Auth::id())->count() == 0) Follow @elseif(\App\Models\UserFollower::where('user_followers_id', Auth::id())->count() > 0)
                        <a href="{{ url('/profile/unfollower/'. Auth::id() ) }}">UnFollow</a> @endif</button>
            </form>

            <button href="{{ url('profile/Messages') }}" type="button" class="btn btn-default1 rig1">Messages</button>
        </ul>
        <ul class="socail-share">
            <li>
                <a href="javascript:;" target="_blank">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="javascript:;" target="_blank">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="javascript:;" target="_blank">
                    <i class="fa fa-google" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="javascript:;" target="_blank">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="javascript:;" target="_blank">
                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                </a>
            </li>
        </ul>




    <div class="details">
        <p>{{ $object->name }}</p>
        <p>xcxcvxc</p>
        <p>xcxcvx</p>

    </div>
</div>
</div>

<div class="dashboard-menu-container">
    <ul>
        <li class="active"><a href="http://localhost/laravel/inn/tmamy/public/profile/ads">
                <div class="menu-name"> ads</div>
            </a></li>
        <li><a href="{{ url('profile/stores') }}">
                <div class="menu-name">stores</div>
            </a></li>
        <li><a href="{{ url('profile/upgrade') }}">
                <div class="menu-name">upgrade</div>
            </a></li>
        <li class="pull-right "><a href="{{ url('/profile/settings') }}">
                <div class="menu-name">settings</div>
            </a></li>
    </ul>
</div>