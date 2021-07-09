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

    <section class="page-header-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Shopping Cart</a></li>
                        </ol>
                    </nav>
                    <h1 class="page-title">Shopping Cart</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="cart-list-area">
        <div class="container">
            <div class="row" id="cart_items_details">
                <div class="col-lg-9">

                    <div class="in-cart-box">
                        <div class="title">0 Courses In Cart</div>
                        <div class="">
                            <ul class="cart-course-list">

                        </ul>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3">
                    <div class="cart-sidebar">
                        <div class="total">Total:</div>
                        <span id="total_price_of_checking_out" hidden="">0</span>
                        <div class="total-price"></div>
                        <div class="total-original-price">
                            <span class="original-price"></span>
                            <!-- <span class="discount-rate">95% off</span> -->
                        </div>
                        <button type="button" class="btn btn-primary btn-block checkout-btn" onclick="handleCheckOut()">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@include('layouts.footer')