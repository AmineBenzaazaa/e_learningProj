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
                                    <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Update: Lorem Ipsum</h4>
                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Course Manager <a href="http://xxpn-learning-management-system-online.test/admin/preview/1" class="alignToTitle btn btn-outline-secondary btn-rounded btn-sm ml-1" target="_blank">View On Frontend <i class="mdi mdi-arrow-right"></i> </a>
                                        <a href="http://xxpn-learning-management-system-online.test/admin/courses" class="alignToTitle btn btn-outline-secondary btn-rounded btn-sm"> <i class=" mdi mdi-keyboard-backspace"></i> Back To Course List</a>
                                    </h4>

                                    <div class="row">
                                        <div class="col-xl-12">
                                                <div id="basicwizard">
                                                    <ul class="nav nav-pills nav-justified form-wizard-header mb-3">
                                                        <li class="nav-item">
                                                            <a href="#curriculum" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2 active">
                                                                <i class="mdi mdi-account-circle mr-1"></i>
                                                                <span class="d-none d-sm-inline">Curriculum</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#basic" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
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
                                                        <div class="tab-pane active" id="curriculum">
                                                            <div class="row justify-content-center">
                                                                <div class="col-xl-12 mb-4 text-center mt-3">
                                                                    <!-- Button to Open the Modal -->
                                                                    <a type="button" class="btn btn-outline-primary btn-rounded btn-sm ml-1" data-toggle="modal" data-target="#addsection"><i class="mdi mdi-plus"></i> Add Section</a>

                                                                    <a type="button" class="btn btn-outline-primary btn-rounded btn-sm ml-1" data-toggle="modal" data-target="#addlesson"><i class="mdi mdi-plus"></i> Add Lesson</a>
                                                                </div>

                                                                <div class="col-xl-8">
                                                                    <div class="row">
                                                                        <div class="col-xl-12">
                                                                            <div class="card bg-light text-seconday on-hover-action mb-5" id="section-1">
                                                                                @foreach($sec as $section)
                                                                                <div class="modal" id="deletemodal">
                                                                                    <div class="modal-dialog modal-sm">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-body p-4">
                                                                                                <div class="text-center">
                                                                                                    <i class="dripicons-information h1 text-info"></i>
                                                                                                    <h4 class="mt-2">Heads Up!</h4>
                                                                                                    <p class="mt-3">Are You Sure u want to delete This Section?</p>
                                                                                                    <button type="button" class="btn btn-info my-2" data-dismiss="modal">Cancel</button>
                                                                                                    <form action="{{route('sections.destroy',$section->id)}}" method="POST">
                                                                                                    @csrf
                                                                                                    @method('DELETE')
                                                                                                    <button type="submit"  class="btn btn-danger my-2">Delete Section</button>
                                                                                                </form>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div><!-- /.modal-content -->
                                                                                    </div><!-- /.modal-dialog -->
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <h5 class="card-title" style="min-height: 35px;"><span class="font-weight-light">Section {{$section->id}}</span>: {{$section->title}} <div class="row justify-content-center alignToTitle float-right display-block" id="widgets-of-section-1" style="display: block;">
                                                                                            <button type="button" class="btn btn-outline-secondary btn-rounded btn-sm ml-1 display-block" name="button" data-toggle="modal" data-target="#editmodal"><i class="mdi mdi-pencil-outline"></i> Edit Section</button>
                                                                                            <button type="button" class="btn btn-outline-secondary btn-rounded btn-sm ml-1 display-block" name="button" data-toggle="modal" data-target="#deletemodal"><i class="mdi mdi-window-close"></i> Delete Section</button>
                                                                                        </div>
                                                                                    </h5>
                                                                                    <div class="clearfix"></div>
                                                                                    <div class="col-md-12">
                                                                                        <!-- Portlet card -->
                                                                                        <div class="card text-secondary on-hover-action mb-2" id="lesson-1">
                                                                                            @foreach($section->lessons as $ls)
                                                                                            <div class="modal" id="deletelesson">
                                                                                            <div class="modal-dialog modal-sm">
                                                                                                <div class="modal-content">
                                                                                                    <div class="modal-body p-4">
                                                                                                        <div class="text-center">
                                                                                                            <i class="dripicons-information h1 text-info"></i>
                                                                                                            <h4 class="mt-2">Heads Up!</h4>
                                                                                                            <p class="mt-3">Are You Sure u want to delete This Lesson?</p>
                                                                                                            <button type="button" class="btn btn-info my-2" data-dismiss="modal">Cancel</button>
                                                                                                            <form action="{{route('lessons.destroy',$ls->id)}}" method="POST">
                                                                                                            @csrf
                                                                                                            @method('DELETE')
                                                                                                            <button type="submit"  class="btn btn-danger my-2">Delete Lesson</button>
                                                                                                            </form>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div><!-- /.modal-content -->
                                                                                            </div><!-- /.modal-dialog -->
                                                                                        </div>
                                                                                            <div class="card-body thinner-card-body">
                                                                                                <div class="card-widgets display-block" id="widgets-of-lesson-1" style="display: block;">
                                                                                                    <a data-toggle="modal" data-target="#editlesson"><i class="mdi mdi-pencil-outline"></i></a>
                                                                                                    <a data-toggle="modal" data-target="#deletelesson"><i class="mdi mdi-window-close"></i></a>
                                                                                                </div>
                                                                                                <h5 class="card-title mb-0">
                                                                                                    <span class="font-weight-light">
                                                                                                        <img src="http://xxpn-learning-management-system-online.test/assets/backend/lesson_icon/img.png" alt="" height="16">
                                                                                                        Lesson {{$ls->id}} </span>: {{$ls->title}}
                                                                                                        
                                                                                                </h5>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div> <!-- end card-->
                                                                                    </div>
                                                                                </div> <!-- end card-body-->
                                                                                @endforeach
                                                                            </div> <!-- end card-->
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <form action="{{route('courses.update',$crs->id)}}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                        <div class="tab-pane" id="basic">
                                                            <div class="row justify-content-center">
                                                                <div class="col-xl-8">
                                                                    <div class="form-group row mb-3">
                                                                        <label class="col-md-2 col-form-label" for="course_title">Course Title <span class="required">*</span> </label>
                                                                        <div class="col-md-10">
                                                                            <input type="text" class="form-control" id="course_title" name="title" placeholder="Enter Course Title" required="" value="{{$crs->title}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row mb-3">
                                                                        <label class="col-md-2 col-form-label" for="short_description"> Description</label>
                                                                        <div class="col-md-10">
                                                                            <textarea name="description" id="short_description" class="form-control">{{$crs->description}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row mb-3">
                                                                        <label class="col-md-2 col-form-label" for="sub_category_id">Category<span class="required">*</span></label>
                                                                        <div class="col-md-10">
                                                                            <select class="form-control select2" data-toggle="select2" name="category" id="sub_category_id" required="" data-select2-id="sub_category_id" tabindex="-1" aria-hidden="true">
                                                                                @foreach($cts as $ct)
                                                                                <option value="{{$ct->id}}">{{$ct->title}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row mb-3">
                                                                        <label class="col-md-2 col-form-label" for="level">Level</label>
                                                                        <div class="col-md-10">
                                                                            <select class="form-control select2" data-toggle="select2" name="level" id="level" data-select2-id="level" tabindex="-1" aria-hidden="true">
                                                                                <option value="beginner" data-select2-id="4">Beginner</option>
                                                                                <option value="advanced">Advanced</option>
                                                                                <option value="intermediate">Intermediate</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row mb-3">
                                                                        <label class="col-md-2 col-form-label" for="language_made_in">Language Made In</label>
                                                                        <div class="col-md-10">
                                                                            <select class="form-control select2" data-toggle="select2" name="language" id="language_made_in" data-select2-id="language_made_in" tabindex="-1" aria-hidden="true">
                                                                                <option value="english">English</option>
                                                                                <option value="english">Arabic</option>
                                                                                <option value="english">Frensh</option>
                                                                            </select>
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
                                                                                            <input type="text" class="form-control" name="tags" id="tags" placeholder="Provide tags" value="{{$crs->tags}}">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>Separate tags with Commas.</label>
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
                                                                            <input type="number" class="form-control" id="price" name="price" placeholder="Enter Course Course Price" min="0" value="{{$crs->price}}">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row mb-3">
                                                                        <label class="col-md-2 col-form-label" for="discounted_price">Discounted Price ($)</label>
                                                                        <div class="col-md-10">
                                                                            <input type="number" class="form-control" name="discount" id="discounted_price" value="{{$crs->discount}}" onkeyup="calculateDiscountPercentage(this.value)" min="0">
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                            </div> <!-- end row -->
                                                        </div> <!-- end tab-pane -->

                                                        <div class="tab-pane" id="media">
                                                            <div class="row justify-content-center">

                                                                <div class="col-xl-8">
                                                                    <div class="form-group row mb-3">
                                                                        <label class="col-md-2 col-form-label" for="course_overview_url">Youtube link</label>
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
                                                                                <button type="submit" class="btn btn-primary text-center" >Submit</button>
                                                                            </div>
                                                                        </div>
                                                                    </div> <!-- end col -->
                                                                </div> <!-- end row -->
                                                            </div>
                                                    </form>
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
                    <!-- END PLACE PAGE CONTENT HERE -->
                </div>
            </div>

            <!-- The Modal -->
            <div class="modal" id="addsection">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="{{route('sections.store')}}" method="post">
                        @csrf
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title"> Add Section </h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body ml-2 mr-2">
                                
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input class="form-control" type="text" name="title" id="title" required="">
                                        <input type="hidden" name="id" value="{{$crs->id}}">
                                        <small class="text-muted">Provide A Section Name</small>
                                    </div>
                                
                            </div>
                             <!-- Modal footer -->
                            <div class="modal-footer mx-auto">
                                <div class="text-left">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-success" type="submit" name="button">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal" id="addlesson">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <form action="{{route('lessons.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title"> Add Lesson </h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="modal-body ml-2 mr-2">
                            <input type="hidden" name="id" value="{{$crs->id}}">

                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="section_id">Section</label>
                                        <select class="form-control select2" data-toggle="select2" name="section_id" id="section_id" required="" data-select2-id="section_id" tabindex="-1" aria-hidden="true">
                                            @foreach($sec as $v)
                                            <option value="{{$v->id}}">{{$v->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="" id="other">
                                        <div class="form-group">
                                            <label> Add video </label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="attachment" name="attachment" onchange="changeTitleOfImageUploader(this)">
                                                    <label class="custom-file-label" for="attachment">Attachment</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Summary</label>
                                        <textarea name="summary" class="form-control"></textarea>
                                    </div>
                                
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        initSelect2(['#section_id', '#lesson_type', '#lesson_provider']);
                                        initTimepicker();
                                    });

                                    function ajax_get_video_details(video_url) {
                                        $('#perloader').show();
                                        if (checkURLValidity(video_url)) {
                                            $.ajax({
                                                url: 'http://xxpn-learning-management-system-online.test/admin/ajax_get_video_details',
                                                type: 'POST',
                                                data: {
                                                    video_url: video_url
                                                },
                                                success: function(response) {
                                                    jQuery('#duration').val(response);
                                                    $('#perloader').hide();
                                                    $('#invalid_url').hide();
                                                }
                                            });
                                        } else {
                                            $('#invalid_url').show();
                                            $('#perloader').hide();
                                            jQuery('#duration').val('');

                                        }
                                    }

                                    function checkURLValidity(video_url) {
                                        var youtubePregMatch = /^(?:https?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))((\w|-){11})(?:\S+)?$/;
                                        var vimeoPregMatch = /^(http\:\/\/|https\:\/\/)?(www\.)?(vimeo\.com\/)([0-9]+)$/;
                                        if (video_url.match(youtubePregMatch)) {
                                            return true;
                                        } else if (vimeoPregMatch.test(video_url)) {
                                            return true;
                                        } else {
                                            return false;
                                        }
                                    }

                                    function show_lesson_type_form(param) {
                                        var checker = param.split('-');
                                        var lesson_type = checker[0];
                                        if (lesson_type === "video") {
                                            $('#other').hide();
                                            $('#video').show();
                                        } else if (lesson_type === "other") {
                                            $('#video').hide();
                                            $('#other').show();
                                        } else {
                                            $('#video').hide();
                                            $('#other').hide();
                                        }
                                    }

                                    function check_video_provider(provider) {
                                        if (provider === 'youtube' || provider === 'vimeo') {
                                            $('#html5').hide();
                                            $('#youtube_vimeo').show();
                                        } else if (provider === 'html5') {
                                            $('#youtube_vimeo').hide();
                                            $('#html5').show();
                                        } else {
                                            $('#youtube_vimeo').hide();
                                            $('#html5').hide();
                                        }
                                    }
                                </script>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer mx-auto">
                            <div class="text-left">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-success" type="submit" name="button">Add Lesson</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>


            



            