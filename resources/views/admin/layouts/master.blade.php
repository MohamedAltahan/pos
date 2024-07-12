<!DOCTYPE html>
<html lang="en">

    <head>
        <title>@yield('title')</title>
        <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 10]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="" />
        <meta name="keywords" content="">
        <meta name="author" content="" />

        <!-- Favicon icon -->
        <link rel="icon" href="{{ asset('dashboard/assets') }}/images/favicon.ico" type="image/x-icon">
        <!-- fontawesome icon -->
        <link rel="stylesheet" href="{{ asset('dashboard/assets') }}/fonts/fontawesome/css/fontawesome-all.min.css">
        <!-- animation css -->
        <link rel="stylesheet" href="{{ asset('dashboard/assets') }}/plugins/animation/css/animate.min.css">
        <!-- vendor css -->
        <link rel="stylesheet" href="{{ asset('dashboard/assets') }}/css/style.css">

        {{-- <link rel="stylesheet" href="{{ asset('dashboard/assets') }}/css/plugins/notifier.css"> --}}
        @stack('styles')
    </head>

    <body class="layout-3">
        <!-- [ Pre-loader ] start -->
        <div class="loader-bg">
            <div class="loader-track">
                <div class="loader-fill"></div>
            </div>
        </div>
        <!-- [ Pre-loader ] End -->

        @include('admin.layouts.shared.left-sidebar')

        @include('admin.layouts.shared.topbar')

        <!-- [ chat user list ] start -->
        <!-- [ chat user list ] end -->

        <!-- [ chat message ] start -->
        <!-- [ chat message ] end -->

        <!-- [ Main Content ] start -->
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layouts.shared.footer')
        <!-- [ Main Content ] end -->


        <!-- Required Js -->
        <script src="{{ asset('dashboard/assets') }}/js/vendor-all.min.js"></script>
        <script src="{{ asset('dashboard/assets') }}/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="{{ asset('dashboard/assets') }}/js/pcoded.min.js"></script>

        <!-- notification Js -->
        {{-- <script src="{{ asset('dashboard/assets') }}/js/plugins/notifier.js"></script>
        <script src="{{ asset('dashboard/assets') }}/js/pages/ac-notification.js"></script> --}}
        @stack('scripts')
    </body>

</html>
