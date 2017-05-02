<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5">
                <ul class="header-left-top header-menu">
                    <li>
                        <a href="{{ url('/profile') }}">
                            <i class="fa fa-user"></i>@lang('titles.myAccount') <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="header-dropdown">
                            @if (Auth::check())
                                {{--<li><a href="{{ url('/add_credit') }}">@lang('titles.addCredit')</a></li>--}}
                                <li><a href="{{ url('/profile') }}">@lang('titles.myProfile')</a></li>
                                <li><a href="{{ url('/logout') }}">@lang('titles.logout')</a></li>
                            @else
                                <li><a href="{{ url('/login') }}">@lang('titles.login')</a></li>
                                <li><a href="{{ url('/register') }}">@lang('titles.register')</a></li>
                            @endif
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-globe"></i>English <i class="fa fa-angle-down"></i></a>
                        <ul class="header-dropdown">
                            @foreach(\App\Models\Language::active()->get()->pluck('locale', 'id') as $id => $name)
                                <li><a href="{{ url('/') }}">{{ $name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7">
                <div class="header-right-top">
                    <div class="header-s-icons">
                        @if(Config('settings.facebook_url'))
                            <a href="{{ url( Config('settings.facebook_url')) }}" target="_blank"><i
                                        class="fa fa-facebook"></i></a>
                        @endif
                        @if(Config('settings.instagram_url'))
                            <a href="{{ url( Config('settings.instagram_url')) }} target=" _blank"><i
                                    class="fa fa-instagram"></i></a>
                        @endif
                        @if(Config('settings.twitter_url'))
                            <a href="{{ url( Config('settings.twitter_url')) }} target=" _blank"><i
                                    class="fa fa-twitter"></i></a>
                        @endif
                        @if(Config('settings.youtube_url'))
                            <a href="{{ url( Config('settings.youtube_url')) }} target=" _blank"><i
                                    class="fa fa-youtube-play"></i></a>
                        @endif
                        @if(Config('settings.flickr_url'))
                            <a href="{{ url( Config('settings.flickr_url')) }} target=" _blank"><i
                                    class="fa fa-flickr"></i></a>
                        @endif
                        @if(Config('settings.google_url'))
                            <a href="{{ url( Config('settings.google_url')) }} target=" _blank"><i
                                    class="fa fa-google-plus"></i></a>
                        @endif

                    </div>
                    <div class="header-contact-info">
                        <p><i class="fa fa-mobile"></i>@lang('titles.mobile_no'): <span>{{ Config('settings.mobile_no') }}</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>