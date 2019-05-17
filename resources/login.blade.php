<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="temuin">
    <meta name="author" content="piscal">
    <meta name="keywords" content="temuin">

    <!-- Title Page-->
    <title>Login | Confer</title>

    <!-- Fontfaces CSS-->
    <link href="{{ url('/assets/admin/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('/assets/admin/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('/assets/admin/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('/assets/admin/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ url('/assets/admin/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ url('/assets/admin/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('/assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('/assets/admin/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('/assets/admin/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('/assets/admin/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('/assets/admin/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('/assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ url('/assets/admin/css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{ url('/assets/admin/images/icon/logo.png') }}" alt="CoolAdmin">
                            </a>
                        </div>
                        @if(\Session::has('alert'))
                            <div class="alert alert-danger">
                                <div>{{ Session::get('alert') }}</div>
                            </div>
                        @endif
                        @if(\Session::has('alert-success'))
                            <div class="alert alert-success">
                                <div>{{ Session::get('alert-success') }}</div>
                            </div>
                        @endif
                        <div class="login-form">
                            <form action="{{ url('/loginPost') }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="au-input au-input--full" type="text" name="email" placeholder="email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                                
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="{{ url('register') }}">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{ url('/assets/admin/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ url('/assets/admin/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ url('/assets/admin/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ url('/assets/admin/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ url('/assets/admin/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ url('/assets/admin/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ url('/assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ url('/assets/admin/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ url('/assets/admin/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ url('/assets/admin/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ url('/assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ url('/assets/admin/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ url('/assets/admin/vendor/select2/select2.min.js') }}">
    </script>

    <!-- Main JS-->
    <script src="{{ url('/assets/admin/js/main.js') }}"></script>

</body>

</html>
<!-- end document-->
