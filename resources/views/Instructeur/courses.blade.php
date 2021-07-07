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
                                        <a href="{{route('courses.create')}}" class="btn btn-outline-primary btn-rounded alignToTitle"><i class="mdi mdi-plus"></i>Add New Course</a>
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
                                                                0 </span></h3>
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
                                                                0 </span></h3>
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
                                                                0 </span></h3>
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
                                    <form class="row justify-content-center" action="http://pn-learning-management-system-online.test/admin/courses" method="get">
                                        <!-- Course Categories -->
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                                <label for="category_id">Categories</label>
                                                <select class="form-control select2 select2-hidden-accessible" data-toggle="select2" name="category_id" id="category_id" data-select2-id="category_id" tabindex="-1" aria-hidden="true">
                                                    <option value="all" selected="" data-select2-id="2">All</option>
                                                                                        <optgroup label="Math">
                                                                                                    <option value="2">Algebre</option>
                                                                                        </optgroup>
                                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 231.625px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-category_id-container"><span class="select2-selection__rendered" id="select2-category_id-container" role="textbox" aria-readonly="true" title="All">All</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                    </div>
                                    <!-- Course Status -->
                                    <div class="col-xl-2">
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control select2 select2-hidden-accessible" data-toggle="select2" name="status" id="status" data-select2-id="status" tabindex="-1" aria-hidden="true">
                                                <option value="all" selected="" data-select2-id="4">All</option>
                                                <option value="active">Active</option>
                                                <option value="pending">Pending</option>
                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: 144.411px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-status-container"><span class="select2-selection__rendered" id="select2-status-container" role="textbox" aria-readonly="true" title="All">All</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                    </div>

                                    <!-- Course Instructors -->
                                    <div class="col-xl-3">
                                        <div class="form-group">
                                            <label for="instructor_id">Instructor</label>
                                            <select class="form-control select2 select2-hidden-accessible" data-toggle="select2" name="instructor_id" id="instructor_id" data-select2-id="instructor_id" tabindex="-1" aria-hidden="true">
                                                <option value="all" selected="" data-select2-id="6">All</option>
                                                                                <option value="1">admin admin</option>
                                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 231.625px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-instructor_id-container"><span class="select2-selection__rendered" id="select2-instructor_id-container" role="textbox" aria-readonly="true" title="All">All</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                    </div>

                                    <!-- Course Price -->
                                    <div class="col-xl-2">
                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <select class="form-control select2 select2-hidden-accessible" data-toggle="select2" name="price" id="price" data-select2-id="price" tabindex="-1" aria-hidden="true">
                                                <option value="all" selected="" data-select2-id="8">All</option>
                                                <option value="free">Free</option>
                                                <option value="paid">Paid</option>
                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="7" style="width: 144.411px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-price-container"><span class="select2-selection__rendered" id="select2-price-container" role="textbox" aria-readonly="true" title="All">All</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                    </div>

                                    <div class="col-xl-2">
                                        <label for=".." class="text-white">..</label>
                                        <button type="submit" class="btn btn-primary btn-block" name="button">Filter</button>
                                    </div>
                                </form>

                                <div class="table-responsive-sm mt-4">
                                                        <div id="course-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="course-datatable_length"><label>Show <select name="course-datatable_length" aria-controls="course-datatable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="course-datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="course-datatable"></label></div></div></div><div class="row"><div class="col-sm-12"><div style="position: absolute; height: 1px; width: 0px; overflow: hidden;"><input type="text" tabindex="0"></div><table id="course-datatable" class="table table-striped dt-responsive nowrap dataTable no-footer dtr-inline" width="100%" data-page-length="25" role="grid" aria-describedby="course-datatable_info" style="width: 100%; position: relative;">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="course-datatable" rowspan="1" colspan="1" style="width: 16.8px;" aria-sort="ascending" aria-label="#: activate to sort column descending">#</th>
                                                    <th class="sorting" tabindex="0" aria-controls="course-datatable" rowspan="1" colspan="1" style="width: 138.8px;" aria-label="Title: activate to sort column ascending">Title</th>
                                                    <th class="sorting" tabindex="0" aria-controls="course-datatable" rowspan="1" colspan="1" style="width: 74.8px;" aria-label="Category: activate to sort column ascending">Category</th>
                                                    <th class="sorting" tabindex="0" aria-controls="course-datatable" rowspan="1" colspan="1" style="width: 133.8px;" aria-label="Lesson &amp;amp; Section: activate to sort column ascending">level</th>
                                                    <th class="sorting" tabindex="0" aria-controls="course-datatable" rowspan="1" colspan="1" style="width: 130.8px;" aria-label="Enrolled Student: activate to sort column ascending">language</th>
                                                    <th class="sorting" tabindex="0" aria-controls="course-datatable" rowspan="1" colspan="1" style="width: 44.8px;" aria-label="Price: activate to sort column ascending">Price</th>
                                                    <th class="sorting" tabindex="0" aria-controls="course-datatable" rowspan="1" colspan="1" style="width: 133.8px;" aria-label="Lesson &amp;amp; Section: activate to sort column ascending">discount</th>
                                                    <th class="sorting" tabindex="0" aria-controls="course-datatable" rowspan="1" colspan="1" style="width: 130.8px;" aria-label="Enrolled Student: activate to sort column ascending">overview provider</th>
                                                    <th class="sorting" tabindex="0" aria-controls="course-datatable" rowspan="1" colspan="1" style="width: 54.8px;" aria-label="Status: activate to sort column ascending">Status</th>
                                                    <th class="sorting" tabindex="0" aria-controls="course-datatable" rowspan="1" colspan="1" style="width: 62.8px;" aria-label="Actions: activate to sort column ascending">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($cts as $ct)                       
                                                        <tr role="row" class="odd">
                                                        <td tabindex="0" class="sorting_1">{{$ct->id}}</td>
                                                        <td>
                                                        <span class="badge badge-dark-lighten">{{$ct->title}}</span>
                                                            <small class="text-muted">{{auth()->user()->name}} </small>
                                                        </td>
                                                        <td>
                                                        <span class="badge badge-dark-lighten">{{$ct->category->title}}</span>
                                                        </td>
                                                        <td class="text-center">
                                                        <span class="badge badge-dark-lighten">{{$ct->level}}</span>
                                                        </td>
                                                        <td>
                                                        <span class="badge badge-dark-lighten">{{$ct->language}}</span>
                                                        </td>
                                                        <td>
                                                        <span class="badge badge-dark-lighten">{{$ct->price}}</span>
                                                        </td>
                                                        <td class="text-center">
                                                        <span class="badge badge-dark-lighten">{{$ct->discount}}</span>
                                                        </td>
                                                        <td>
                                                        <span class="badge badge-dark-lighten">{{$ct->overview_provider}}</span>
                                                        </td>
                                                        <td>
                                                        <span class="badge badge-dark-lighten">{{$ct->status}}</span>
                                                        </td>
                                                        <td>
                                                            <div class="dropright dropright">
                                                            <button type="button" class="btn btn-sm btn-outline-primary btn-rounded btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="mdi mdi-dots-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="http://pn-learning-management-system-online.test/home/course/algebre/1" target="_blank">View Course On Frontend</a></li>
                                                                <li><a class="dropdown-item" href="http://pn-learning-management-system-online.test/admin/course_form/course_edit/1">Edit This Course</a></li>
                                                                <li><a class="dropdown-item" href="http://pn-learning-management-system-online.test/admin/course_form/course_edit/1">Section &amp; Lesson</a></li>
                                                                <li>Mark As Active                                                                                                    </li>
                                                                <li><a class="dropdown-item" href="#" onclick="confirm_modal('http://pn-learning-management-system-online.test/admin/course_actions/delete/1');">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="course-datatable_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="course-datatable_paginate"><ul class="pagination pagination-rounded"><li class="paginate_button page-item previous disabled" id="course-datatable_previous"><a href="#" aria-controls="course-datatable" data-dt-idx="0" tabindex="0" class="page-link"><i class="mdi mdi-chevron-left"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="course-datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="course-datatable_next"><a href="#" aria-controls="course-datatable" data-dt-idx="2" tabindex="0" class="page-link"><i class="mdi mdi-chevron-right"></i></a></li></ul></div></div></div></div>
                                                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                    <!-- END PLACE PAGE CONTENT HERE -->
                </div>
            </div>