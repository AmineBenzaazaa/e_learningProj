
<head>

	<title>My Courses | Learning Management System Online</title>
	

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Learning Management System Online">

	<meta name="keywords" content="LMS,Learning Management System,Creativeitem,demo,hello,How are you">
	<meta name="description" content="Nice application">
	
	<link name="favicon" type="image/x-icon" href="http://pn-learning-management-system-online.test/uploads/system/favicon.png" rel="shortcut icon">
	<link rel="favicon" href="http://pn-learning-management-system-online.test/assets/frontend/default/img/icons/favicon.ico">
    <link rel="apple-touch-icon" href="http://pn-learning-management-system-online.test/assets/frontend/default/img/icons/icon.png">
    <link rel="stylesheet" href="http://pn-learning-management-system-online.test/assets/frontend/default/css/jquery.webui-popover.min.css">
    <link rel="stylesheet" href="http://pn-learning-management-system-online.test/assets/frontend/default/css/select2.min.css">
    <link rel="stylesheet" href="http://pn-learning-management-system-online.test/assets/frontend/default/css/slick.css">
    <link rel="stylesheet" href="http://pn-learning-management-system-online.test/assets/frontend/default/css/slick-theme.css">
    <!-- font awesome 5 -->
    <link rel="stylesheet" href="http://pn-learning-management-system-online.test/assets/frontend/default/css/fontawesome-all.min.css">

    <link rel="stylesheet" href="http://pn-learning-management-system-online.test/assets/frontend/default/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://pn-learning-management-system-online.test/assets/frontend/default/css/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="http://pn-learning-management-system-online.test/assets/frontend/default/css/main.css">
    <link rel="stylesheet" href="http://pn-learning-management-system-online.test/assets/frontend/default/css/responsive.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">
    <link rel="stylesheet" href="http://pn-learning-management-system-online.test/assets/global/toastr/toastr.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nestable2/1.6.0/jquery.nestable.min.css">
    <script src="http://pn-learning-management-system-online.test/assets/backend/js/jquery-3.3.1.min.js"></script>
    </head>
    @include('layouts.header')
    <section class="page-header-area my-course-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="page-title">My Courses</h1>
                    <ul>
                    <li class="active"><a href="{{url('my_courses')}">All Courses</a></li>
                    <li><a href="{{url('my_wishlist')}">Wishlists</a></li>
                    <li><a href="{{url('my_messages')}">My Messages</a></li>
                    <li><a href="{{url('user_profile')}">User Profile</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="my-courses-area">
    <div class="container">
        <div class="row align-items-baseline">
            <div class="col-lg-6">
                <div class="my-course-filter-bar filter-box">
                    <span>Filter By</span>
                    <div class="btn-group">
                        <a class="btn btn-outline-secondary dropdown-toggle all-btn" href="#" data-toggle="dropdown">
                            Categories                        </a>

                        <div class="dropdown-menu">
                                                    </div>
                    </div>
                    <!-- <div class="btn-group">
                        <a class="btn btn-outline-secondary dropdown-toggle" href="#"data-toggle="dropdown">
                            Instructors                        </a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"> </a>

                        </div>
                    </div> -->
                    <div class="btn-group">
                        <a href="http://pn-learning-management-system-online.test/home/my_courses" class="btn reset-btn" disabled="">Reset</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="my-course-search-bar">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search My Courses" onkeyup="getCoursesBySearchString(this.value)">
                            <div class="input-group-append">
                                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row no-gutters" id="my_courses_area">
                    </div>
    </div>
</section>