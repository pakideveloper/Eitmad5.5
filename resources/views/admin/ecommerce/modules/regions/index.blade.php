<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/zircos/material-design/tables-responsive.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 19:46:40 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App title -->
        <title>REGIONS-ADMIN PANEL - EITMAD</title>

        <!-- Table Responsive css -->
        <link href="{{URL::to('public/admin/ecommerce')}}/plugins/responsive-table/css/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen">

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
                                    <h4 class="page-title">All Regions </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">EITMAD</a>
                                        </li>
                                        <li>
                                            <a href="#">Regions </a>
                                        </li>
                                        <li class="active">
                                            All Regions
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">

                                    <div class="table-rep-plugin">
                                        <div class="table-responsive" data-pattern="priority-columns">
                                            <table id="tech-companies-1" class="table  table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th data-priority="1">Region Name</th>
                                                        <th data-priority="3">Country</th>
                                                        <th data-priority="1">Actions</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($regions as $region)
                                                    <tr>
                                                        <th>{{$region->id}}</th>
                                                        <th>{{$region->region_name}}</th>
                                                        <td>{{$region->country->country_name}}</td>
                                                        
                                                        <td>
                                                             <a href="" data-toggle="modal" data-target="#con-close-modal{{$region-> id}}" style="float: left; ">
                                                                <i class="fa fa-pencil" style=""></i>
                                                            </a>
                                                            
                                                                 
                                                                <i  onclick="return deleteFunction({{$region->id}});" class="fa fa-trash-o" style="cursor: pointer; margin-left: 10px;"></i>
                                                                 <form id="delete_form{{$region->id}}" action="{{ url('/ecommerce/admin/region',[$region->id]) }}" method="post">
                                                                {{ csrf_field() }}
                                                                {{ method_field('DELETE') }}
                                                               
            
                                                            </form>
                                                        </td>
                                                        
                                                    </tr>

                                                    <!-- Region Edit Modal -->
                                                    <div id="con-close-modal{{$region-> id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Edit Region</h4>
                                                </div>
                                                 <form action="{{url('/ecommerce/admin/region')}}/{{$region->id}}" method="post" enctype="multipart/form-data" onsubmit="return submitForm({{$region->id}});">
                                                     <input type="hidden" name="_token" value="<?php  echo csrf_token(); ?>">
                                                     {{ method_field('PUT')}}
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="region_name" class="control-label">Region Name</label>
                                                                <input type="text" class="form-control" id="region_name{{$region->id}}"  name="region_name" value="{{$region->region_name}}">
                                                                  <span class="help-block" id="name_err_{{$region->id}}">
                                                                         
                                                                    </span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="country_id">Select Country</label>
                                                                <select class="form-control" name="country_id">
                                                                    @foreach($countries as $country)

                                                                    <option value="{{$country->id}}"@if($country->id == $region->country_id)selected @endif>{{$country->country_name}}</option>
                                                                   @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        
                                                       
                                                       
                                                    </div>
                                                                               
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->



                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2016 - 2018 © Zircos.
                </footer>

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
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.min.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/bootstrap.min.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/detect.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/fastclick.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.blockUI.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/waves.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.slimscroll.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.scrollTo.min.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/plugins/switchery/switchery.min.js"></script>

        <!-- responsive-table-->
        <script src="{{URL::to('public/admin/ecommerce')}}/plugins/responsive-table/js/rwd-table.min.js"></script>

        <!-- App js -->
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.core.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.app.js"></script>

        <!-- delete discount alert -->
         <script type="text/javascript">
            var deleteFunction = function(id){
                if (confirm('Are you sure to delete this record?')) {
                    $('#delete_form'+id).submit();
                }
            }

           
        </script>

        <!-- Edit Form validation -->
        <script type="text/javascript">
        var submitForm = function(id){

        var rn= $('#region_name'+id).val();
        if(rn == ""){
        /*alert('Please Enter First Name');*/
        var errorContent = '<strong class="error" style="color:red">Please enter region name</strong>';
        $('#name_err_'+id).html(errorContent).show();
        //document.getElementById('loginEmail').style.borderColor = "red";
        return false;
        }else{
        //document.getElementById('loginEmail').style.borderColor = "green";
        $('#name_err_'+ id).html(errorContent).hide();
        }
        
        }
        </script>

    </body>

<!-- Mirrored from coderthemes.com/zircos/material-design/tables-responsive.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 19:46:44 GMT -->
</html>