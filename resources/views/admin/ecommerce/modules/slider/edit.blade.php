    <!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/zircos/material-design/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 19:45:51 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{URL::to('public/admin/ecommerce')}}/assets/images/favicon.ico">
        <!-- App title -->
        <title>Zircos - Responsive Admin Dashboard Template</title>
        <!-- Jquery filer css -->
        <link href="{{URL::to('public/admin/ecommerce')}}/plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
        <link href="{{URL::to('public/admin/ecommerce')}}/plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />

        <!-- App css -->
        <link href="{{URL::to('public/admin/ecommerce')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('public/admin/ecommerce')}}/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('public/admin/ecommerce')}}/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('public/admin/ecommerce')}}/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('public/admin/ecommerce')}}/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('public/admin/ecommerce')}}/assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('public/admin/ecommerce')}}/assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{URL::to('public/admin/ecommerce')}}/plugins/switchery/switchery.min.css">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                  <div class="spinner-wrapper">
                    <div class="rotator">
                      <div class="inner-spin"></div>
                      <div class="inner-spin"></div>
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
             @include('admin.ecommerce.include.navbar')
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
             @include('admin.ecommerce.include.left-sidebar')
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
            <!-- Start content -->
                <div class="content">
                    @if (session('status'))
                        <div class="alert alert-success" style="margin-bottom: 0px;">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">

                                    <h4 class="page-title">Sliders </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Sliders </a>
                                        </li>
                                        <li class="active">
                                            Create New Sliders
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">

                            <div class="col-xs-12">

                                <div class="card-box">

                                    <div class="row">
                                        

                                        <h4 class="header-title m-t-0">Create New Sliders</h4>
                                            
                                                <form action="{{url('/ecommerce/admin/sliders')}}/{{$slider->id}}" method="post" enctype="multipart/form-data" >
                                                    {{csrf_field()}}
                                                    {{ method_field('PUT')}}
                                                    <div class="p-20">
                                                    <div class="form-group col-sm-6 col-md-6 {{$errors->has('title') ? 'has-error' : ''}}">
                                                        <label for="Title">Title<span class="text-danger">*</span></label>
                                                        <input type="text" name="title" parsley-trigger="change"
                                                               placeholder="Enter Title" class="form-control" value="{{$slider->title}}">
                                                        @if ($errors->has('title'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('title') }}.</li></ul>
                                                        @endif
                                                    </div>
                                                     <div class="form-group col-sm-6 col-md-6 {{$errors->has('description') ? 'has-error' : ''}}">
                                                        <label for="Description">Description<span class="text-danger">*</span></label>
                                                        <input type="text" name="description" parsley-trigger="change"
                                                               placeholder="Enter Description" class="form-control" value="{{$slider->description}}">
                                                        @if ($errors->has('description'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('description') }}.</li></ul>
                                                        @endif
                                                    </div>
                                                     <div class="form-group col-sm-6 col-md-6 {{$errors->has('slider_type') ? 'has-error' : ''}}">
                                                        <label for="Slider Type">Slider Type<span class="text-danger">*</span></label>
                                                        <input type="text" name="slider_type" parsley-trigger="change"
                                                        placeholder="Enter Slider Type" class="form-control" value="{{$slider->slider_type}}">
                                                        @if ($errors->has('slider_type'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('slider_type') }}.</li></ul>
                                                        @endif
                                                    </div>
                                                    
                                              
                                           
                            <div class="row m-t-50">
                                        <div class="col-xs-12 col-sm-6 {{$errors->has('image_name') ? 'has-error' : ''}}">
                                            <div class="p-20">
                                                <div class="form-group clearfix">
                                                    <label for="Image Name">Upload Image<span class="text-danger">*</span></label>
                                                    <div class="col-sm-12 padding-left-0 padding-right-0">
                                                            <input type="file" name="file" id="filer_input2"  >
                                                             @if ($errors->has('file'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('file') }}.</li></ul>
                                                            @endif
                                                    </div>
                                                </div>
                                                <div class="images">
                                                        <div></div>
                                                        <div class="col-md-6">
                                                            <!-- copy -->
                                                            <img class="image{{$slider->id}}" src="{{URL::to('public/admin')}}/upload/sliders/{{$slider->image_name}}" style="width: 162px; padding-bottom: 30px;">
                                                        </div>                       
                                                    </div>      
                                                </div>
                                                
                                         </div>
                                    </div>
                             </div>
                        </div>
                                                <!-- end class p-20 -->
                     <!-- end col -->
                                    <div class="form-group text-left m-b-0">
                                                        <button class="btn btn-primary waves-effect waves-light" type="submit" name="submit">
                                                            Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-default waves-effect m-l-5">
                                                            Cancel
                                                        </button>
                                                    </div>
                                  </form>
                 
                                    <!-- end row -->

                                   
                                    <!-- end row -->

                                </div> <!-- end ard-box -->
                            </div><!-- end col-->

                        </div>
                        <!-- end row -->
                     </div>

                    </div> <!-- container -->

                </div> <!-- content -->

                @include('admin.ecommerce.include.footer')
            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
             @include('admin.ecommerce.include.right-sidebar')
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.min.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/bootstrap.min.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/detect.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/fastclick.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.blockUI.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/waves.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.slimscroll.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.scrollTo.min.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/plugins/switchery/switchery.min.js"></script>

        <!-- Jquery filer js -->
        <script src="{{URL::to('public/admin/ecommerce')}}/plugins/jquery.filer/js/jquery.filer.min.js"></script>

        <!-- App js -->
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.core.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.app.js"></script>

        <!-- page specific js -->
        <script src="{{URL::to('public/admin/ecommerce')}}/customAssets/js/jquery.fileuploads.sliders.init.js"></script>
        
    </body>

<!-- Mirrored from coderthemes.com/zircos/material-design/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 19:45:51 GMT -->
</html>