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
                    <!-- start page title -->
                    <div class="row ">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Setup Payment Informations</h4>
                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>

                    <div class="row">
                        <div class="col-md-7" style="padding: 0;">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title"><p>Setup Paypal Settings</p></h4>
                                    <form class="" action="{{url('Instructeur/payment_settings/paypal_settings')}}" method="post" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label>Paypal Email</label>
                                        <input type="text" name="paypal_client_id" class="form-control" value="" required="">
                                    </div>

                                    <div class="row justify-content-md-center">
                                        <div class="form-group col-md-6">
                                            <button class="btn btn-block btn-primary" type="submit">Update Paypal Keys</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    </div>
                    </div>
                    <!-- END PLACE PAGE CONTENT HERE -->
                </div>
            </div>