<div class="left-side-menu">
    <div class="slimscroll-menu">
        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <!-- <li class="menu-title">Navigation</li> -->

                <li>
                    <a href="index.html">
                        <i class="fa fa-tachometer-alt"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fa fa-users"></i>
                        <span>Users</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="ui-typography.html">Users</a></li>
                        <li><a href="ui-cards.html">Add New</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="javascript: void(0);">
                        <i class="fa fa-list"></i>
                        <span>Attributes</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ route('AttributesPage') }}">Attributes</a></li>
                        <li><a href="{{ route('insertAttributePage') }}">Insert New</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="fa fa-list"></i>
                        <span>Categories</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ route('getCategories') }}">Categories</a></li>
                        <li><a href="{{ route('insertCategory') }}">Insert New</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fa fa-server"></i>
                        <span> Hosting Plans </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ route('HostingPlaneList') }}">Hosting Plans</a></li>
                        <li><a href="{{ route('HostingPlaneFrom') }}">Add New</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fe-bar-chart-2"></i>
                        <span> Orders </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="charts-flot.html">Orders</a></li>
                        <li><a href="charts-morris.html">Pending Orders</a></li>
                        <li><a href="charts-chartjs.html">Complete Orders</a></li>
                        <li><a href="charts-chartjs.html">Add New Order</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fa fa-file-invoice"></i>
                        <span>Invoices</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="email-inbox.html">Invoice</a></li>
                        <li><a href="email-read.html">New Invoice</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fa fa-headset"></i>
                        <!-- <span class="badge badge-warning badge-pill float-right">09</span> -->
                        <span> Supports </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="form-advanced.html">Complite Request</a></li>
                        <li><a href="form-validation.html">Pendding Request</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fa fa-globe"></i>
                        <span>Domain Management</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="tables-basic.html">Domains</a></li>
                        <li><a href="tables-datatable.html">Transfer Domain</a></li>
                        <li><a href="tables-responsive.html">Register Domain</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fa fa-cloud"></i>
                        <span>Server Monitoring</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="maps-google.html">Google Maps</a></li>
                        <li><a href="maps-vector.html">Vector Maps</a></li>
                        <li><a href="maps-mapael.html">Mapael Maps</a></li>
                    </ul>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->
</div>