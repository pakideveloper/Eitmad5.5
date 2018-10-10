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
        <title>Eitmad</title>
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
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Edit Brand</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <!-- <li>
                                            <a href="#">Zircos</a>
                                        </li> -->
                                        <li>
                                            <a href="#">Eitmad</a>
                                        </li>
                                        <li class="active">
                                            Edit Brand
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
                                        

                                            <h4 class="header-title m-t-0">Edit Brand</h4>
                                            
                                            <form action="{{url('/ecommerce/admin/brands/')}}/{{$brand->id}}" method="post" enctype="multipart/form-data" >
                                                    {{csrf_field()}}
                                                    {{ method_field('PUT')}}
                                                    <div class="form-group col-sm-6 col-md-6 {{$errors->has('brand_name') ? 'has-error' : ''}}">
                                                    <label for="Brand Name">Brand Name<span class="text-danger">*</span></label>
                                                    <input type="text" name="brand_name" parsley-trigger="change"
                                                    placeholder="Enter Brand Name" class="form-control" value="{{$brand->brand_name}}">
                                                        @if ($errors->has('brand_name'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('brand_name') }}.</li></ul>
                                                        @endif
                                                    </div>
                                                    <div class="images">
                                                        <div></div>
                                                        <div class="col-md-6">
                                                            <!-- copy -->
                                                            <img class="image{{$brand->id}}" src="{{URL::to('public/admin')}}/upload/brands/{{$brand->brand_logo}}" style="width: 162px; padding-bottom: 30px;">
                                                        </div>                       
                                                    </div>                        
                                              
                                           
                            <div class="row m-t-50">
                                        <div class="col-xs-12 col-sm-6 {{$errors->has('brand_logo') ? 'has-error' : ''}}">
                                            <div class="p-20">
                                                <div class="form-group clearfix">
                                                     <label for="Brand Logo size">Brand Logo<span class="text-danger">*</span></label>
                                                            <input type="file" name="file" id="filer_input2"  multiple="multiple">
                                                             @if ($errors->has('file'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('file') }}.</li></ul>
                                                            @endif
                                                </div>

                                            </div>
                                             

                                        </div>

                                    </div>
                                      <div class="col-md-6">
                                                <div class="p-20">
                                                    <label>Select Categories</label>
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                @foreach($brand->category_assoc as $key=>$category_assoc_one)
                                                                <?php $key = $key+2; ?>
                                                                @if($key%2 == 0 ) 
                                                               <div class="checkbox checkbox-primary m-b-15">
                                                             <input id="checkbox_c{{$category_assoc_one->category->id}}" name="subcategories[]" value="{{$category_assoc_one->category->id}}" 
                                                             type="checkbox" >
                                                             <label for="checkbox_c{{$category_assoc_one->category->id}}" >{{$category_assoc_one->sub_category_name}} </label>
                                                                </div>
                                                                @endif 
                                                                @endforeach 
                                                            </div> <!-- end col -->

                                                             <div class="col-xs-6">
                                                                @foreach($brand->category_assoc as $key=>$category_assoc_one)
                                                                <?php $key = $key+2; ?>
                                                                @if($key%2 != 0 ) 
                                                               <div class="checkbox checkbox-primary m-b-15">
                                                             <input id="checkbox_c{{$category_assoc_one->category->id}}" name="categories[]" value="{{$category_assoc_one->category->id}}" 
                                                             type="checkbox" >
                                                             <label for="checkbox_c{{$category_assoc_one->category->id}}">{{$category_assoc_one->sub_category_name}} </label>
                                                            </div>
                                                                @endif 
                                                                @endforeach 
                                                            </div> <!-- end col -->
                                                              @foreach($subcategories as $key=>$category)
                                                                @if(!in_array($category->id, $existing_c) )
                                                            <div class="col-xs-6 ds" style="">
                                                               
                                                                <div class="checkbox checkbox-primary m-b-15">
                                                                    <input id="checkbox_c{{$category->id}}" type="checkbox" name="categories[]" value="{{$category->id}}">
                                                                    <label for="checkbox_c{{$category->id}}">
                                                                        {{$category->sub_category_name}}
                                                                    </label>
                                                                </div>
                                                                                                                
                                                            </div> <!-- end col -->
                                                            @endif 
                                                            @endforeach
                                                        </div> <!-- end col -->
                                                </div> <!-- end col -->
                                        </div>
                                    <div class="text-center">
                                            <button type="submit" class="btn btn-success waves-effect waves-light">Update</button>
                                            
                                    </div>
                                  </form>
                 
                                    <!-- end row -->

                                   
                                    <!-- end row -->

                                </div> <!-- end ard-box -->
                            </div><!-- end col-->

                        </div>
                        
                        <!-- end row -->

                    </div> 
                    <!-- container -->

                </div>  <!-- content -->


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
        <script src="{{URL::to('public/admin/ecommerce')}}/customAssets/js/jquery.fileuploads.brands.init.js"></script>
    </body>

<!-- Mirrored from coderthemes.com/zircos/material-design/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 19:45:51 GMT -->
</html>