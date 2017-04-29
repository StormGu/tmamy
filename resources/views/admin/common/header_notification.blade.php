<li class="separator hide"> </li>
<!-- BEGIN NOTIFICATION DROPDOWN -->
<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
        <i class="icon-bell"></i>
        <span class="badge badge-success"> {{ $notification_count }} </span>
    </a>
    <ul class="dropdown-menu">
        <li class="external">
            <h3><span class="bold">{{ $notification_count }} </span> {{ trans('admin.notifications') }}</h3>
        </li>
        <li>
            <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                <li>
                    <a href="{{ url('admin/users?user_status=0') }}">
                        <span class="time">{{ $count_not_activated_users }}</span>
                        <span class="details">
                            <span class="label label-sm label-icon label-warning">
                                <i class="fa fa-bell-o"></i>
                            </span> {{ trans('admin.users_not_activated') }}
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/activity?status=1') }}">
                        <span class="time">{{ $count_notification_center }}</span>
                        <span class="details">
                            <span class="label label-sm label-icon label-warning">
                                <i class="fa fa-bell-o"></i>
                            </span> {{ trans('admin.notification_center') }}
                        </span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</li>