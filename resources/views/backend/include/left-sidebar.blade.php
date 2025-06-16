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
                    <a href="{{ route('featuresPage') }}">
                        <i class="fa fa-list"></i>
                        <span>Features</span>
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('servicesPage') }}">
                        <i class="fa fa-list"></i>
                        <span>Services</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('serversPage') }}">
                        <i class="fa fa-list"></i>
                        <span>Servers</span>
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
                    <a href="javascript: void(0);">
                        <i class="fa fa-headset"></i>
                        <span>Pages Settings </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('pagesList') }}?hero-section">Hero Section</a>
                        </li>
                        <li>
                            <a href="{{ route('pagesList') }}?about-section">About Section</a>
                        </li>
                        <li>
                            <a href="{{ route('pagesList') }}?support-section">Support Section</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->
</div>