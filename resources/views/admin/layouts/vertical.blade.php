<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        @include('admin.layouts.shared/title-meta', ['title' => $page_title])
        @yield('css')
        @vite(['resources/scss/app.scss', 'resources/scss/icons.scss'])
        @vite(['resources/js/head.js'])
    </head>

    <body>
        <div class="wrapper">

            @include('admin.layouts.shared/topbar')
            @include('admin.layouts.shared/left-sidebar')

            <!-- Start Page Content here -->
            <div class="content-page">

                <div class="content">
                    @yield('content')
                </div>
                @include('admin.layouts.shared/footer')
            </div>

        </div>

        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        @include('admin.layouts.shared/right-sidebar')
        @yield('script-bottom')
        @vite(['resources/js/app.js', 'resources/js/layout.js'])
        @yield('script')

    </body>

</html>
