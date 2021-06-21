<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link name="favicon" type="image/x-icon" href="http://pn-learning-management-system-online.test/uploads/system/favicon.png" rel="shortcut icon" />
	      <link rel="favicon" href="http://pn-learning-management-system-online.test/assets/frontend/default/img/icons/favicon.ico">
        <link rel="apple-touch-icon" href="http://pn-learning-management-system-online.test/assets/frontend/default/img/icons/icon.png">
        <link rel="stylesheet" href="http://pn-learning-management-system-online.test/assets/frontend/default/css/jquery.webui-popover.min.css">
        <link rel="stylesheet" href="http://pn-learning-management-system-online.test/assets/frontend/default/css/select2.min.css">
        <link rel="stylesheet" href="http://pn-learning-management-system-online.test/assets/frontend/default/css/slick.css">
        <link rel="stylesheet" href="http://pn-learning-management-system-online.test/assets/frontend/default/css/slick-theme.css">
        
        <!-- font awesome 5 -->
        <script src="https://kit.fontawesome.com/7b845e807e.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="http://pn-learning-management-system-online.test/assets/frontend/default/css/fontawesome-all.min.css">

        <link rel="stylesheet" href="http://pn-learning-management-system-online.test/assets/frontend/default/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://pn-learning-management-system-online.test/assets/frontend/default/css/bootstrap-tagsinput.css">
        <link rel="stylesheet" href="http://pn-learning-management-system-online.test/assets/frontend/default/css/main.css">
        <link rel="stylesheet" href="http://pn-learning-management-system-online.test/assets/frontend/default/css/responsive.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">
        <link rel="stylesheet" href="http://pn-learning-management-system-online.test/assets/global/toastr/toastr.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nestable2/1.6.0/jquery.nestable.min.css" />
        <!-- Styles -->
        <style>
            /! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5},:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
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
          <a href="{{url('/')}}" class="navbar-brand"><img src="http://pn-learning-management-system-online.test/uploads/system/logo-dark.png" alt="" height="35"></a>
          <div class="main-nav-wrap">
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
            Math          </a></li>
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
<div class="dropdown course-list-dropdown corner-triangle top-right" style="display: none;"> <!-- Just remove the display none from the css to make it work -->
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