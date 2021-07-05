@include('head')
@include('userHeader')

<body data-layout="detached" _c_t_common="1" data-new-gr-c-s-check-loaded="14.1016.0" data-gr-ext-installed="" cz-shortcut-listen="true">
    <!-- HEADER -->
    <div class="container-fluid active">
        <div class="wrapper in">
            <!-- BEGIN CONTENT -->
            <!-- SIDEBAR -->
            <!-- ========== Left Sidebar Start ========== -->
            @include('instructeur/sidebar')
            <!-- PAGE CONTAINER-->
            <div class="content-page">
                <div class="content">
                    <!-- BEGIN PlACE PAGE CONTENT HERE -->
                    <div class="row ">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Add New Course</h4>
                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="header-title mb-3">Course Adding Form <a href="{{url('Instructeur/courses')}}" class="alignToTitle btn btn-outline-secondary btn-rounded btn-sm"> <i class=" mdi mdi-keyboard-backspace"></i> Back To Course List</a>
                                    </h4>

                                    <div class="row">
                                        <div class="col-xl-12">
<<<<<<< HEAD
                                            <form class="required-form" action="{{route('courses.store')}}" method="post" enctype="multipart/form-data">
                                                @csrf
=======
                                            <form class="required-form" action="{{url('Instructeur/add_course')}}" method="post" enctype="multipart/form-data">
>>>>>>> 33671f358626af4da682cd3efd3ad72120cddc6e
                                                <div id="basicwizard">

                                                    <ul class="nav nav-pills nav-justified form-wizard-header mb-3">
                                                        <li class="nav-item">
                                                            <a href="#basic" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2 active">
                                                                <i class="mdi mdi-fountain-pen-tip mr-1"></i>
                                                                <span class="d-none d-sm-inline">Basic</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#requirements" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                                <i class="mdi mdi-bell-alert mr-1"></i>
                                                                <span class="d-none d-sm-inline">Tags</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#pricing" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                                <i class="mdi mdi-currency-cny mr-1"></i>
                                                                <span class="d-none d-sm-inline">Pricing</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#media" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                                <i class="mdi mdi-library-video mr-1"></i>
                                                                <span class="d-none d-sm-inline">Media</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#finish" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                                <i class="mdi mdi-checkbox-marked-circle-outline mr-1"></i>
                                                                <span class="d-none d-sm-inline">Finish</span>
                                                            </a>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content b-0 mb-0">
                                                        <div class="tab-pane active" id="basic">
                                                            <div class="row justify-content-center">
                                                                <div class="col-xl-8">
                                                                    <div class="form-group row mb-3">
                                                                        <label class="col-md-2 col-form-label" for="course_title">Course Title <span class="required">*</span> </label>
                                                                        <div class="col-md-10">
                                                                            <input type="text" class="form-control" id="course_title" name="title" placeholder="Enter Course Title" required="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row mb-3">
                                                                        <label class="col-md-2 col-form-label" for="short_description"> Description</label>
                                                                        <div class="col-md-10">
                                                                            <textarea name="description" id="short_description" class="form-control"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row mb-3">
                                                                        <label class="col-md-2 col-form-label" for="sub_category_id">Category<span class="required">*</span></label>
                                                                        <div class="col-md-10">
