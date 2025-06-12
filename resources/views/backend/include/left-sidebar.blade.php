<div class="left-side-menu">
    <div class="slimscroll-menu">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul class="metismenu" id="side-menu">
                <li>
                    <a href="{{ route('dashboardPage') }}">
                        <i class="fa fa-tachometer-alt"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('usersPage') }}">
                        <i class="fa fa-users"></i>
                        <span>Users</span>
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('attributesPage') }}">
                        <i class="fa fa-list"></i>
                        <span>Attributes</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('hostingPage') }}">
                        <i class="fa fa-list"></i>
                        <span>Hosting Packages</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('ordersPage') }}">
                        <i class="fe-bar-chart-2"></i>
                        <span> Orders </span>
                    </a>
                </li>
                {{--
                <li>
                    <a href="{{ route('paymentsPage') }}">
                        <i class="fa fa-file-invoice"></i>
                        <span>Payments</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fa fa-headset"></i>
                        <!-- <span class="badge badge-warning badge-pill float-right">09</span> -->
                        <span> Supports </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ route('compliteSupportPage') }}">Complite Request</a></li>
                        <li><a href="{{ route('penddingSupportPage') }}">Pendding Request</a></li>
                    </ul>
                </li> --}}

                <li>
                    <a href="javascript: void(0);">
                        <i class="fa fa-globe"></i>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->
</div>