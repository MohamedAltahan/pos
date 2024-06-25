<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <html>

        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>@yield('title') - {{ config('app.name', 'POS') }}</title>

            @include('install.layouts.partials.css')

        </head>

        <body class="hold-transition">
            @if (session('status'))
                <input type="hidden" id="status_span" data-status="{{ session('status.success') }}"
                    data-msg="{{ session('status.msg') }}">
            @endif

            @yield('content')

            @include('install.layouts.partials.javascripts')
            <!-- Scripts -->
            <script src="{{ asset('js/login.js?v=' . $asset_v) }}"></script>


            <script type="text/javascript">
                $(document).ready(function() {
                    $('.select2_register').select2();

                    $('input').iCheck({
                        checkboxClass: 'icheckbox_square-blue',
                        radioClass: 'iradio_square-blue',
                        increaseArea: '20%' // optional
                    });
                });
            </script>

            @stack('javascript')
        </body>

    </html>
