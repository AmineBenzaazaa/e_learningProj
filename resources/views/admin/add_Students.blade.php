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
                                    <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Add New Category</h4>
                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-7">
                            <div class="card" data-select2-id="8">
                                <div class="card-body" data-select2-id="7">
                                <div class="col-lg-12" data-select2-id="6">
                                    <h4 class="mb-3 header-title">Students Add Form</h4>

                                    <form class="required-form" action="{{route('students.index')}}" method="post"  >
                                        @csrf

                                        <div class="form-group">
                                            <label for="name"> Name<span class="required">*</span></label>
                                            <input type="text" class="form-control" id="name" name="name" required="">
                                        </div>

                                        <div class="form-group">
                                            <label for="email">E-mail<span class="required">*</span></label>
                                            <input type="email" class="form-control" id="email" name="email" required="">
                                        </div>

                                        <div class="form-group">
                                            <label for="password">Password<span class="required">*</span></label>
                                            <input type="password" class="form-control" id="password" name="password" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="password_confirmation">Password confirmation<span class="required">*</span></label>
                                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required="">
                                        </div>

                                        <button type="submit" class="btn btn-primary" >Submit</button>
                                    </form>
                                </div>
                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>