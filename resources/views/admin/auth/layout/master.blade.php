<!DOCTYPE html>
<html lang="en">

    <head>

        <title>Login</title>
        <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 11]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description"
            content="Dasho Bootstrap admin template made using Bootstrap 5 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
        <meta name="keywords"
            content="admin templates, bootstrap admin templates, bootstrap 5, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, Dasho, Dasho bootstrap admin template">
        <meta name="author" content="Phoenixcoded" />

        <!-- Favicon icon -->
        <link rel="icon" href="{{ asset('dashboard/assets') }}/images/favicon.svg" type="image/x-icon">
        <!-- fontawesome icon -->
        <link rel="stylesheet" href="{{ asset('dashboard/assets') }}/fonts/fontawesome/css/fontawesome-all.min.css">
        <!-- animation css -->
        <link rel="stylesheet" href="{{ asset('dashboard/assets') }}/plugins/animation/css/animate.min.css">
        <!-- vendor css -->
        <link rel="stylesheet" href="{{ asset('dashboard/assets') }}/css/style.css">

    </head>

    <!-- [ auth-signin ] start -->
    <div class="auth-wrapper">
        <div class="auth-content container">
            <div class="card">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card-body">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ auth-signin ] end -->

    <!-- Required Js -->
    <script src="{{ asset('dashboard/assets') }}/js/vendor-all.min.js"></script>
    <script src="{{ asset('dashboard/assets') }}/plugins/bootstrap/js/bootstrap.min.js"></script>


    <div class="footer-fab">
        <div class="b-bg">
            <i class="fas fa-question"></i>
        </div>
        <div class="fab-hover">
            <ul class="list-unstyled">
                <li><a href="../doc/index-bc-package.html" target="_blank" data-text="UI Kit"
                        class="btn btn-icon btn-rounded btn-info m-0"><i class="feather icon-layers"></i></a></li>
                <li><a href="../doc/index.html" target="_blank" data-text="Document"
                        class="btn btn-icon btn-rounded btn-primary m-0"><i
                            class="feather icon feather icon-book"></i></a></li>
            </ul>
        </div>
    </div>


    </body>

</html>
