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
                                <li><a href="{{ url('/add_credit') }}">@lang('titles.addCredit')</a></li>
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
                            <li><a href="#">French</a></li>
                            <li><a href="#">German</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7">
                <div class="header-right-top">
                    <div class="header-s-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-flickr"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                    <div class="header-contact-info">
                        <p><i class="fa fa-mobile"></i>Phone: <span>(+1)866-550-3669</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>