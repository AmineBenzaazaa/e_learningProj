@include('layouts.header')
<style>
    .main-wrap,
    .main-wrapper {
        opacity: 1;
        transition: all .25s ease-in;
        overflow: hidden;
        position: relative;
        z-index: 1;
    }

    .bg-after-fluid {
        position: relative;
    }

    .banner-wrapper {

        padding: 5rem 0rem 1rem 0rem !important;
    }


    .bg-after-fluid .container {
        position: relative;
        z-index: 2;
    }

    .videopos {
        top: -6rem;
        position: relative;
        margin-bottom: -7rem;
    }


    .bg-after-fluid:after {
        top: 0;
        content: "";
        border-radius: 4px;
        background: #c5e5ff;
        height: 100%;
        width: 100%;
        margin: 0 auto;
        display: block;
        position: absolute;
        /* left: 4%*/
    }



    .display3-size {
        font-size: 50px !important;
    }


    .form-group.icon-input {
        position: relative;
    }

    .mb-0,
    .my-0 {
        margin-bottom: 0 !important;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .form-group.icon-input i {
        position: absolute;
        left: 15px;
        top: 19px;
    }

    .font-xs {
        font-size: 18px !important;
    }

    .form-group.icon-input input {
        padding-left: 35px;
    }

    .form-group .style1-input {
        height: 55px;
        line-height: 55px;
        display: block;
        font-size: 12px;
    }

    .form-group .style1-select {
        line-height: 55px;
        height: 55px;
        width: 100%;
        font-size: 14px;
        font-weight: 500;
        color: #adb5bd !important;
    }

    .form-group .style1-input {
        height: 55px;
        line-height: 55px;
        display: block;
        font-size: 12px;
    }




    .text-grey-900 {
        color: #212529 !important;
    }


    .fw-700 {
        font-weight: 700 !important;
    }

    .display1-size {
        font-size: 36px !important;
    }

    .lh-28 {
        line-height: 28px;
    }

    .font-xsss {
        font-size: 14px !important;
    }

    .fw-300 {
        font-weight: 300 !important;
    }





    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, .125);
        border-radius: .25rem;
    }


    .arrow-right:after {
        background-image: url(uploads/arrow.png);
        width: 50px;
        right: -30px;
        z-index: 2;
        position: absolute;
        height: 17px;
        background-size: contain;
        background-position: center center;
        display: inline-block;
        content: "";
        position: absolute;
        top: 35px;
        background-repeat: no-repeat;
    }

    .svgshape {
        display: inline-block !important;
    }


    .iconimag {
        width: 20% !important;
    }

    .shadow-xss {
        box-shadow: 0 8px 30px rgba(0, 0, 0, .05) !important;
    }

    .video-bttn:after {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: 1;
        margin-left: -30px;
        margin-top: -30px;
        background-image: url(uploads/icon-play.png);
        background-size: contain;
        display: block;
        width: 60px;
        height: 60px;
    }

    .w10 {
        width: 12px !important;
    }

    .how-to-work2 {
        background-color: #2b95ff !important;
    }
</style>
<section class="course-header-area">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-lg-8">
        <div class="course-header-wrap">
          <h1 class="title">Cours Name</h1>
          <p class="subtitle"></p>
          <div class="rating-row">
            <span class="course-badge best-seller">Level</span>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
          <span class="d-inline-block average-rating">0</span><span>(0 Ratings)</span>
          <span class="enrolled-num">  0 Students Enrolled          </span>
        </div>
        <div class="created-row">
          <span class="created-by">
            Created By   <a href="">Instructeur name</a>
          </span>
                    <span class="last-updated-date">Date Of creation</span>
                    <span class="comment"><i class="fas fa-comment"></i>Language</span>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
    </div>
  </div>
