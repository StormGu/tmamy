

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
            <li><em>128</em><span>Views</span></li>
            <li>
                <em class="MyCounter">11</em>
                <span>
                                        Likes</span>
            </li>
        </ul>

        <ul class="st-social rig100">
            <button type="button" class="btn btn-default1 rig">Like Store</button>
            <button type="button" class="btn btn-default1 rig1">Messages</button>
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
        <h3>{{ $object->name }}</h3>
        <p class="info">{{ $object->email }}</p>
        <p class="description">{{ $object->profile->bio }}</p>
        <p>@lang('profile.points') : <span class="label label-success">{{ $object->profile->points }}</span></p>
    </div>
    </div>
</div>

<div class="dashboard-menu-container">
    <ul>
        <li class="active"><a href="http://localhost/laravel/inn/tmamy/public/profile/ads">
                <div class="menu-name"> ads</div>
            </a></li>
        <li><a href="http://localhost/laravel/inn/tmamy/public/profile/stores">
                <div class="menu-name">stores</div>
            </a></li>
        <li><a href="http://localhost/laravel/inn/tmamy/public/profile/upgrade">
                <div class="menu-name">upgrade</div>
            </a></li>
        <li class="pull-right "><a href="http://localhost/laravel/inn/tmamy/public/profile/settings">
                <div class="menu-name">settings</div>
            </a></li>
    </ul>
</div>