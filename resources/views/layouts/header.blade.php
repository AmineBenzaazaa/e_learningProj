<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>study.ma</title>



  <!-- CSS
	============================================ -->



  <!-- Fonts -->

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link name="favicon" type="image/x-icon" href="{{ url('/uploads/system/favicon.png') }}" rel="shortcut icon" />
  <link rel="favicon" href="{{ url('/assets/frontend/default/img/icons/favicon.ico') }}">
  <link rel="apple-touch-icon" href="{{ url('/assets/frontend/default/img/icons/icon.png') }}">
  <link rel="stylesheet" href="{{ url('/assets/frontend/default/css/jquery.webui-popover.min.css') }}">
  <link rel="stylesheet" href="{{ url('/assets/frontend/default/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ url('/assets/frontend/default/css/slick.css') }}">
  <link rel="stylesheet" href="{{ url('/assets/frontend/default/css/slick-theme.css') }}">

  <!-- font awesome 5 
  <link rel="stylesheet" href="@icon/dripicons/dripicons.css">-->
  <script src="https://kit.fontawesome.com/7b845e807e.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ url('/assets/frontend/default/css/fontawesome-all.min.css') }}">

  <link rel="stylesheet" href="{{ url('/assets/frontend/default/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('/assets/frontend/default/css/bootstrap-tagsinput.css') }}">
  <link rel="stylesheet" href="{{ url('/assets/frontend/default/css/main.css') }}">
  <link rel="stylesheet" href="{{ url('/assets/frontend/default/css/responsive.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">
  <link rel="stylesheet" href="{{ url('/assets/global/toastr/toastr.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nestable2/1.6.0/jquery.nestable.min.css" />
  <!-- all the js files -->
  <!-- bundle -->
  <script src="{{ url('/assets/backend/js/app.min.js') }}"></script>
  <!-- third party js -->
  <script src="{{ url('/assets/backend/js/vendor/Chart.bundle.min.js') }}"></script>
  <script src="{{ url('/assets/backend/js/vendor/jquery-jvectormap-1.2.2.min.js') }}"></script>
  <script src="{{ url('/assets/backend/js/vendor/jquery-jvectormap-world-mill-en.js') }}"></script>
  <script src="{{ url('/assets/backend/js/vendor/jquery.dataTables.min.js') }}"></script>
  <script src="{{ url('/assets/backend/js/vendor/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ url('/assets/backend/js/vendor/dataTables.responsive.min.js') }}"></script>
  <script src="{{ url('/assets/backend/js/vendor/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ url('/assets/backend/js/vendor/dataTables.buttons.min.js') }}"></script>
  <script src="{{ url('/assets/backend/js/vendor/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ url('/assets/backend/js/vendor/buttons.html5.min.js') }}"></script>
  <script src="{{ url('/assets/backend/js/vendor/buttons.flash.min.js') }}"></script>
  <script src="{{ url('/assets/backend/js/vendor/buttons.print.min.js') }}"></script>
  <script src="{{ url('/assets/backend/js/vendor/dataTables.keyTable.min.js') }}"></script>
  <script src="{{ url('/assets/backend/js/vendor/dataTables.select.min.js') }}"></script>
  <script src="{{ url('/assets/backend/js/vendor/summernote-bs4.min.js') }}"></script>
  <script src="{{ url('/assets/backend/js/vendor/fullcalendar.min.js') }}"></script>
  <script src="{{ url('/assets/backend/js/pages/demo.summernote.js') }}"></script>
  <script src="{{ url('/assets/backend/js/vendor/dropzone.js') }}"></script>
  <script src="{{ url('/assets/backend/js/pages/demo.dashboard.js') }}"></script>
  <script src="{{ url('/assets/backend/js/pages/datatable-initializer.js') }}"></script>
  <script src="{{ url('/assets/backend/js/font-awesome-icon-picker/fontawesome-iconpicker.min.js') }}" charset="utf-8"></script>
  <script src="{{ url('/assets/backend/js/vendor/bootstrap-tagsinput.min.js') }}" charset="utf-8"></script>
  <script src="{{ url('/assets/backend/js/bootstrap-tagsinput.min.js') }}"></script>
  <script src="{{ url('/assets/backend/js/vendor/dropzone.min.js') }}" charset="utf-8"></script>
  <script src="{{ url('/assets/backend/js/ui/component.fileupload.js') }}" charset="utf-8"></script>
  <script src="{{ url('/assets/backend/js/pages/demo.form-wizard.js') }}"></script>
  <!-- dragula js-->
  <script src="{{ url('/assets/backend/js/vendor/dragula.min.js') }}"></script>
  <!-- component js -->
  <script src="{{ url('/assets/backend/js/ui/component.dragula.js') }}"></script>

  <script src="{{ url('/assets/backend/js/custom.js') }}"></script>

  <!-- Styles -->