<<<<<<< HEAD
                                                                            <select class="form-control select2 select2-hidden-accessible" data-toggle="select2" name="category" id="sub_category_id" required="" data-select2-id="sub_category_id" tabindex="-1" aria-hidden="true">
                                                                               @foreach($cts as $ct)
                                                                                <option value="{{$ct->id}}">{{$ct->title}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-sub_category_id-container"><span class="select2-selection__rendered" id="select2-sub_category_id-container" role="textbox" aria-readonly="true" title="Select A Category">Select A Category</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
=======
                                                                            <select class="form-control select2 select2-hidden-accessible" data-toggle="select2" name="sub_category_id" id="sub_category_id" required="" data-select2-id="sub_category_id" tabindex="-1" aria-hidden="true">
                                                                                <option value="" data-select2-id="2">Select A Category</option>
                                                                                <optgroup label="Math">
                                                                                    <option value="2">Algebre</option>
                                                                                </optgroup>
                                                                                <optgroup label="Eng">
                                                                                    <option value="4">Grammer</option>
                                                                                </optgroup>
                                                                            </select>
>>>>>>> 33671f358626af4da682cd3efd3ad72120cddc6e
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row mb-3">
                                                                        <label class="col-md-2 col-form-label" for="level">Level</label>
                                                                        <div class="col-md-10">
                                                                            <select class="form-control select2 select2-hidden-accessible" data-toggle="select2" name="level" id="level" data-select2-id="level" tabindex="-1" aria-hidden="true">
                                                                                <option value="beginner" data-select2-id="4">Beginner</option>
                                                                                <option value="advanced">Advanced</option>
                                                                                <option value="intermediate">Intermediate</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row mb-3">
                                                                        <label class="col-md-2 col-form-label" for="language_made_in">Language Made In</label>
                                                                        <div class="col-md-10">
                                                                            <select class="form-control select2 select2-hidden-accessible" data-toggle="select2" name="language" id="language_made_in" data-select2-id="language_made_in" tabindex="-1" aria-hidden="true">
                                                                                <option value="bengali" data-select2-id="6">Bengali</option>
                                                                                <option value="english">English</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row mb-3">
                                                                        <div class="offset-md-2 col-md-10">
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" name="is_top_course" id="is_top_course" value="1">
                                                                                <label class="custom-control-label" for="is_top_course">Check If This Course Is Top Course</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                            </div> <!-- end row -->
                                                        </div> <!-- end tab pane -->
                                                        <div class="tab-pane" id="requirements">
                                                            <div class="row justify-content-center">
                                                                <div class="col-xl-8">
                                                                    <div class="form-group row mb-3">
                                                                        <label class="col-md-2 col-form-label" for="requirements">Tags
                                                                        </label>
                                                                        <div class="col-md-10">
                                                                            <div id="requirement_area">
                                                                                <div class="d-flex mt-2">
                                                                                    <div class="flex-grow-1 px-3">
                                                                                        <div class="form-group">
                                                                                            <input type="text" class="form-control" name="tags" id="tags" placeholder="Provide tags">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane" id="pricing">
                                                            <div class="row justify-content-center">
                                                                <div class="col-xl-8">

                                                                    <div class="form-group row mb-3">
                                                                        <label class="col-md-2 col-form-label" for="price">Course Price ($)</label>
                                                                        <div class="col-md-10">
                                                                            <input type="number" class="form-control" id="price" name="price" placeholder="Enter Course Course Price" min="0">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row mb-3">
                                                                        <label class="col-md-2 col-form-label" for="discounted_price">Discounted Price ($)</label>
                                                                        <div class="col-md-10">
<<<<<<< HEAD
                                                                            <input type="number" class="form-control" name="discount" id="discounted_price" onkeyup="calculateDiscountPercentage(this.value)" min="0">
                                                                            <small class="text-muted">This Course Has <span id="discounted_percentage" class="text-danger">0%</span> Discount</small>
=======
                                                                            <input type="number" class="form-control" name="discounted_price" id="discounted_price" onkeyup="calculateDiscountPercentage(this.value)" min="0">
>>>>>>> 33671f358626af4da682cd3efd3ad72120cddc6e
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                            </div> <!-- end row -->
                                                        </div> <!-- end tab-pane -->
                                                        <div class="tab-pane" id="media">
                                                            <div class="row justify-content-center">

                                                                <div class="col-xl-8">
                                                                    <div class="form-group row mb-3">
                                                                        <label class="col-md-2 col-form-label" for="course_overview_provider">Course Overview Provider</label>
                                                                        <div class="col-md-10">
                                                                            <select class="form-control select2 select2-hidden-accessible" data-toggle="select2" name="overview_provider" id="course_overview_provider" data-select2-id="course_overview_provider" tabindex="-1" aria-hidden="true">
                                                                                <option value="youtube" data-select2-id="8">Youtube</option>
                                                                                <option value="html5">Html5</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->

                                                                <div class="col-xl-8">
                                                                    <div class="form-group row mb-3">
                                                                        <label class="col-md-2 col-form-label" for="course_overview_url">Course Overview Url</label>
                                                                        <div class="col-md-10">
                                                                            <input type="text" class="form-control" name="overview_url" id="course_overview_url" placeholder="E.g: https://www.youtube.com/watch?v=oBtf8Yglw2w">
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->

                                                                <div class="col-xl-8">
                                                                    <div class="form-group row mb-3">
                                                                        <label class="col-md-2 col-form-label" for="course_thumbnail_label">Course Thumbnail</label>
                                                                        <div class="col-md-10">
                                                                            <div class="wrapper-image-preview" style="margin-left: -6px;">
                                                                                <div class="box" style="width: 250px;">
                                                                                    <div class="js--image-preview" style="background-image: url(uploads/thumbnails/course_thumbnails/course-thumbnail.png); background-color: #F5F5F5;"></div>
                                                                                    <div class="upload-options">
                                                                                        <label for="course_thumbnail" class="btn"> <i class="mdi mdi-camera"></i> Course Thumbnail <br> <small>(600 X 600)</small> </label>
                                                                                        <input id="course_thumbnail" style="visibility:hidden;" type="file" class="image-upload" name="file" accept="image/*">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                            </div> <!-- end row -->
                                                        </div>
                                                        <div class="tab-pane" id="finish">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="text-center">
                                                                        <h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>
                                                                        <h3 class="mt-0">Thank You !</h3>

                                                                        <p class="w-75 mb-2 mx-auto">You Are Just One Click Away</p>

                                                                        <div class="mb-3 mt-3">
                                                                            <button type="button" class="btn btn-primary text-center" onclick="checkRequiredFields()">Submit</button>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                            </div> <!-- end row -->
                                                        </div>

                                                        <ul class="list-inline mb-0 wizard text-center">
                                                            <li class="previous list-inline-item disabled">
                                                                <a href="javascript::" class="btn btn-info"> <i class="mdi mdi-arrow-left-bold"></i> </a>
                                                            </li>
                                                            <li class="next list-inline-item">
                                                                <a href="javascript::" class="btn btn-info"> <i class="mdi mdi-arrow-right-bold"></i> </a>
                                                            </li>
                                                        </ul>

                                                    </div> <!-- tab-content -->
                                                </div> <!-- end #progressbarwizard-->
                                            </form>
                                        </div>
                                    </div><!-- end row-->
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div>
                    </div>


                    <script type="text/javascript">
                        $(document).ready(function() {
                            initSummerNote(['#description']);
                        });
                    </script>

                    <script type="text/javascript">
                        var blank_outcome = jQuery('#blank_outcome_field').html();
                        var blank_requirement = jQuery('#blank_requirement_field').html();
                        jQuery(document).ready(function() {
                            jQuery('#blank_outcome_field').hide();
                            jQuery('#blank_requirement_field').hide();
                        });

                        function appendOutcome() {
                            jQuery('#outcomes_area').append(blank_outcome);
                        }

                        function removeOutcome(outcomeElem) {
                            jQuery(outcomeElem).parent().parent().remove();
                        }

                        function appendRequirement() {
                            jQuery('#requirement_area').append(blank_requirement);
                        }

                        function removeRequirement(requirementElem) {
                            jQuery(requirementElem).parent().parent().remove();
                        }

                        function priceChecked(elem) {
                            if (jQuery('#discountCheckbox').is(':checked')) {

                                jQuery('#discountCheckbox').prop("checked", false);
                            } else {

                                jQuery('#discountCheckbox').prop("checked", true);
                            }
                        }

                        function topCourseChecked(elem) {
                            if (jQuery('#isTopCourseCheckbox').is(':checked')) {

                                jQuery('#isTopCourseCheckbox').prop("checked", false);
                            } else {

                                jQuery('#isTopCourseCheckbox').prop("checked", true);
                            }
                        }

                        function isFreeCourseChecked(elem) {

                            if (jQuery('#' + elem.id).is(':checked')) {
                                $('#price').prop('required', false);
                            } else {
                                $('#price').prop('required', true);
                            }
                        }

                        function calculateDiscountPercentage(discounted_price) {
                            if (discounted_price > 0) {
                                var actualPrice = jQuery('#price').val();
                                if (actualPrice > 0) {
                                    var reducedPrice = actualPrice - discounted_price;
                                    var discountedPercentage = (reducedPrice / actualPrice) * 100;
                                    if (discountedPercentage > 0) {
                                        jQuery('#discounted_percentage').text(discountedPercentage.toFixed(2) + '%');

                                    } else {
                                        jQuery('#discounted_percentage').text('0%');
                                    }
                                }
                            }
                        }
                    </script>

                    <style media="screen">
                        body {
                            overflow-x: hidden;
                        }
                    </style>
                    <!-- END PLACE PAGE CONTENT HERE -->
                </div>
            </div>
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