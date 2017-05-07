<!-- Top Bar -->
<div class="header-top">
    <div class="container">
        <div class="row">
            <!-- Header Top Left -->
            <div class="header-top-left col-md-8 col-sm-6 col-xs-12 hidden-xs">
                <ul class="listnone">
                    <li><a href="about.html">
                            <i class="fa fa-heart-o" aria-hidden="true"></i> About
                        </a></li>
                    <li><a href="faqs.html">
                            <i class="fa fa-folder-open-o" aria-hidden="true"></i> FAQS
                        </a></li>
                    <li class="dropdown">
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
                </ul>
            </div>
            <!-- Header Top Right Social -->
            <div class="header-right col-md-4 col-sm-6 col-xs-12 ">
                <div class="pull-right">
                    <ul class="listnone">
                        @if (Auth::check())
                            {{--<li><a href="{{ url('/add_credit') }}">@lang('titles.addCredit')</a></li>--}}
                            <li><a href="{{ url('/profile') }}">@lang('titles.myProfile')</a></li>
                            <li><a href="{{ url('/logout') }}">@lang('titles.logout')</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-profile-male" aria-hidden="true"></i> {{ \Auth::user()->name }}
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('profile') }}">@lang('titles.myAccount')</a></li>
                                </ul>
                            </li>
                        @else
                            <li><a href="{{ url('/login') }}"><i class="fa fa-sign-in"></i> @lang('titles.login')</a></li>
                            <li><a href="{{ url('/register') }}"><i class="fa fa-unlock" aria-hidden="true"></i> @lang('titles.register')</a></li>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Bar End -->