</head>

<body class="antialiased">
  <section class="menu-area">
    <div class="container-xl">
      <div class="row">
        <div class="col">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="mobile-header-buttons">
              <li><a class="mobile-nav-trigger" href="#mobile-primary-nav">Menu<span></span></a></li>
              <li><a class="mobile-search-trigger" href="#mobile-search">Search<span></span></a></li>
            </ul>
            <a href="{{url('/')}}" class="navbar-brand"><img src="{{ url('/uploads/system/logo-dark.png') }}" alt="" height="35"></a>            <div class="main-nav-wrap">
              <div class="mobile-overlay"></div>
              <ul class="mobile-main-nav">
                <div class="mobile-menu-helper-top"></div>
                <li class="has-children">
                  <a href="">
                    <i class="fas fa-th d-inline"></i>
                    <span>Courses</span>
                    <span class="has-sub-category"><i class="fas fa-angle-right"></i></span>
                  </a>
                  <ul class="category corner-triangle top-left is-hidden">
                    <li class="go-back"><a href=""><i class="fas fa-angle-left"></i>Menu</a></li>

                    <li class="has-children">
                      <a href="#">
                        <span class="icon"><i class="fas fa-plus"></i></span>
                        <span>Math</span>
                        <span class="has-sub-category"><i class="fas fa-angle-right"></i></span>
                      </a>
                      <ul class="sub-category is-hidden">
                        <li class="go-back-menu"><a href=""><i class="fas fa-angle-left"></i>Menu</a></li>
                        <li class="go-back"><a href="">
                            <i class="fas fa-angle-left"></i>
                            <span class="icon"><i class="fas fa-plus"></i></span>
                            Math </a></li>
                        <li><a href="{{ url('home/courses?category=algebre') }}">Algebre</a></li>
                      </ul>
                    </li>
                    <li class="all-category-devided">
                      <a href="{{ url('home/courses') }}">
                        <span class="icon"><i class="fa fa-align-justify"></i></span>
                        <span>All Courses</span>
                      </a>
                    </li>
                  </ul>
                </li>

                <div class="mobile-menu-helper-bottom"></div>
              </ul>
            </div>

            <form class="inline-form" action="" method="get" style="width: 100%;">
              <div class="input-group search-box mobile-search">
                <input type="text" name="query" class="form-control" placeholder="Search For Courses">
                <div class="input-group-append">
                  <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </form>
            <div class="cart-box menu-icon-box" id="cart_items">
              <div class="icon">
                <a href="javascript::" onclick="showCartPage()"><i class="fas fa-shopping-cart"></i></a>
                <span class="number">0</span>
              </div>

              <!-- Cart Dropdown goes here -->
              <div class="dropdown course-list-dropdown corner-triangle top-right" style="display: none;">
                <!-- Just remove the display none from the css to make it work -->
                <div class="list-wrapper">
                  <div class="item-list">
                    <ul>
                    </ul>
                  </div>
                  <div class="dropdown-footer">
                    <div class="cart-total-price clearfix">
                      <span>Total:</span>
                      <div class="float-right">
                        <span class="current-price"></span>
                        <!-- <span class="original-price">$94.99</span> -->
                      </div>
                    </div>
                    <a href="#">Go To Cart</a>
                  </div>
                </div>
                <div class="empty-box text-center d-none">
                  <p>Your Cart Is Empty.</p>
                  <a href="">Keep Shopping</a>
                </div>
              </div>

              <script type="text/javascript">
                function showCartPage() {
                  window.location.replace("#");
                }
              </script>
            </div>

            <span class="signin-box-move-desktop-helper"></span>
            @if (Route::has('login'))
            <div class="sign-in-box btn-group">
              @auth
              <a href="{{ route('dashboard') }}" class="btn btn-dashboard-in">Dashboard</a>
              @else
              <a href="{{ route('login') }}" class="btn btn-sign-in">Log In</a>
              @if (Route::has('register'))
              <a href="{{ route('register') }}" class="btn btn-sign-up">Sign Up</a>
              @endif
              @endauth
            </div>
            @endif
            <!--  sign-in-box end -->
          </nav>
        </div>
      </div>
    </div>
  </section>
</body>

</html>