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
                    <input type="hidden" name="to_user_id" value="{{ $object->id }}">
                    <input type="hidden" name="form_user_id" value="{{ Auth::id() }}">
                    <textarea class="form-control" rows="5" id="comment" placeholder="Enter Your Message"></textarea>
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
                @if(\App\Models\UserFollower::where('user_followers_id', Auth::id())->count() == 0)
                    <button type="submit" class="btn btn-default1 rig"> Follow </button>
                @elseif(\App\Models\UserFollower::where('user_followers_id', Auth::id())->count() > 0)

                    <form action="{{ url('profile/unfollower') }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ $object->id }}">
                        <input type="hidden" name="user_followers_id" value="{{ Auth::id() }}">
                        <button type="submit" class="btn btn-default1 rig"> unFollow </button>
                    </form>
                @endif


            <button  type="button" class="btn btn-default1 rig1" data-toggle="modal" data-target="#myModal"><a>Messages</a></button>
        </ul>
        <ul class="socail-share">
            <li>
                <a href="{{ url( Config('settings.facebook_url')) }}" target="_blank">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="{{ url( Config('settings.twitter_url')) }}" target="_blank">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="{{ url( Config('settings.google_url')) }}" target="_blank">
                    <i class="fa fa-google" aria-hidden="true"></i>
                </a>
            </li>

            <li>
                <a href="{{ url( Config('settings.linkedin_url')) }}" target="_blank">
                    <i  class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="{{ url( Config('settings.instagram_url')) }}" target="_blank">
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