@include('Etudiant/header')
@include('Etudiant/headerpage')
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

@include('layouts.footer')