
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/zircos/material-design/real-estate-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 19:49:15 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully categoryd admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="http://www.starmarketingonline.com/wp-content/uploads/2016/06/favicon.png">
        <!-- App title -->
        <title>Eitmad</title>

        <!-- Jquery filer css -->

        <link href="{{URL::to('public/admin/ecommerce')}}/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
       



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
        <style type="text/css">
            .error{
                color: red
            }
        </style>
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
                                    <h4 class="page-title">Add Country</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <!-- <li>
                                            <a href="#">Zircos</a>
                                        </li> -->
                                        <li>
                                            <a href="#">Eitmad</a>
                                        </li>
                                        <li class="active">
                                            Add Country
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Add Country Form</h4>
										 <div class="row">
										 	<div class="col-sm-12 col-xs-12 col-md-6">
										 	 	<div class="p-20">
                                    <form action="{{url('/ecommerce/admin/countries')}}" method="post"  >
                                        {{ csrf_field()}}
                                       <div class="form-group ">
                                                        <label for="userName">Country Name<span class="text-danger">*</span></label>
                                                        
                                                        <input type="text" name="c_name" parsley-trigger="change" required
                                                               placeholder="Enter country name" class="form-control" value="{{ old('c_name') }}" id="country">
                                                        @if ($errors->has('c_name'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('c_name') }}.</li></ul>
                                                        @endif
                                                             
                                                    </div>
                                                                                              
                                                 
                                           
                                       
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                                            
                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                                    <!-- end form -->

                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                @include('admin.ecommerce.include.footer')

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
           
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
        <script src="{{URL::to('public/admin/ecommerce')}}/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <!-- Jquery filer js -->
        <script src="{{URL::to('public/admin/ecommerce')}}/plugins/jquery.filer/js/jquery.filer.min.js"></script>

        <!-- page specific js -->
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/pages/jquery.property-add.init.js"></script>

        <!-- App js -->
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.core.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.app.js"></script>
        <!-- sweet Alert -->
        <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
       <script type="text/javascript">
            $(document).ready(function() {
                $('form').parsley();
            });
            $(function () {
                $('#demo-form').parsley().on('field:validated', function () {
                    var ok = $('.parsley-error').length === 0;
                    $('.alert-info').toggleClass('hidden', !ok);
                    $('.alert-warning').toggleClass('hidden', ok);
                })
                .on('form:submit', function () {
                    return false; // Don't submit form for this demo
                });
            });
        </script> 

    </body>

<!-- Mirrored from coderthemes.com/zircos/material-design/real-estate-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 19:49:17 GMT -->
</html>