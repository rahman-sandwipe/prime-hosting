
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title') :: {{ config('app.name') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="{{ config('app.description') }}" name="description" />
        <meta content="{{ config('app.author') }}" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="keywords" content="{{ config('app.keywords') }}" />
        <meta name="theme-color" content="#ffffff">
        <meta name="robots" content="{{ config('app.robots') }}" />
        <meta name="google-site-verification" content="{{ config('app.google_site_verification') }}" />
        <meta name="msvalidate.01" content="{{ config('app.bing_site_verification') }}" />
        <meta name="yandex-verification" content="{{ config('app.yandex_site_verification') }}" />
        <link rel="shortcut icon" href="{{ config('app.favicon') }}" />
        <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="d-flex min-vh-100 justify-content-center align-items-center">
            <div class="row justify-content-center w-100">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="card overflow-hidden text-center">
                        <a href="{{ url('/') }}" class="auth-brand mt-3">
                            <img src="{{ config('app.dark_logo') }}" alt="dark logo" class="logo-dark mx-auto" height="50">
                        </a>

                        <div class="card-body">
                            @yield('content')                 
                        </div>
                    </div>

                    <p class="mt-4 text-center mb-0">
                        <script>document.write(new Date().getFullYear())</script> © Abstack - By <span
                            class="fw-bold text-decoration-underline text-uppercase text-reset fs-12">Coderthemes</span>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>