<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/zircos/material-design/real-estate-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 19:49:15 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="http://www.starmarketingonline.com/wp-content/uploads/2016/06/favicon.png">
        <!-- App title -->
        <title>Create New Roles-ADMIN PANEL - EITMAD</title>

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
           @include('admin/ecommerce/include/navbar')
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ======== == -->
            @include('admin/ecommerce/include/left-Sidebar')
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
                                    <h4 class="page-title">Create New Role</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">starmarketing</a>
                                        </li>
                                        <li>
                                            <a href="#">Roles</a>
                                        </li>
                                        <li class="active">
                                            Add Role
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Create new role</h4>

                                    <form action="{{URL::to('ecommerce/admin/roles')}}" method="POST">
                                        {{csrf_field()}}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="p-20">
                                                    <div class="form-group m-b-20 {{$errors->has('name') ? 'has-error' : ''}}">
                                                        <label for="name">Name</label>
                                                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" @if (count($errors) > 0) value="{{ old('name') }}" @endif>
                                                        @if ($errors->has('name'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('name') }}.</li></ul>
                                                        @endif
                                                    </div>
                                                    <div class="form-group m-b-20 {{$errors->has('display_name') ? 'has-error' : ''}}">
                                                        <label for="display-name">Display Name</label>
                                                        <input type="text" name="display_name" class="form-control" id="display-name" placeholder="Enter display name"  @if (count($errors) > 0) value="{{ old('display_name') }}" @endif>
                                                         @if ($errors->has('display_name'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('display_name') }}.</li></ul>
                                                        @endif
                                                    </div>
                                                    <div class="form-group m-b-20 {{$errors->has('description') ? 'has-error' : ''}}">
                                                        <label for="description">Description</label>
                                                        <input type="text" name="description" class="form-control" id="description" placeholder="Enter description" @if (count($errors) > 0) value="{{ old('description') }}" @endif>
                                                         @if ($errors->has('description'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('description') }}.</li></ul>
                                                        @endif
                                                    </div>                                                  
                                                </div>
                                                <!-- end class p-20 -->

                                            </div> <!-- end col -->

                                            <div class="col-md-6">
                                                <div class="p-20">
                                                    <div class="form-group m-b-20">
                                                        <label>Permissions for this role</label>
                                                        <div class="row">
                                                            <div class="col-xs-12"><br><br>
                                                                @foreach($permissions as $permission)
                                                                <div class="col-xs-12">
                                                                    <input type="checkbox" id="checkbox{{$permission ->id}}"  data-plugin="switchery" data-color="#2b3d51" data-size="small" name="permission[]" value="{{$permission -> id}}"/>
                                                                    <label for="checkbox{{$permission ->id}}">
                                                                        {{$permission -> name}}
                                                                    </label>
                                                                </div><br><br>
                                                                @endforeach
                                                                                            
                                                            </div> <!-- end col -->
                                                        </div> <!-- end row -->
                                                    </div>
                                                    
                                                </div>
                                                <!-- end class p-20 -->
                                            </div> <!-- end col -->

                                        </div> <!-- end row -->

                                        <div class="form-group text-right m-b-0">
                                                        <button class="btn btn-primary waves-effect waves-light" type="submit">
                                                            Submit
                                                        </button>
                                                        <a href="{{url('/admin/roles')}}" class="btn btn-default waves-effect m-l-5">
                                                            Cancel 
                                                        </a>
                                        </div>
                                    </form>
                                    <!-- end form -->

                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                @include('admin/ecommerce/include/footer')

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            @include('admin/ecommerce/include/right-Sidebar')
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

        <!-- page specific js -->
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/pages/jquery.property-add.init.js"></script>

        <!-- App js -->
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.core.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.app.js"></script>
        <!-- sweet alert -->
         <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
        
    </body>

<!-- Mirrored from coderthemes.com/zircos/material-design/real-estate-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 19:49:17 GMT -->
</html>