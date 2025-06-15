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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Include in toastr -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
            $(document).ready(function() {
                @if (session('success'))
                    toastr.success("{{ session('success') }}");
                @elseif (session('error'))
                    toastr.error("{{ session('error') }}");
                @endif
            });
        </script>
        <style>
            .img-preview {
                width: 100px;
                height: 100px;
                overflow: hidden;
                border: 2px solid #ccc;
            }
            .img-preview img {
                max-width: 100%;
                max-height: 100%;
                padding: 1px;
                object-fit: cover;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
            @include('backend.include.header')        
            @include('backend.include.left-sidebar')
            <div class="content-page">
                @yield('content')
                @include('backend.include.footer')
            </div>
        </div>
        @include('backend.include.right-sidebar')
        <div class="rightbar-overlay"></div>
        
        <script src="{{ asset('backend/js/vendor.min.js') }}"></script>
        <script src="{{ asset('backend/libs/jquery-tabledit/jquery.tabledit.min.js') }}"></script>
        <script src="{{ asset('backend/js/pages/tabledit.init.js') }}"></script>
        <script src="{{ asset('backend/libs/chart-js/Chart.bundle.min.js') }}"></script>
        <script src="{{ asset('backend/js/pages/dashboard.init.js') }}"></script>
        <script src="{{ asset('backend/js/app.min.js') }}"></script>
    </body>
</html>
