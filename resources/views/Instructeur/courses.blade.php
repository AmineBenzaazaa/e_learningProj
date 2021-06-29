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
                                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Courses                    
                                <a href="{{url('Instructeur/add_course')}}" class="btn btn-outline-primary btn-rounded alignToTitle"><i class="mdi mdi-plus"></i>Add New Course</a>
                                </h4>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card widget-inline">
                            <div class="card-body p-0">
                                <div class="row no-gutters">
                                    <div class="col">
                                        <a href="{{url('Instructeur/courses')}}" class="text-secondary">
                                            <div class="card shadow-none m-0">
                                                <div class="card-body text-center">
                                                    <i class="dripicons-link text-muted" style="font-size: 24px;"></i>
                                                    <h3><span>
                                                        0                                    </span></h3>
                                                    <p class="text-muted font-15 mb-0">Active Courses</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col">
                                        <a href="{{url('Instructeur/courses')}}" class="text-secondary">
                                            <div class="card shadow-none m-0 border-left">
                                                <div class="card-body text-center">
                                                    <i class="dripicons-link-broken text-muted" style="font-size: 24px;"></i>
                                                    <h3><span>
                                                        0                                    </span></h3>
                                                    <p class="text-muted font-15 mb-0">Pending Courses</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col">
                                        <a href="{{url('Instructeur/courses')}}" class="text-secondary">
                                            <div class="card shadow-none m-0 border-left">
                                                <div class="card-body text-center">
                                                    <i class="dripicons-bookmark text-muted" style="font-size: 24px;"></i>
                                                    <h3><span>
                                                        0                                    </span></h3>
                                                    <p class="text-muted font-15 mb-0">Draft Courses</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col">
                                        <a href="{{url('Instructeur/courses')}}" class="text-secondary">
                                            <div class="card shadow-none m-0 border-left">
                                                <div class="card-body text-center">
                                                    <i class="dripicons-star text-muted" style="font-size: 24px;"></i>
                                                    <h3><span>0</span></h3>
                                                    <p class="text-muted font-15 mb-0">Free Courses</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col">
                                        <a href="{{url('Instructeur/courses')}}" class="text-secondary">
                                            <div class="card shadow-none m-0 border-left">
                                                <div class="card-body text-center">
                                                    <i class="dripicons-tags text-muted" style="font-size: 24px;"></i>
                                                    <h3><span>0</span></h3>
                                                    <p class="text-muted font-15 mb-0">Paid Courses</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div> <!-- end row -->
                            </div>
                        </div> <!-- end card-box-->
                    </div> <!-- end col-->
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">Course List</h4>
                                <form class="row justify-content-center" action="{{url('Instructeur/courses')}}" method="get">
                                    <!-- Course Categories -->
                                    <div class="col-xl-3">
                                        <div class="form-group">
                                            <label for="category_id">Categories</label>
                                            <select class="form-control select2 select2-hidden-accessible" data-toggle="select2" name="category_id" id="category_id" data-select2-id="category_id" tabindex="-1" aria-hidden="true">
                                                <option value="all" selected="" data-select2-id="2">All</option>
                                                                                    <optgroup label="Math">
                                                                                                <option value="2">Algebre</option>
                                                                                    </optgroup>
                                                                                <optgroup label="Eng">
                                                                                                <option value="4">Grammer</option>
                                                                                    </optgroup>
                                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 339.953px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-category_id-container"><span class="select2-selection__rendered" id="select2-category_id-container" role="textbox" aria-readonly="true" title="All">All</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>

                                <!-- Course Status -->
                                <div class="col-xl-3">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control select2 select2-hidden-accessible" data-toggle="select2" name="status" id="status" data-select2-id="status" tabindex="-1" aria-hidden="true">
                                            <option value="all" selected="" data-select2-id="4">All</option>
                                            <option value="active">Active</option>
                                            <option value="pending">Pending</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: 339.953px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-status-container"><span class="select2-selection__rendered" id="select2-status-container" role="textbox" aria-readonly="true" title="All">All</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>

                                <!-- Course Price -->
                                <div class="col-xl-3">
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <select class="form-control select2 select2-hidden-accessible" data-toggle="select2" name="price" id="price" data-select2-id="price" tabindex="-1" aria-hidden="true">
                                            <option value="all" selected="" data-select2-id="6">All</option>
                                            <option value="free">Free</option>
                                            <option value="paid">Paid</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 339.953px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-price-container"><span class="select2-selection__rendered" id="select2-price-container" role="textbox" aria-readonly="true" title="All">All</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>

                                <div class="col-xl-3">
                                    <label for=".." class="text-white">..</label>
                                    <button type="submit" class="btn btn-primary btn-block" name="button">Filter</button>
                                </div>
                            </form>

                            <div class="table-responsive-sm mt-4">
                                                                    <div class="img-fluid w-100 text-center">
                                    <img style="opacity: 1; width: 100px;" src="http://pn-learning-management-system-online.test/assets/backend/images/file-search.svg"><br>
                                    No Data Found                    </div>
                                            </div>
                        </div>
                    </div>
                </div>
                </div>
                                    <!-- END PLACE PAGE CONTENT HERE -->
                                </div>
                            </div>