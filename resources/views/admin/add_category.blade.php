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
                                    <h4 class="mb-3 header-title">Category Add Form</h4>

                                    <form class="required-form" action="" method="post" enctype="multipart/form-data" data-select2-id="5">
                                        <div class="form-group">
                                            <label for="code">Category Code</label>
                                            <input type="text" class="form-control" id="code" name="code" value="e4dd1a29da" readonly="">
                                        </div>

                                        <div class="form-group">
                                            <label for="name">Category Title<span class="required">*</span></label>
                                            <input type="text" class="form-control" id="name" name="name" required="">
                                        </div>

                                        <div class="form-group" data-select2-id="4">
                                            <label for="parent">Parent</label>
                                            <select class="form-control select2 select2-hidden-accessible" data-toggle="select2" name="parent" id="parent" onchange="checkCategoryType(this.value)" data-select2-id="parent" tabindex="-1" aria-hidden="true">
                                            <option value="0" data-select2-id="2">None</option>
                                                                                                                                             <option value="1" data-select2-id="14">Math</option>
                                        </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="1" style="width: 530.455px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-parent-container"><span class="select2-selection__rendered" id="select2-parent-container" role="textbox" aria-readonly="true" title="None">None</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                        
                                        <div class="form-group" id="thumbnail-picker-area">
                                            <label> Category Thumbnail <small>(The Image Size Should Be: 400 X 255)</small> </label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="category_thumbnail" name="category_thumbnail" accept="image/*" onchange="changeTitleOfImageUploader(this)">
                                                    <label class="custom-file-label" for="category_thumbnail">Choose Thumbnail</label>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-primary" onclick="checkRequiredFields()">Submit</button>
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