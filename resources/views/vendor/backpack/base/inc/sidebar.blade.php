@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="https://placehold.it/160x160/00a65a/ffffff/&text={{ mb_substr(Auth::user()->name, 0, 1) }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">{{ trans('backpack::base.administration') }}</li>
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->

          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/home') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
          <li class="treeview">
            <a href="#"><i class="fa fa-group"></i> <span>{{ trans('backpack::base.users_admin') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/users') }}"><i class="fa fa-user"></i> <span>{{ trans('backpack::base.users') }}</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/role') }}"><i class="fa fa-group"></i> <span>{{ trans('backpack::base.roles') }}</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/permission') }}"><i class="fa fa-key"></i> <span>{{ trans('backpack::base.permissions') }}</span></a></li>
            </ul>
          </li>

          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/advertisements') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.advertisements') }}</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/categories') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.categories') }}</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/stores') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.stores') }}</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/constantkey') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.constantkey') }}</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/constants') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.constants') }}</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/slider') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.slider') }}</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/routes') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.routes') }}</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/coupons') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.coupons') }}</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/page') }}"><i class="fa fa-file-o"></i> <span>{{ trans('backpack::base.Pages') }}</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/features') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.features') }}</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/property') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.property') }}</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/settings') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.settings') }}</span></a></li>


          <!-- ======================================= -->
          <li class="header">{{ trans('backpack::base.user') }}</li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></li>
          <!-- Users, Roles Permissions -->

        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
