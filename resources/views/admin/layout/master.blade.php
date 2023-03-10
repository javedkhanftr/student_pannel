<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Magnify Infotech</title>
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
    <!-- <div id="preloader"></div> -->
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
        <!-- Header Menu Area Start Here -->
        <div class="navbar navbar-expand-md header-menu-one bg-light">
            <div class="nav-bar-header-one" style="width:260px !important;">
                <div class="header-logo">
                    <a href="{{url('/')}}">
                        <img width="55%;" src="{{asset('https://magnifyinfotech.com/student_form/image/logo.png')}}"
                            alt="logo">
                    </a>
                </div>
                <div class="toggle-button sidebar-toggle">
                    <button type="button" class="item-link">
                        <span class="btn-icon-wrap">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="d-md-none mobile-nav-bar">
                <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse"
                    data-target="#mobile-navbar" aria-expanded="false">
                    <i class="far fa-arrow-alt-circle-down"></i>
                </button>
                <button type="button" class="navbar-toggler sidebar-toggle-mobile">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
                <ul class="navbar-nav">
                    <li class="navbar-item header-search-bar">

                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="navbar-item dropdown header-admin">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <div class="admin-title">
                                <h5 class="item-title">Sameer Khan</h5>
                                <span>Admin</span>
                            </div>
                            <div class="admin-img">
                                <img src="{{asset('admin/img/figure/admin.jpg')}}" alt="Admin">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">Sameer Khan</h6>
                            </div>
                            <div class="item-content">
                                <ul class="settings-list">
                                    <li><a href="#"><i class="flaticon-user"></i>My Profile</a></li>
                                    <li><a href="#"><i class="flaticon-list"></i>Task</a></li>
                                    <li><a href="#"><i
                                                class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i>Message</a>
                                    </li>
                                    <li><a href="#"><i class="flaticon-gear-loading"></i>Account Settings</a></li>
                                    <li><a href="login.html"><i class="flaticon-turn-off"></i>Log Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- <li class="navbar-item dropdown header-message">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="far fa-envelope"></i>
                            <div class="item-title d-md-none text-16 mg-l-10">Message</div>
                            <span>5</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">05 Message</h6>
                            </div>
                            <div class="item-content">
                                <div class="media">
                                    <div class="item-img bg-skyblue author-online">
                                        <img src="img/figure/student11.png" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                            <a href="#">
                                                <span class="item-name">Maria Zaman</span>
                                                <span class="item-time">18:30</span>
                                            </a>
                                        </div>
                                        <p>What is the reason of buy this item.
                                            Is it usefull for me.....</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-img bg-yellow author-online">
                                        <img src="img/figure/student12.png" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                            <a href="#">
                                                <span class="item-name">Benny Roy</span>
                                                <span class="item-time">10:35</span>
                                            </a>
                                        </div>
                                        <p>What is the reason of buy this item.
                                            Is it usefull for me.....</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-img bg-pink">
                                        <img src="img/figure/student13.png" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                            <a href="#">
                                                <span class="item-name">Steven</span>
                                                <span class="item-time">02:35</span>
                                            </a>
                                        </div>
                                        <p>What is the reason of buy this item.
                                            Is it usefull for me.....</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-img bg-violet-blue">
                                        <img src="img/figure/student11.png" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                            <a href="#">
                                                <span class="item-name">Joshep Joe</span>
                                                <span class="item-time">12:35</span>
                                            </a>
                                        </div>
                                        <p>What is the reason of buy this item.
                                            Is it usefull for me.....</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li> -->
                    <!-- <li class="navbar-item dropdown header-notification">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="far fa-bell"></i>
                            <div class="item-title d-md-none text-16 mg-l-10">Notification</div>
                            <span>8</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">03 Notifiacations</h6>
                            </div>
                            <div class="item-content">
                                <div class="media">
                                    <div class="item-icon bg-skyblue">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="post-title">Complete Today Task</div>
                                        <span>1 Mins ago</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-icon bg-orange">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="post-title">Director Metting</div>
                                        <span>20 Mins ago</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-icon bg-violet-blue">
                                        <i class="fas fa-cogs"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="post-title">Update Password</div>
                                        <span>45 Mins ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="navbar-item dropdown header-language">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false"><i class="fas fa-globe-americas"></i>EN</a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">English</a>
                            <a class="dropdown-item" href="#">Spanish</a>
                            <a class="dropdown-item" href="#">Franchis</a>
                            <a class="dropdown-item" href="#">Chiness</a>
                        </div>
                    </li> -->
                </ul>
            </div>
        </div>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
                <div class="mobile-sidebar-header d-md-none">
                    <div class="header-logo">
                        <a href="{{url('/')}}"><img width="50%"
                                src="{{asset('https://magnifyinfotech.com/student_form/image/logo.png')}}"
                                alt="logo"></a>
                    </div>
                </div>
                <div class="sidebar-menu-content">
                    <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                        <li class="nav-item sidebar-nav-item">
                            <a href="{{url('/')}}" class="nav-link"><i
                                    class="flaticon-dashboard"></i><span>Dashboard</span></a>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Students</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{url('admin/student/all-student')}}" class="nav-link"><i
                                            class="fa fa-angle-right"></i>All
                                        Students</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('admin/student/admit-form')}}" class="nav-link"><i
                                            class="fa fa-angle-right"></i>Admission Form</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-couple"></i><span>Parents</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{url('admin/parents/all-parents')}}" class="nav-link"><i
                                            class="fa fa-angle-right"></i>Add
                                        Parents</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('admin/parents/admit-form')}}" class="nav-link"><i
                                            class="fa fa-angle-right"></i>Parents Form</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-technological"></i><span>Acconunt</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{url('admin/account/all-expense')}}" class="nav-link"><i
                                            class="fa fa-angle-right"></i>Expenses</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('admin/account/add-expense')}}" class="nav-link"><i
                                            class="fa fa-angle-right"></i>Add
                                        Expenses</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/attendence/student-attendence')}}" class="nav-link "><i
                                    class="flaticon-checklist"></i><span>Attendence</span></a>
                        </li>

                        <li class="nav-item sidebar-nav-item">
                            <a href="{{url('admin/notice/admit-form')}}" class="nav-link"><i
                                    class="flaticon-script"></i><span>Noctice</span></a>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i
                                    class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i><span>Class</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{url('admin/class/all-class')}}" class="nav-link"><i
                                            class="fa fa-angle-right"></i>All Classes</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('admin/class/admit-form')}}" class="nav-link"><i
                                            class="fa fa-angle-right"></i> Add New Class</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                @yield('content')
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->

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

</html>