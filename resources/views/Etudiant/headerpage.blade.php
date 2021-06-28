@include('header')
<section class="page-header-area my-course-area">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="page-title">My Courses</h1>
                <ul>
                  <li class="active"><a href="{{url('my_courses}}">All Courses</a></li>
                  <li><a href="{{url('my_wishlist}}">Wishlists</a></li>
                  <li><a href="{{url('my_messages}}">My Messages</a></li>
                  <li><a href="{{url('user_profile}}">User Profile</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>