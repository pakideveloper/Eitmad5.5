<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/zircos/material-design/tables-responsive.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 19:46:40 GMT -->
<head>
        <meta charset="utf-8">
         <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App title -->
        <title>COMPANIES-ADMIN PANEL - EITMAD</title>

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
                	 @if (session('status'))
                        <div class="alert alert-success" style="margin-bottom: 0px;">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">All Companies </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">EITMAD</a>
                                        </li>
                                        <li>
                                            <a href="#">Companies </a>
                                        </li>
                                        <li class="active">
                                            All Companies
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
														<th data-priority="1">Logo</th>
														<th data-priority="1">Company Name</th>
														<th data-priority="3">Description</th>
														
														<th data-priority="1">Address</th>
														<th data-priority="1">City</th>
														<th data-priority="3">Country</th>
														<th data-priority="1">Email</th>
														<th data-priority="1">Contact No</th>
														<th data-priority="1">URL</th>
														<th data-priority="3">Contact Person</th>
														<th data-priority="1">Ownership Type</th>
														<th data-priority="1">Industry</th>
														<th data-priority="1">No. Of Employees</th>
														<th data-priority="1">Operatin Since</th>
														<th data-priority="3">SECP ID</th>
														<th data-priority="1">CEO Name</th>
														<th data-priority="1">CR_Designation</th>
														
														<th data-priority="1">Added By</th>
														<th data-priority="1">Created at</th>
														<th data-priority="1">Request Status</th>
														<th data-priority="1">Change Status</th>
														
														<th data-priority="1">Actions</th>
														
													</tr>
												</thead>
												<tbody>
													@foreach($companies as $company)
													<tr>
														<th>{{$company->id}}</th>
														<td>
                                                            <a href="#"> <img class="media-object img-circle" alt="64x64" src="{{$company->logo_path}}" style="width: 64px; height: 64px;"> </a>
                                                        </td>
														<td>{{$company->company_name}}</td>
														<td>{{$company->company_description}}</td>
														<td>{{$company->company_address}}</td>
														<td>{{$company->city->city_name}}</td>
														<td>{{$company->city->country->country_name}}</td>
														<td>{{$company->contact_email}}</td>
														<td>{{$company->company_phone}}</td>
														<td>{{$company->company_url}}</td>
														<td>{{$company->contact_person}}</td>
														<td>{{$company->ownership_type}}</td>
														<td>{{$company->industry->industry_name}}</td>
														<td>{{$company->no_of_employees}}</td>
														<td>{{$company->operating_since}}</td>
														<td>{{$company->secp_id}}</td>
														<td>{{$company->ceo->ceo_name}}</td>
														<td>{{$company->cr_designation}}</td>
														<td>{{$company->created_by}}</td>
														<td>{{$company->created_at->format('d-m-Y')}}</td>
														<td id="status_label_{{$company->id}}">
                                                            @if($company->status == 1)
                                                            <label class="label label-success" >Approved</label>
                                                            @else
                                                             <label class="label label-danger">Pending</label>
                                                             @endif
                                                            </td>
														<td class="">
                                                            <div class="checkbox checkbox-primary" id="changestatus_{{$company->id}}">
                                                            @if($company->status=='1')
                                                                <input id="checkbox{{$company->id}}" type="checkbox" name='status' checked="" value="0" onclick="return updatestatus({{$company->id}});">
                                                                <label for="checkbox{{$company->id}}"> Select to approve</label>
                                                                @else
                                                                <input id="checkbox{{$company->id}}" type="checkbox" name='status' value="1" onclick="return updatestatus({{$company->id}});">
                                                                <label for="checkbox{{$company->id}}"> Select to approve</label>
                                                                @endif
                                                            </div>
                                                        </td>
														<td>
															
                                                                <i  onclick="return deleteFunction({{$company->id}});" class="fa fa-trash-o" style="cursor: pointer; margin-left: 10px;"></i>
                                                                 <form id="delete_form{{$company->id}}" action="{{ url('/jobs/admin/companies',[$company->id]) }}" method="post">
                                                                {{ csrf_field() }}
                                                                {{ method_field('DELETE') }}
                                                               
            
                                                            </form>
														</td>
														
													</tr>

													
													@endforeach
												</tbody>
											</table>
                                            {{$companies->links()}}
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

        <!-- Update Company Status -->
        <script type="text/javascript">
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var updatestatus = function(id){
                //alert(id);
                var status = $('#checkbox'+id).val();
                //alert(status);
                //var company_id = $('#'+id+'rename_input').html();
                $.ajax(
                {
                    url: '{{ url('/jobs/admin/companies/updateStatus')}}',
                    type: 'post',              
                    data: {
                        "company_id": id,
                         "company_status": status,
                    },
                    success: function(response){
                        if(response.code ===200) {
                            //$('.'+id+'save').hide();
                            alert('Request Status Updated Successfully.');
                             $('#status_label_'+id).load(' #status_label_'+id);
                            $('#changestatus_'+id).load(' #changestatus_'+id);

                        }//code ending                            
                    },//responce ending
                });//ajax ending
                return false;
            };
        </script>

        <!-- delete discount alert -->
         <script type="text/javascript">
            var deleteFunction = function(id){
                if (confirm('Are you sure to delete this record?')) {
                    $('#delete_form'+id).submit();
                }
            }

           
        </script>


    </body>

<!-- Mirrored from coderthemes.com/zircos/material-design/tables-responsive.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 19:46:44 GMT -->
</html>