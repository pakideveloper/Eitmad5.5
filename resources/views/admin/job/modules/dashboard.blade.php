<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/zircos/material-design/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 19:38:05 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{URL::to('public/admin/job')}}/assets/images/favicon.ico">
        <!-- App title -->
        <title>JOB PORTAL-ADMIN PANEL-EITMAD</title>

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="../plugins/morris/morris.css">

        <!-- App css -->
        <link href="{{URL::to('public/admin/job')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('public/admin/job')}}/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('public/admin/job')}}/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('public/admin/job')}}/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('public/admin/job')}}/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('public/admin/job')}}/assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('public/admin/job')}}/assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{URL::to('public/admin/job')}}/plugins/switchery/switchery.min.css">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{URL::to('public/admin/job')}}/assets/js/modernizr.min.js"></script>

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
            @include('admin.job.include.navbar')
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            @include('admin.job.include.left-sidebar')
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Dashboard</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Zircos</a>
                                        </li>
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">
                                            Dashboard
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row text-center">

                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Statistics</p>
                                        <h2 class="text-danger"><span data-plugin="counterup">34578</span></h2>
                                        <p class="text-muted m-0"><b>Last:</b> 30.4k</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow">User Today</p>
                                        <h2 class="text-dark"><span data-plugin="counterup">895</span> </h2>
                                        <p class="text-muted m-0"><b>Last:</b> 1250</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow">User This Month</p>
                                        <h2 class="text-success"><span data-plugin="counterup">52410</span></h2>
                                        <p class="text-muted m-0"><b>Last:</b> 40.33k</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Request Per Minute</p>
                                        <h2 class="text-warning"><span data-plugin="counterup">652</span> </h2>
                                        <p class="text-muted m-0"><b>Last:</b> 956</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Total Users</p>
                                        <h2 class="text-primary"><span data-plugin="counterup">3245</span> </h2>
                                        <p class="text-muted m-0"><b>Last:</b> 20k</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow">New Downloads</p>
                                        <h2 class="text-danger"><span data-plugin="counterup">78541</span> </h2>
                                        <p class="text-muted m-0"><b>Last:</b> 50k</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card-box">

                                    <h4 class="header-title m-t-0 ">Daily Sales</h4>

                                    <div class="widget-chart text-center">
                                        <div id="morris-donut-example" style="height: 245px;"></div>
                                        <ul class="list-inline chart-detail-list m-b-0">
                                            <li>
                                                <h5 class=""><i class="fa fa-circle m-r-5"></i>Series A</h5>
                                            </li>
                                            <li>
                                                <h5 class=""><i class="fa fa-circle m-r-5"></i>Series B</h5>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-4">
                                <div class="card-box ">

                                    <h4 class="header-title m-t-0 ">Statistics</h4>
                                    <div id="morris-bar-example" style="height: 280px;"></div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-4">
                                <div class="card-box ">

                                    <h4 class="header-title m-t-0 ">Total Revenue</h4>
                                    <div id="morris-line-example" style="height: 280px;"></div>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="panel panel-color panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Recent Users</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table table-hover m-0">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>User Name</th>
                                                        <th>Phone</th>
                                                        <th>Location</th>
                                                        <th>Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <img src="{{URL::to('public/admin/ecommerce')}}/assets/images/users/avatar-1.jpg" alt="user" class="thumb-sm img-circle" />
                                                        </th>
                                                        <td>
                                                            <h5 class="m-0">Louis Hansen</h5>
                                                            <p class="m-0 text-muted font-13"><small>Web designer</small></p>
                                                        </td>
                                                        <td>+12 3456 789</td>
                                                        <td>USA</td>
                                                        <td>07/08/2016</td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                            <img src="{{URL::to('public/admin/ecommerce')}}/assets/images/users/avatar-2.jpg" alt="user" class="thumb-sm img-circle" />
                                                        </th>
                                                        <td>
                                                            <h5 class="m-0">Craig Hause</h5>
                                                            <p class="m-0 text-muted font-13"><small>Programmer</small></p>
                                                        </td>
                                                        <td>+89 345 6789</td>
                                                        <td>Canada</td>
                                                        <td>29/07/2016</td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                            <img src="{{URL::to('public/admin/ecommerce')}}/assets/images/users/avatar-3.jpg" alt="user" class="thumb-sm img-circle" />
                                                        </th>
                                                        <td>
                                                            <h5 class="m-0">Edward Grimes</h5>
                                                            <p class="m-0 text-muted font-13"><small>Founder</small></p>
                                                        </td>
                                                        <td>+12 29856 256</td>
                                                        <td>Brazil</td>
                                                        <td>22/07/2016</td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                            <img src="{{URL::to('public/admin/ecommerce')}}/assets/images/users/avatar-4.jpg" alt="user" class="thumb-sm img-circle" />
                                                        </th>
                                                        <td>
                                                            <h5 class="m-0">Bret Weaver</h5>
                                                            <p class="m-0 text-muted font-13"><small>Web designer</small></p>
                                                        </td>
                                                        <td>+00 567 890</td>
                                                        <td>USA</td>
                                                        <td>20/07/2016</td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                            <img src="{{URL::to('public/admin/ecommerce')}}/assets/images/users/avatar-5.jpg" alt="user" class="thumb-sm img-circle" />
                                                        </th>
                                                        <td>
                                                            <h5 class="m-0">Mark</h5>
                                                            <p class="m-0 text-muted font-13"><small>Web design</small></p>
                                                        </td>
                                                        <td>+91 123 456</td>
                                                        <td>India</td>
                                                        <td>07/07/2016</td>
                                                    </tr>

                                                </tbody>
                                            </table>

                                        </div> <!-- table-responsive -->
                                    </div>
                                </div>

                            </div>
                            <!-- end col -->

                            <div class="col-lg-6">
                                <div class="panel panel-color panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Recent Users</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table table-hover m-0">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>User Name</th>
                                                        <th>Phone</th>
                                                        <th>Location</th>
                                                        <th>Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <span class="avatar-sm-box bg-success">L</span>
                                                        </th>
                                                        <td>
                                                            <h5 class="m-0">Louis Hansen</h5>
                                                            <p class="m-0 text-muted font-13"><small>Web designer</small></p>
                                                        </td>
                                                        <td>+12 3456 789</td>
                                                        <td>USA</td>
                                                        <td>07/08/2016</td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                            <span class="avatar-sm-box bg-primary">C</span>
                                                        </th>
                                                        <td>
                                                            <h5 class="m-0">Craig Hause</h5>
                                                            <p class="m-0 text-muted font-13"><small>Programmer</small></p>
                                                        </td>
                                                        <td>+89 345 6789</td>
                                                        <td>Canada</td>
                                                        <td>29/07/2016</td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                            <span class="avatar-sm-box bg-brown">E</span>
                                                        </th>
                                                        <td>
                                                            <h5 class="m-0">Edward Grimes</h5>
                                                            <p class="m-0 text-muted font-13"><small>Founder</small></p>
                                                        </td>
                                                        <td>+12 29856 256</td>
                                                        <td>Brazil</td>
                                                        <td>22/07/2016</td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                            <span class="avatar-sm-box bg-pink">B</span>
                                                        </th>
                                                        <td>
                                                            <h5 class="m-0">Bret Weaver</h5>
                                                            <p class="m-0 text-muted font-13"><small>Web designer</small></p>
                                                        </td>
                                                        <td>+00 567 890</td>
                                                        <td>USA</td>
                                                        <td>20/07/2016</td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                            <span class="avatar-sm-box bg-orange">M</span>
                                                        </th>
                                                        <td>
                                                            <h5 class="m-0">Mark</h5>
                                                            <p class="m-0 text-muted font-13"><small>Web design</small></p>
                                                        </td>
                                                        <td>+91 123 456</td>
                                                        <td>India</td>
                                                        <td>07/07/2016</td>
                                                    </tr>

                                                </tbody>
                                            </table>

                                        </div> <!-- table-responsive -->
                                    </div>
                                </div> <!-- end panel -->

                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->




                    </div> <!-- container -->

                </div> <!-- content -->

                @include('admin.job.include.footer')

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="mdi mdi-close-circle-outline"></i>
                </a>
                <h4 class="">Settings</h4>
                <div class="setting-list nicescroll">
                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Notifications</h5>
                            <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">API Access</h5>
                            <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Auto Updates</h5>
                            <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Online Status</h5>
                            <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->


        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{URL::to('public/admin/job')}}/assets/js/jquery.min.js"></script>
        <script src="{{URL::to('public/admin/job')}}/assets/js/bootstrap.min.js"></script>
        <script src="{{URL::to('public/admin/job')}}/assets/js/detect.js"></script>
        <script src="{{URL::to('public/admin/job')}}/assets/js/fastclick.js"></script>
        <script src="{{URL::to('public/admin/job')}}/assets/js/jquery.blockUI.js"></script>
        <script src="{{URL::to('public/admin/job')}}/assets/js/waves.js"></script>
        <script src="{{URL::to('public/admin/job')}}/assets/js/jquery.slimscroll.js"></script>
        <script src="{{URL::to('public/admin/job')}}/assets/js/jquery.scrollTo.min.js"></script>
        <script src="{{URL::to('public/admin/job')}}/plugins/switchery/switchery.min.js"></script>

        <!-- Counter js  -->
        <script src="{{URL::to('public/admin/job')}}/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="{{URL::to('public/admin/job')}}/plugins/counterup/jquery.counterup.min.js"></script>

        <!--Morris Chart-->
        <script src="{{URL::to('public/admin/job')}}/plugins/morris/morris.min.js"></script>
        <script src="{{URL::to('public/admin/job')}}/plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
        <script src="{{URL::to('public/admin/job')}}/assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="{{URL::to('public/admin/job')}}/assets/js/jquery.core.js"></script>
        <script src="{{URL::to('public/admin/job')}}/assets/js/jquery.app.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/zircos/material-design/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 19:40:47 GMT -->
</html>