<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
<ul class="page-sidebar-menu  page-sidebar-menu-closed " data-keep-expanded="false" data-auto-scroll="true"
    data-slide-speed="200">
    <li class="nav-item start {{ set_active(['admin/home*', 'admin/contact*', 'admin/newsletter*', 'admin/information*', 'admin/banner*']) }} open">
        <a href="#" class="nav-link nav-toggle">
            <i class="icon-home"></i>
            <span class="title">{{ trans('admin/navigation.dashboard') }}</span>
            <span class="selected"></span>
            <span class="arrow open"></span>
        </a>
        <ul class="sub-menu">
            <li class="nav-item start {{ set_active(['admin/home*']) }} ">
                <a href="{{ url('admin/home') }}" class="nav-link"><i
                            class="icon-bar-chart"></i> {{ trans('admin/navigation.dashboard') }}
                </a>
            </li>

            <li class="nav-item {{set_active(['admin/banner*'])}}">
                <a href="{{ url('admin/banner') }}" class="nav-link "> <i
                            class="fa fa-television"></i> {{ trans('admin/navigation.banners') }} </a>
            </li>

        </ul>
    </li>
    <li class="nav-item {{set_active(['admin/role*', 'admin/users*', 'admin/activity*'])}}">
        <a href="javascript:;" class="nav-link nav-toggle">
            <i class="icon-users"></i>
            <span class="title">{{ trans('admin/navigation.students_management') }}</span>
            <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li class="nav-item {{set_active(['admin/activity*'])}}">
                <a href="{{ url('admin/activity') }}" class="nav-link">
                    {{ trans('admin/navigation.activity') }}
                </a>
            </li>
            <li class="nav-item  {{set_active(['admin/users*'])}}">
                <a href="{{ url('admin/users') }}" class="nav-link">
                    <span class="title">{{ trans('admin/navigation.users') }}</span>
                </a>
            </li>
            <li class="nav-item {{set_active(['admin/role*'])}}">
                <a href="{{ url('admin/role') }}" class="nav-link">
                    {{ trans('admin/navigation.roles') }}
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item {{set_active(['admin/orders*', 'admin/scholarship*'])}}">
        <a href="javascript:;" class="nav-link nav-toggle">
            <i class="fa fa-money"></i>
            <span class="title">{{ trans('admin/navigation.orders_management') }}</span>
            <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li class="nav-item {{ set_active(['admin/orders*'])}} ">
                <a href="{{ url('admin/orders') }}" class="nav-link ">
                    <span class="title">{{ trans('admin/navigation.orders') }}</span>
                </a>
            </li>
            <li class="nav-item {{ set_active(['admin/scholarship*'])}} ">
                <a href="{{ url('admin/scholarship') }}" class="nav-link ">
                    <span class="title">{{ trans('admin/navigation.requests') }}</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-item {{set_active(['admin/blog_category*', 'admin/blog*'])}}">
        <a href="javascript:;" class="nav-link nav-toggle">
            <i class="icon-doc"></i>
            <span class="title">{{ trans('admin/navigation.blog') }}</span>
            <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li class="nav-item {{set_active(['admin/blog*'])}} ">
                <a href="{{ url('admin/blog') }}" class="nav-link ">
                    <span class="title">{{ trans('admin/navigation.blog') }}</span>
                </a>
            </li>
            <li class="nav-item  {{set_active(['admin/blog_category*'])}} ">
                <a href="{{ url('admin/blog_category') }}" class="nav-link ">
                    <span class="title">{{ trans('admin/navigation.blog_categories') }}</span>
                </a>
            </li>
            <li class="nav-item {{ set_active(['admin/information*']) }}">
                <a href="{{ url('admin/information') }}" class="nav-link "> <i
                            class="icon-bag"></i> {{ trans('admin/navigation.information') }}
                </a>
            </li>
        </ul>
    </li>


    <li class="nav-item {{ set_active(['admin/settings*', 'admin/languages*', 'admin/zone*', 'admin/countries*','admin/university*','admin/payment*']) }} ">
        <a href="javascript:;" class="nav-link nav-toggle">
            <i class="icon-settings"></i>
            <span class="title">{{ trans('admin/navigation.system') }}</span>
            <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li class="nav-item {{ set_active(['admin/settings*']) }} ">
                <a href="{{ url('admin/settings') }}" class="nav-wrench ">
                    <span class="title">{{ trans('admin/navigation.settings') }}</span>
                </a>
            </li>
            <li class="nav-item {{ set_active(['admin/language*']) }}">
                <a href="{{ url('admin/language') }}" class="nav-link "> {{ trans('admin/navigation.languages') }} </a>
            </li>
            <li class="nav-item {{set_active([ 'admin/country'])}}">
                <a href="{{ url('admin/country') }}" class="nav-link ">{{ trans('admin/navigation.countries') }}</a>
            </li>
            <li class="nav-item {{set_active([ 'admin/zone*' ])}}">
                <a href="{{ url('admin/zone') }}" class="nav-link "> {{ trans('admin/navigation.zones') }} </a>
            </li>
            <li class="nav-item {{set_active([ 'admin/university*' ])}}">
                <a href="{{ url('admin/university') }}"
                   class="nav-link "> {{ trans('admin/navigation.university') }} </a>
            </li>
            <li class="nav-item {{set_active([ 'admin/payment*' ])}}">
                <a href="{{ url('admin/payment') }}" class="nav-link "> {{ trans('admin/navigation.payment') }} </a>
            </li>
        </ul>
    </li>
    <li class="nav-item {{ set_active(['admin/contact*','admin/newsletter*']) }} ">
        <a href="javascript:;" class="nav-link nav-toggle">
            <i class="icon-envelope"></i>
            <span class="title">{{ trans('admin/navigation.mail_management') }}</span>
            <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li class="nav-item {{set_active(['admin/contact*'])}}">
                <a href="{{ url('admin/contact') }}" class="nav-link "> <i
                            class="fa fa-envelope"></i> {{ trans('admin/navigation.contact') }} </a>
            </li>
            <li class="nav-item {{set_active(['admin/newsletter*'])}}">
                <a href="{{ url('admin/newsletter') }}" class="nav-link"><i
                            class="fa fa-envelope-o"></i> {{ trans('admin/navigation.newsletter') }}
                </a>
            </li>
        </ul>
    </li>
</ul>