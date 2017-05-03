<div class="navbar-custom-menu pull-left">
    <ul class="nav navbar-nav">
        <!-- =================================================== -->
        <!-- ========== Top menu items (ordered left) ========== -->
        <!-- =================================================== -->

    <!-- <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> <span>Home</span></a></li> -->

        <!-- ========== End of top menu left items ========== -->
    </ul>
</div>


<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
        <!-- ========================================================= -->
        <!-- ========== Top menu right items (ordered left) ========== -->
        <!-- ========================================================= -->

        <li><a href="{{ url('/') }}" target="_blank"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                {!! Html::image('images/flags/' . $current_locale->image) !!} {{ $current_locale->locale }}
            </a>
            <ul class="dropdown-menu">
                <li>
                    <ul class="menu">
                        @foreach($available_locales as $locale)
                            <li>
                                <a href="{{ url('lang/'. $locale->code) }}">{!! Html::image('images/flags/' . $locale->image ) !!} {{ $locale->locale }} </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </li>
        @if (Auth::guest())
            <li>
                <a href="{{ url(config('backpack.base.route_prefix', 'admin').'/login') }}">{{ trans('backpack::base.login') }}</a>
            </li>
            @if (config('backpack.base.registration_open'))
                <li>
                    <a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/register') }}">{{ trans('backpack::base.register') }}</a>
                </li>
            @endif
        @else
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}"><i
                            class="fa fa-btn fa-sign-out"></i> {{ trans('backpack::base.logout') }}</a></li>
    @endif

    <!-- ========== End of top menu right items ========== -->
    </ul>
</div>
