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
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">Email address</label>
                                    <input class="form-control" type="email" id="emailaddress" required=""
                                        placeholder="Enter your email" value="" name="email">
                                </div>

                                <div class="mb-3">
                                    <a href="" class="text-muted float-end fs-12">Forgot your password?</a>
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" class="form-control"
                                            placeholder="Enter your password" value="" name="password">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                        <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                    </div>
                                </div>

                                <div class="mb-3 mb-0 text-center">
                                    <button class="btn btn-primary" type="submit"> Log In </button>
                                </div>

                            </form>
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
