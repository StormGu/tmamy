pf-content@extends('adforest.layout.master')

@section('content')

    <!-- Main Container -->
    @include('adforest.profile.show_head')

    <div class="container">
    
        <div class="pf-content">
            <div id="AdvContainer">

                <div class="pf-content">

                    <div id="AdvContainer" data-tab="Love" style="display: none;"></div>
                    <div class="user-list" data-tab="Followers" style="">

                        @foreach(\App\Models\UserFollower::where('user_id', $user->id)->get() as $follower)

                            <div class="adv-advertiser" data-cardcontainer="" data-type="B">
                                <div class="cover-data">
                                    <img src="" alt="" style="display: block;">
                                </div>
                                <div class="image">
                                    <a href="{{ url('profile/'. $follower->user_followers_id) }}">
                                        <img src="@if ($follower->follower->profile->avatar_status == 1) {{ url($follower->follower->profile->avatar) }} @else {{ Gravatar::get($follower->follower->email) }} @endif"
                                             style="display: block;">
                                    </a>
                                </div>
                                <div class="username">
                                    <a href="{{ url('profile/'. $follower->user_followers_id) }}"> {{ $follower->follower->name }} </a>
                                </div>

                                <div class="following">
                                    <span class="num">{{ \App\Models\UserFollower::where('user_id', $follower->user_id)->count()}}</span>
                                    <span class="type">Following</span>
                                </div>
                                <div class="follower">
                                    <span class="num"
                                          data-followercounter="">{{ \App\Models\UserFollower::where('user_id', $follower->user_followers_id)->count()}}</span>
                                    <span class="type">Follower</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection