@include('admin.auth.partials.header', ['title' => 'Log In'])

<body class="authentication-bg position-relative">

    <div class="account-pages pt-2 pt-sm-3 pb-4 pb-sm-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-4 col-lg-5">
                    <div class="card">

                        <!-- Logo -->
                        <div class="card-header py-3 text-center bg-primary">
                            <a href="">
                                <span><img src="/images/logo.png" alt="logo" height="22"></span>
                            </a>
                        </div>

                        <div class="card-body p-4">
                            @livewire('admin.auth.login-component')
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->
                    {{--
                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted bg-body">Don't have an account? <a href=""
                                        class="text-muted ms-1 link-offset-3 text-decoration-underline"><b>Sign
                                            Up</b></a></p>
                            </div> <!-- end col -->
                        </div> --}}
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->
    @include('admin.auth.partials.footer')
</body>

</html>
