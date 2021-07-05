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

<div class="main-wrap">

    <div class="banner-wrapper bg-after-fluid">
        <div class="container">
            <div class="row">

                <div class="col-xl-6 col-lg-5 order-lg-2 ">
                    <video class="pt-lg--10 w-100 aos-init aos-animate videopos" playsinline="" autoplay="0" muted="" style="width: 750px;height: 600px;">
                        <source src="{{ url('/uploads/slider.mp4') }}" type="video/mp4">
                        <!-- UIV21.mp4 -->
                    </video>

                    <!-- <img src="{{ url('/uploads/bb-45.png') }}" alt="image" class="pt-lg--10 w-100 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="500"> -->
                </div>
                <div class="col-xl-6 col-lg-7 order-lg-1 pt-lg--10 pb-lg--10 xl-p-5">
                    <h2 class="display3-size display2-md-size fw-700 aos-init" data-aos="fade-up" data-aos-delay="100" data-aos-duration="500">Find the best perfect Online Course</h2>
                    <!-- <h4 class="text-grey-500 font-xssss fw-500 ml-1 aos-init lh-24" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500">For only course you need to learn web development</h4> -->
                    <div class="form-group mt-lg-5 p-3 border-light border p-2 bg-white rounded-lg aos-init" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="form-group icon-input mb-0">
                                    <i class="dripicons-view-apps"></i>
                                    <input type="text" class="style1-input bg-transparent border-0 pl-5 font-xsss mb-0 text-grey-500 fw-500" placeholder="Search online courses..">
                                </div>
                            </div>


                            <div class="col-lg-3">
                                <a href="#" class="w-100 d-block btn bg-current text-white font-xssss fw-600 ls-3 style1-input p-0 border-0 text-uppercase ">Search</a>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-grey-500"> <b class="text-grey-800">Popular Search :</b> History, Computer Science, Language, Politics, Engineering, Maths </h6>
                </div>
            </div>
        </div>
    </div>


    <div class="how-to-work pt-lg--5 pb-lg--7 mt-5">
        <div class="container">
            <div class="row justify-content-center pt-2">
                <div class="page-title style1 col-xl-6 col-lg-8 col-md-10 text-center mb-5">
                    <h2 class="text-grey-900 display1-size display2-md-size pb-3 mt-3 mb-0 d-block"><b>Learning Process</h2>
                    <p class="fw-300 font-xsss lh-28 text-grey-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dol ad minim veniam, quis nostrud exercitation</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card p-4 border-0 text-center d-block arrow-right">
                        <svg class="svgshape position-absolute top-0" style="margin-left: -44px; opacity: 0.2;" xmlns="http://www.w3.org/2000/svg" width="125.062" height="88.62" viewBox="0 0 125.062 88.62">
                            <path style="fill: #ffb09f !important;" d="M488.806,2544.02s35.988-16.17,53.518-7.45S565,2541.44,574,2549s18.09,19.21,14.009,41.12c-3.62,19.44-25.466,15.87-37.2,27.79-10.557,10.72-68.616,1.88-74.4-12.88-6.841-17.45-13.114-17.84-12.406-34.03C464.452,2560.66,475.315,2554.71,488.806,2544.02Z" transform="translate(-463.938 -2534)"></path>
                        </svg>
                        <!-- <i class="feather-layers display1-size position-relative z-index text-warning"></i> -->
                        <img src="{{ url('/uploads/choose.svg') }}" alt="image" class="iconimag aos-animate" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="500">

                        <h4 class="font-md fw-700 text-grey-900 mt-4 mb-3">Choose Cours</h4>
                        <p class="fw-500 font-xsss lh-28 text-grey-500">Praesent porttitor nunc vitae lacus vehicula, nec mollis eros congue.</p>
                    </div>
                </div>
                <div class="col-lg-4 arrow-right">
                    <div class="card p-4 border-0 text-center d-block">
                        <svg class="svgshape position-absolute top-0" style="margin-left: -44px; opacity: 0.2;" xmlns="http://www.w3.org/2000/svg" width="125.062" height="88.62" viewBox="0 0 125.062 88.62">
                            <path style="fill: #ad78ef !important" d="M488.806,2544.02s35.988-16.17,53.518-7.45S565,2541.44,574,2549s18.09,19.21,14.009,41.12c-3.62,19.44-25.466,15.87-37.2,27.79-10.557,10.72-68.616,1.88-74.4-12.88-6.841-17.45-13.114-17.84-12.406-34.03C464.452,2560.66,475.315,2554.71,488.806,2544.02Z" transform="translate(-463.938 -2534)"></path>
                        </svg>
                        <img src="{{ url('/uploads/payment.svg') }}" alt="image" class="iconimag aos-animate" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="500">
                        <h4 class="font-md fw-700 text-grey-900 mt-4 mb-3">Make payment</h4>
                        <p class="fw-500 font-xsss lh-28 text-grey-500">Praesent porttitor nunc vitae lacus vehicula, nec mollis eros congue.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card p-4 border-0 text-center d-block">
                        <svg class="svgshape position-absolute top-0" style="margin-left: -44px; opacity: 0.2;" xmlns="http://www.w3.org/2000/svg" width="125.062" height="88.62" viewBox="0 0 125.062 88.62">
                            <path style="fill: #3ed2a7 !important" d="M488.806,2544.02s35.988-16.17,53.518-7.45S565,2541.44,574,2549s18.09,19.21,14.009,41.12c-3.62,19.44-25.466,15.87-37.2,27.79-10.557,10.72-68.616,1.88-74.4-12.88-6.841-17.45-13.114-17.84-12.406-34.03C464.452,2560.66,475.315,2554.71,488.806,2544.02Z" transform="translate(-463.938 -2534)"></path>
                        </svg>
                        <img src="{{ url('/uploads/learn.svg') }}" alt="image" class="iconimag aos-animate" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="500">
                        <h4 class="font-md fw-700 text-grey-900 mt-4 mb-3">Start Learning</h4>
                        <p class="fw-500 font-xsss lh-28 text-grey-500">Praesent porttitor nunc vitae lacus vehicula, nec mollis eros congue.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="how-to-work2 pb-lg--7 mt-5">
        <div class="container">
            <div class="row justify-content-center pt-2 ">
                <div class="page-title style1 col-xl-6 col-lg-8 col-md-10 text-center mb-5">
                    <h2 class="text-white fw-700 display1-size display2-md-size pb-3 mb-0 d-block mt-5">Online Popular Course</h2>
                    <p class="fw-300 font-xsss lh-28 text-white">orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dol ad minim veniam, quis nostrud exercitation</p>
                </div>
            </div>

            <div class="row pb-5">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                    <div class="card course-card w-100 p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1">
                        <div class="card-image w-100 mb-3">
                            <a href="default-course-details.html" class="video-bttn position-relative d-block"><img src="{{ url('/uploads/v-5.jpg') }}" alt="image" class="w-100"></a>
                        </div>
                        <div class="card-body pt-0">
                            <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-danger d-inline-block text-danger mr-1">Category</span>
                            <span class="font-xss fw-700 pl-3 pr-3 ls-2 lh-32 d-inline-block text-success float-right"><span class="font-xsssss">$</span> 370</span>
                            <h4 class="fw-700 font-xss mt-3 lh-28 mt-0"><a href="default-course-details.html" class="text-dark text-grey-900">The Data Science Course Complete Data Science </a></h4>
                            <h6 class="font-xssss text-grey-500 fw-600 ml-0 mt-2"> 23 Lesson <span class="float-right mt-1 font-xssss text-grey-500">87%</span></h6>


                            <div class="star float-left text-left mb-0">
                                <img src="{{ url('/uploads/star.png') }}" alt="star" class="w10 mr-1 float-left">
                                <img src="{{ url('/uploads/star.png') }}" alt="star" class="w10 mr-1 float-left">
                                <img src="{{ url('/uploads/star.png') }}" alt="star" class="w10 mr-1 float-left">
                                <img src="{{ url('/uploads/star.png') }}" alt="star" class="w10 mr-1 float-left">
                                <img src="{{ url('/uploads/star-disable.png') }}" alt="star" class="w10 float-left mr-2">
                            </div>
                            <p class="review-link mt-0 font-xssss float-right mb-2 fw-500 text-grey-500 lh-3"> 2 customer review</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>