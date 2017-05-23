<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 rtl" style="margin-top:7px;">
                <ul class="header-left-top header-menu">
                    <li>
                        <a href="#">{!! Html::image('images/flags/' . $current_locale->image) !!} {{ $current_locale->locale }}
                            <i class="fa fa-angle-down"></i></a>
                        <ul class="header-dropdown">
                            @foreach(\App\Models\Language::active()->get() as $locale)
                                <li>
                                    <a href="{{ url('lang/'. $locale->code) }}">{!! Html::image('images/flags/' . $locale->image ) !!} {{ $locale->locale }} </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    @if (Auth::check())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i> {{ \Auth::user()->name }}
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('profile') }}">@lang('titles.myAccount')</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/logout') }}">@lang('titles.logout')</a></li>
                    @else
                        <li><a href="{{ url('/login') }}"><i class="fa fa-sign-in"></i> @lang('titles.login')</a></li>
                        <li><a href="{{ url('/register') }}"><i class="fa fa-unlock"
                                                                aria-hidden="true"></i> @lang('titles.register')</a>
                        </li>
                    @endif
                </ul>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 ltr">
                <div class="header-right-top">
                    <a class="new btn bordered-style" href="{{ url('AddAdv') }}"
                       style="border-radius: 30px;">@lang('advertisement.post_free_ad')</a>
                    @if(Config('settings.facebook_url'))
                        <a href="{{ url( Config('settings.facebook_url')) }}"><i class="fa fa-facebook"></i></a>
                    @endif
                    @if(Config('settings.twitter_url'))
                        <a href="{{ url( Config('settings.twitter_url')) }}"><i class="fa fa-twitter"></i></a>
                    @endif
                    @if(Config('settings.linkedin_url'))
                        <a href="{{ url( Config('settings.linkedin_url')) }}"><i class="fa fa-linkedin"></i></a>
                    @endif
                    @if(Config('settings.google_url'))
                        <a href="{{ url( Config('settings.googleplus_url')) }}"><i
                                    class="fa fa-google-plus"></i></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>