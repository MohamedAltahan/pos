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
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">

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

                                <!-- [ breadcrumb ] start -->
                                <div class="page-header">
                                    <div class="page-block">
                                        <div class="row align-items-center">
                                            <div class="col-md-12">
                                                {{-- <div class="page-header-title">
                                                    <h5>{{ __('Invoice') }}</h5>
                                                </div> --}}
                                                <ul class="breadcrumb">
                                                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i
                                                                class="feather icon-home"></i></a></li>
                                                    @section('breadcrumb')
                                                    @show
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ breadcrumb ] end -->

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
        {{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> --}}

        <script src="{{ asset('dashboard/assets') }}/js/vendor-all.min.js"></script>
        <script src="{{ asset('dashboard/assets') }}/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="{{ asset('dashboard/assets') }}/js/pcoded.min.js"></script>
        <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>

        @stack('scripts')
    </body>

</html>
