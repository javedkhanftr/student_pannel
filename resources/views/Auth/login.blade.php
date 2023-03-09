<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Magnify Infotech | Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/img/favicon.png')}}">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{asset('admin/css/normalize.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('admin/css/main.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('admin/css/all.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('admin/fonts/flaticon.css')}}">
    <!-- Full Calender CSS -->
    <link rel="stylesheet" href="{{asset('admin/css/fullcalendar.min.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('admin/css/animate.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('admin/style.css')}}">
    <!-- Modernize js -->
    <script src="{{asset('admin/js/modernizr-3.6.0.min.js')}}"></script>
    <link rel="stylesheet"
        href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- Login Page Start Here -->
    <div class="login-page-wrap">
        <div class="login-page-content">
            <div class="login-box">
                <div class="item-logo">
                    <img width="30%" src="https://magnifyinfotech.com/student_form/image/logo.png" alt="logo">
                </div>
                <form action="{{url('admin/custom-login')}}" method="post" class="login-form">
                    @csrf
                    <div class="form-group">
                        <label>Username</label>
                        <input type="email" placeholder="Enter usrename" name="email" class="form-control">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" placeholder="Enter password" name="password" class="form-control">
                        <i class="fa fa-lock"></i>
                    </div>
                    <div class="form-group d-flex align-items-center justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember-me">
                            <label for="remember-me" class="form-check-label">Remember Me</label>
                        </div>
                        <a href="#" class="forgot-btn">Forgot Password?</a>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="login-btn">Login</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- jquery-->
    <script src="{{asset('admin/js/jquery-3.3.1.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('admin/js/plugins.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('admin/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <!-- Counterup Js -->
    <script src="{{asset('admin/js/jquery.counterup.min.js')}}"></script>
    <!-- Moment Js -->
    <script src="{{asset('admin/js/moment.min.js')}}"></script>
    <!-- Waypoints Js -->
    <script src="{{asset('admin/js/jquery.waypoints.min.js')}}"></script>
    <!-- Scroll Up Js -->
    <script src="{{asset('admin/js/jquery.scrollUp.min.js')}}"></script>
    <!-- Full Calender Js -->
    <script src="{{asset('admin/js/fullcalendar.min.js')}}"></script>
    <!-- Chart Js -->
    <script src="{{asset('admin/js/Chart.min.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{asset('admin/js/main.js')}}"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Mar 2023 14:31:33 GMT -->

</html>