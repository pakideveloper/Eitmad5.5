<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/zircos/material-design/tables-responsive.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 19:46:40 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{URL::to('public/admin/ecommerce')}}/assets/images/favicon.ico">
        <!-- App title -->
        <title>Zircos - Responsive Admin Dashboard Template</title>

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
                                    <h4 class="page-title">Responsive Table </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Zircos</a>
                                        </li>
                                        <li>
                                            <a href="#">Tables </a>
                                        </li>
                                        <li class="active">
                                            Responsive Table
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
														<th>Product Name</th>
														<th >Size</th>
														<th >Color</th>
                                                        <th >Price</th>
														<th >Quantity</th>
														<th >Discounted Price</th>
														<th >Category</th>
                                                        <th >Brand</th>
														<th >Discount Id</th>
														<th >other_features</th>
                                                        <th>Actions</th>
													</tr>
												</thead>
												<tbody>
                                                    @foreach($products as $product)
													<tr>
                                                        <td>{{$product->product_name}}</td>
                                                        <td>{{$product->product_size}}</td>
                                                        <td>{{$product->product_colour}}</td>
                                                        <td>{{$product->product_price}}</td>
                                                        <td>{{$product->product_quantity}}</td>
                                                        <td>{{$product->product_discounted_price}}</td>
                                                        <td>{{$product->sub_category_id}}</td>
                                                        <td>{{$product->brand->brand_name}}</td>
                                                        <td>{{$product->discount->discount_name}}</td>
														<td><button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#full-width-modal{{$product->id}}">Click here</button></td>
                                                        <td><a href="{{url('/ecommerce/admin/products')}}/{{$product->id}}/edit">Edit</a><form id="delete-form{{$product->id}}" 
                                                                action="{{url('ecommerce/admin/products')}}/{{$product->id}}" method="post">
                                                                {{csrf_field() }}
                                                                {{ method_field('DELETE') }}
                                                                 
                                                                <span  onclick="return deleteProduct({{$product->id}});"  style="cursor: pointer;     color: red;">Delete</span>
                                                            </form>
                                                        </td>
													</tr>
                                                    
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
                 @foreach($products as $product)
                <div id="full-width-modal{{$product->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-full">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title" id="full-width-modalLabel">Modal Heading</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <table id="tech-companies-1" class="table  table-striped">
                                                <thead>
                                                    <tr>
                                                        @foreach(json_decode($product->category->feature_names) as $feature)
                                                        <th>{{$feature}}</th>
                                                        @endforeach
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    @foreach(json_decode($product->other_features) as $feature)
                                                    
                                                        <td>{{$feature}}</td>
                                                    
                                                    @endforeach
                                                    </tr>
                                                </tbody>
                                            </table>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                    @endforeach
               @include('admin.ecommerce.include.footer')

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
        <script>
            $(document).ready(function(){
                $("#see_other_features").click(function(){
                    $("#other_features").fadeToggle();
                    return false;
                });
            });
        </script>
        <script type="text/javascript">
            var deleteProduct = function(id){
                if (confirm('Are you sure you want to delete this?')) {
                    event.preventDefault();
                    document.getElementById('delete-form'+id).submit(); 
                }           
            }
        </script>


    </body>

<!-- Mirrored from coderthemes.com/zircos/material-design/tables-responsive.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 19:46:44 GMT -->
</html>