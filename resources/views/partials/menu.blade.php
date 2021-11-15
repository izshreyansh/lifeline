<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            <img src="/logo.png"
                 class="mt-4 ml-4 img-responsive w-50"
                 alt="{{ config('app.name') }}" />
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon"></i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('crm_access')
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.crm.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('adult_client_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.adult-clients.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/adult-clients") || request()->is("admin/adult-clients/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-user-tie c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.adultClient.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('childline_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.childlines.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/childlines") || request()->is("admin/childlines/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-user-astronaut c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.childline.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('wrap_up_access')
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.wrapUp.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('non_productive_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.non-productives.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/non-productives") || request()->is("admin/non-productives/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-exclamation-circle c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.nonProductive.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.import.create") }}" class="c-sidebar-nav-link">
                <i class="fa-fw fas fa-table c-sidebar-nav-icon"></i>
                Import Records
            </a>
        </li>

        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.reports.create") }}" class="c-sidebar-nav-link">
                <i class="fa-fw fas fa-table c-sidebar-nav-icon"></i>
                {{ trans('cruds.reports.title') }}
            </a>
        </li>

        @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        {{ trans('global.change_password') }}
                    </a>
                </li>
            @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>
