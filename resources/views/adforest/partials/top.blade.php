<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-md-6 rtl">

                <ul class="header-left-top header-menu">
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false"> {!! Html::image('images/flags/' . $current_locale->image) !!} {{ $current_locale->locale }}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
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
            <div class="col-md-6 ltr">
                <div class="header-right-top">
                    <div class="header-s-icons">
                        (
                        <a href="{{ url('AddAdv') }}" style="color:white; font-weight: bold">@lang('advertisement.post_free_ad')</a>
                        )
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
                    <div class="header-contact-info">
                        <p><i class="fa fa-mobile"></i> <span>@lang('advertisement.phone')</span>:
                            <span>{{ Config('settings.mobile_no') }}</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
