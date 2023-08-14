@props(['title'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="auth-token" content="{{ Auth::check() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ isset($title) ? $title : env('APP_NAME') }}</title>

    <link rel="stylesheet" href="{{ asset('admin/css/main/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/main/app-dark.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/main/default.css') }}" />
    {{-- <link rel="manifest" href="/manifest.json" /> --}}
    <link rel="shortcut icon" href="{{ asset('admin/images/logo/favicon.svg') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('admin/images/logo/favicon.png') }}" type="image/png" />
    <!-- sweetalert2 -->
    <link rel="stylesheet" href="{{ asset('admin/extensions/sweetalert2/sweetalert2.min.css') }}" />
    <!-- data tables -->
    <link rel="stylesheet"
        href="{{ asset('admin/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/pages/datatables.css') }}" />
    <!--filepond  -->
    <link rel="stylesheet" href="{{ asset('admin/extensions/filepond/filepond.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('admin/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/extensions/toastify-js/src/toastify.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/pages/filepond.css') }}" />



</head>

<body>


    <div id="app">
        {{-- component sidebar --}}
        @include('layouts.sidebar')

        {{-- / component sidebar --}}
        <div id="main" class="layout-navbar navbar-fixed">

            {{-- component navbar --}}
            @include('layouts.navbar')
            {{-- /component navbar --}}

            {{-- content --}}
            <div id="main-content">


                @if (isset($heading))
                    <div class="page-heading">
                        <div class="page-title">
                            <div class="row">
                                <div class="col-12 col-md-6 order-md-1 order-last">
                                    <h3>{{ $heading }}</h3>
                                    <p class="text-subtitle text-muted">{{ $heading_text }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                {{ $slot }}



            </div>
            {{-- / content --}}

        </div>

    </div>


    <script src="{{ asset('admin/js/bootstrap.js') }}"></script>
    <script src="{{ asset('admin/js/app.js') }}"></script>
    <script src="{{ asset('admin/extensions/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/extensions/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('admin/js/sweetalert2/sweetalert2.js') }}"></script>


    <script src="{{ asset('admin/js/main.js') }}"></script>


    @yield('script')



</body>

</html>
