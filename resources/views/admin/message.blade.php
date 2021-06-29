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
                                    <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Private Message</h4>
                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">

                                    <!-- compose new email button -->
                                    <div class="mail-sidebar-row visible-xs">
                                        <a href="#" class="btn btn-success btn-block">
                                            New Message                        <i class="mdi mdi-pencil float-right"></i>
                                        </a>
                                    </div>
                                    <hr>


                                    <!-- message user inbox list -->
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="text-left mb-1 btn btn-light d-block " href="#">

                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                    <div class="img-fluid w-100 text-center">
                                    <img style="opacity: 1; width: 100px;" src="http://pn-learning-management-system-online.test/assets/backend/images/file-search.svg"><br>
                                    Choose An Option From The Left Side</div>
                                </div>
                            </div>
                        </div>
                    </div>
        <!-- END PLACE PAGE CONTENT HERE -->
        </div>
    </div>