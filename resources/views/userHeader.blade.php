<head>
    <title>Active Courses | Learning Management System Online</title>
    <!-- all the meta tags -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta content="" name="description">
    <meta content="" name="author">
    <!-- all the css files -->
    <link rel="shortcut icon" href="{{ url('/uploads/system/favicon.png') }}">
    <!-- third party css -->
    <link rel="stylesheet" href="@icon/dripicons/dripicons.css">
    <link rel="stylesheet" href="https://unpkg.com/@icon/dripicons/dripicons.css">
    <link href="{{ url('/assets/backend/css/vendor/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('/assets/backend/css/vendor/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('/assets/backend/css/vendor/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('/assets/backend/css/vendor/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('/assets/backend/css/vendor/select.bootstrap4.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('/assets/backend/css/vendor/summernote-bs4.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('/assets/backend/css/vendor/fullcalendar.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('/assets/backend/css/vendor/dropzone.css') }}" rel="stylesheet" type="text/css">
    <!-- third party css end -->
    <!-- App css -->
    <link href="{{ url('/assets/backend/css/app.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('/assets/backend/css/icons.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ url('/assets/backend/css/main.css') }}" rel="stylesheet" type="text/css">

    <!-- font awesome 5 -->

    <link href="{{ url('/assets/backend/css/fontawesome-all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('/assets/backend/css/font-awesome-icon-picker/fontawesome-iconpicker.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script src="{{ url('/assets/backend/js/jquery-3.3.1.min.js') }}" charset="utf-8"></script>
    <script src="{{ url('/assets/backend/js/onDomChange.js') }}"></script>
    <style type="text/css">
        /* Chart.js */
        @-webkit-keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        @keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            -webkit-animation: chartjs-render-animation 0.001s;
            animation: chartjs-render-animation 0.001s;
        }
    </style>
</head>

<body>
    <div class="navbar-custom topnav-navbar topnav-navbar-dark">
        <div class="container-fluid">

            <!-- LOGO -->
            <a href="http://pn-learning-management-system-online.test/Admin" class="topnav-logo" style="min-width: unset;">
                <span class="topnav-logo-lg">
                    <img src="{{ url('/uploads/system/logo-light.png') }}" alt="" height="40">
                </span>
                <span class="topnav-logo-sm">
                    <img src="{{ url('/uploads/system/logo-light-sm.png') }}" alt="" height="40">
                </span>
            </a>

            <ul class="list-unstyled topbar-right-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" id="topbar-userdrop" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="account-user-avatar">
                            <img src="{{ url('/uploads/user_image/placeholder.png') }}" alt="user-image" class="rounded-circle">
                        </span>
                        <span style="color: #fff;">
                            <span class="account-user-name">{{auth()->user()->name}}</span>
                            <span class="account-position">{{auth()->user()->roles->first()['name']}}</span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown" aria-labelledby="topbar-userdrop">
                        <!-- item-->
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome !</h6>
                        </div>

                        <!-- Account -->
                        <a href="{{route('profile.show')}}" class="dropdown-item notify-item">
                            <i class="mdi mdi-account-circle mr-1"></i>
                            <span>My Account</span>
                        </a>

                        <!-- settings-->
                        <a href="http://pn-learning-management-system-online.test/admin/system_settings" class="dropdown-item notify-item">
                            <i class="mdi mdi-settings mr-1"></i>
                            <span>Settings</span>
                        </a>
                        <!-- Logout-->
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <a href="{{ route('logout') }}" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout mr-1"></i>
                                <span>lougout</span>
                            </a>
                        </form>
                    </div>
                </li>
            </ul>
            <a class="button-menu-mobile disable-btn">
                <div class="lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
            <div class="app-search">
                <h4 style="color: #fff; float: left;"> Learning Management System Online</h4>
                <a href="{{url('/')}}" target="" class="btn btn-outline-light ml-3">Visit Website</a>
            </div>
        </div>
    </div>
</body>