</div>
</section>
<section class="course-content-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="what-you-get-box">
          <div class="what-you-get-title">What Will I Learn?</div>
          <ul class="what-you-get__items">
           Description
          </ul>
        </div>
        <br>
        <div class="course-curriculum-box">
          <div class="course-curriculum-title clearfix">
            <div class="title float-left">Curriculum For This Course</div>
            <div class="float-right">
              <span class="total-lectures">        </span>
              <span class="total-time">
                00:00:00 Hours              </span>
            </div>
          </div>
          <div class="course-curriculum-accordion">
            <div class="lecture-group-wrapper">
              <div class="lecture-group-title clearfix" data-toggle="collapse" data-target="#collapse1" aria-expanded="true">
                <div class="title float-left">
                     section 1
                </div>
                <div class="float-right">
                  <span class="total-lectures">
                    0 Lessons                  
                  </span>
                  <span class="total-time">
                    00:00:00 Hours                  
                  </span>
                </div>
              </div>
              <div class="lecture-group-title clearfix" data-toggle="collapse" data-target="#collapse1" aria-expanded="true">
                <div class="title float-left">
                     section 2
                </div>
                <div class="float-right">
                  <span class="total-lectures">
                    0 Lessons                  
                  </span>
                  <span class="total-time">
                    00:00:00 Hours                  
                  </span>
                </div>
              </div>
              

              <div id="collapse1" class="lecture-list collapse show">
                <ul>
                </ul>
            </div>
          </div>
                </div>
    </div>

    <div class="requirements-box">
      <div class="requirements-title">Tags</div>
      <div class="requirements-content">
        <ul class="requirements__list">
        <div class="simple-tags">
        Lorem,ipsum,dolor,sit.

        </div>
        </ul>
      </div>
    </div>

  <div class="about-instructor-box mt-3 ">
    <div class="about-instructor-title">
      About The Instructor    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="about-instructor-image">
          <img src="http://pn-learning-management-system-online.test/uploads/user_image/placeholder.png" alt="" class="img-fluid">
          <ul>
            <!-- <li><i class="fas fa-star"></i><b>4.4</b> Average Rating</li> -->
            <li><i class="fas fa-comment"></i><b>
              0            </b> Reviews</li>
            <li><i class="fas fa-user"></i><b>
              0            </b> Students</li>
            <li><i class="fas fa-play-circle"></i><b>
              1            </b> Courses</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="about-instructor-details view-more-parent">
          <div class="instructor-name">
            <a href="">Instructeur Name</a>
          </div>
          <div class="instructor-title">
          Lorem, ipsum dolor.
                      </div>
          <div class="instructor-bio">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. At vel quo natus itaque aliquid rerum possimus molestias sit omnis blanditiis!
                      </div>
        </div>
      </div>
    </div>
  </div>

  <div class="student-feedback-box">
    <div class="student-feedback-title">
      Student Feedback    </div>
    <div class="row">
      <div class="col-lg-3">
        <div class="average-rating">
          <div class="num">
            0          </div>
          <div class="rating">
                <i class="fas fa-star" style="color: #abb0bb;"></i>
                <i class="fas fa-star" style="color: #abb0bb;"></i>
                <i class="fas fa-star" style="color: #abb0bb;"></i>
                <i class="fas fa-star" style="color: #abb0bb;"></i>
                <i class="fas fa-star" style="color: #abb0bb;"></i>
              </div>
        <div class="title">Average Rating</div>
      </div>
    </div>
    <div class="col-lg-9">
      <div class="individual-rating">
        <ul>
            <li>
              <div class="progress">
                <div class="progress-bar" style="width: 0%"></div>
              </div>
              <div>
                <span class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star filled"></i>
                </span>
                <span>0%</span>
              </div>
            </li>
                      <li>
              <div class="progress">
                <div class="progress-bar" style="width: 0%"></div>
              </div>
              <div>
                <span class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                </span>
                <span>0%</span>
              </div>
            </li>
                      <li>
              <div class="progress">
                <div class="progress-bar" style="width: 0%"></div>
              </div>
              <div>
                <span class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                </span>
                <span>0%</span>
              </div>
            </li>
            <li>
              <div class="progress">
                <div class="progress-bar" style="width: 0%"></div>
              </div>
              <div>
                <span class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                  
                </span>
                <span>0%</span>
              </div>
            </li>
                      <li>
              <div class="progress">
                <div class="progress-bar" style="width: 0%"></div>
              </div>
              <div>
                <span class="rating">
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                </span>
                <span>0%</span>
              </div>
            </li>
                  </ul>
      </div>
    </div>
  </div>
</div>
</div>
<div class="col-lg-4">
  <div class="course-sidebar natural">
          <div class="preview-video-box">
        <a data-toggle="modal" data-target="#CoursePreviewModal">
          <img src="http://pn-learning-management-system-online.test/uploads/thumbnails/course_thumbnails/course-thumbnail.png" alt="" class="img-fluid">
          <span class="preview-text">Preview This Course</span>
          <span class="play-btn"></span>
        </a>
      </div>
        <div class="course-sidebar-text-box">
      <div class="price">
        <span class="current-price"><span class="current-price">$25</span></span>
        <input type="hidden" id="total_price_of_checking_out" value="$25">
      </div>

      <div class="buy-btns">
            <a href="#" class="btn btn-buy-now" id="course_1" onclick="handleBuyNow(this)">Buy Now</a>
            <button class="btn btn-add-cart" type="button" id="1" onclick="handleCartItems(this)">Add To Cart</button>
      </div>
              

      <div class="includes">
        <div class="title"><b>Includes:</b></div>
        <ul>
          <li><i class="far fa-file-video"></i>
            00:00:00 Hours On Demand Videos          </li>
          <li><i class="far fa-file"></i>0 Lessons</li>
          <li><i class="far fa-compass"></i>Full Lifetime Access</li>
          <li><i class="fas fa-mobile-alt"></i>Access On Mobile And Tv</li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</section>
include('layouts.footer')