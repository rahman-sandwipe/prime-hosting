<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') :: {{ config('app.name') }}</title>

        <!-- App css -->
        <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>

        <!-- Begin page -->
        <div id="wrapper">
            
            <!-- Topbar Start -->
            @include('backend.include.header')
            <!-- end Topbar -->

            
            <!-- ========== Left Sidebar Start ========== -->
            @include('backend.include.left-sidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                @yield('content')
                <!-- end content -->

                

                <!-- Footer Start -->
                @include('backend.include.footer')
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        @include('backend.include.right-sidebar')
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        
        <!-- Vendor js -->
        <script src="{{ asset('backend/js/vendor.min.js') }}"></script>

        <!-- Table Editable plugin-->
        <script src="{{ asset('backend/libs/jquery-tabledit/jquery.tabledit.min.js') }}"></script>
        
        <!-- Table editable init-->
        <script src="{{ asset('backend/js/pages/tabledit.init.js') }}"></script>
        
        <!-- Chart JS -->
        <script src="{{ asset('backend/libs/chart-js/Chart.bundle.min.js') }}"></script>

        <!-- Init js -->
        <script src="{{ asset('backend/js/pages/dashboard.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('backend/js/app.min.js') }}"></script>
        

        @yield('scripts')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </body>
</html>
