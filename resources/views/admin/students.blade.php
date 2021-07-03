@include('head')
@include('userHeader')
<body data-layout="detached" _c_t_common="1" data-new-gr-c-s-check-loaded="14.1016.0" data-gr-ext-installed="" cz-shortcut-listen="true">
    <!-- HEADER -->
    <div class="container-fluid active">
        <div class="wrapper in">
            <!-- BEGIN CONTENT -->
            <!-- SIDEBAR -->
            <!-- ========== Left Sidebar Start ========== -->
            @include('layouts.sidebar')
            <!-- PAGE CONTAINER-->
            <div class="content-page">
                <div class="content">
                    <!-- BEGIN PlACE PAGE CONTENT HERE -->
                    <div class="row ">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="page-title"> 
                                    <i class="mdi mdi-apple-keyboard-command title_icon"></i> 
                                    Student                
                                    <a href="{{url('admin/add_students')}} class="btn btn-outline-primary btn-rounded alignToTitle">
                                    <i class="mdi mdi-plus"></i>Add Student</a>
                                </h4>
                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>

                    <div class="row`">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                <h4 class="mb-3 header-title">Students</h4>
                                <div class="table-responsive-sm mt-4">
                                    <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="basic-datatable_length"><label>Show <select name="basic-datatable_length" aria-controls="basic-datatable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="basic-datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="basic-datatable"></label></div></div></div><div class="row"><div class="col-sm-12"><div style="position: absolute; height: 1px; width: 0px; overflow: hidden;"><input type="text" tabindex="0"></div><table id="basic-datatable" class="table table-striped table-centered mb-0 dataTable no-footer" role="grid" aria-describedby="basic-datatable_info" style="position: relative;">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 32.3482px;">#</th><th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Photo: activate to sort column ascending" style="width: 76.125px;">Photo</th><th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 111.062px;">Name</th><th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 257.804px;">Email</th><th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Enrolled Courses: activate to sort column ascending" style="width: 176.857px;">Enrolled Courses</th><th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 91.1339px;">Actions</th></tr>
                                    </thead>
                                    <tbody>
                                                                    
                                                            <tr role="row" class="odd">
                                                <td class="sorting_1">1</td>
                                                <td>
                                                    <img src="http://pn-learning-management-system-online.test/uploads/user_image/placeholder.png" alt="" height="50" width="50" class="img-fluid rounded-circle img-thumbnail">
                                                </td>
                                                <td>Amin Amine</td>
                                                <td>AmineBenzaza0@gmail.com</td>
                                                <td>
                                                ----
                                                </td>
                                                <td>
                                                    <div class="dropright dropright">
                                                        <button type="button" class="btn btn-sm btn-outline-primary btn-rounded btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="mdi mdi-dots-vertical"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="http://pn-learning-management-system-online.test/admin/user_form/edit_user_form/2">Edit</a></li>
                                                            <li><a class="dropdown-item" href="#" onclick="confirm_modal('http://pn-learning-management-system-online.test/admin/users/delete/2');">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr></tbody>
                                </table></div></div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="basic-datatable_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div></div>
                                    <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="basic-datatable_paginate">
                                        <ul class="pagination pagination-rounded">
                                            <li class="paginate_button page-item previous disabled" id="basic-datatable_previous">
                                                <a href="#" aria-controls="basic-datatable" data-dt-idx="0" tabindex="0" class="page-link">
                                                    <i class="mdi mdi-chevron-left"></i>
                                                </a>
                                            </li>
                                            <li class="paginate_button page-item active"><a href="#" aria-controls="basic-datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="basic-datatable_next"><a href="#" aria-controls="basic-datatable" data-dt-idx="2" tabindex="0" class="page-link"><i class="mdi mdi-chevron-right"></i></a></li></ul></div></div></div></div>
                                </div>
                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>
                                        <!-- END PLACE PAGE CONTENT HERE -->
                                    </div>
                                </div>