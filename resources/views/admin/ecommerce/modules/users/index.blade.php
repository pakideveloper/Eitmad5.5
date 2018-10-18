<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/zircos/material-design/tables-editable.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 19:46:47 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="http://www.starmarketingonline.com/wp-content/uploads/2016/06/favicon.png">
        <!-- App title -->
        <title>ROLES-ADMIN PANEL - EITMAD</title>

        <!-- Plugin Css-->
        <link rel="stylesheet" href="{{URL::to('public/admin/ecommerce')}}/plugins/magnific-popup/css/magnific-popup.css" />
        <link rel="stylesheet" href="{{URL::to('public/admin/ecommerce')}}/plugins/jquery-datatables-editable/datatables.css" />

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


            <!-- ========== Left Sidebar Start ========== -->
            @include('admin/ecommerce/include/left-sidebar')
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
                                    <h4 class="page-title">All Users</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Eitmad</a>
                                        </li>
                                        <li>
                                            <a href="#">User</a>
                                        </li>
                                        <li class="active">
                                            All Users
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->



                        

                        <div class="panel">

                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h4 class="m-t-0 header-title"><b>Users</b></h4>
                                        <p class="text-muted m-b-30 font-13">
                                            Here all Users are in one table. You can edit as well as delete.
                                        </p>                                        
                                    </div>
                                </div>

                                <div class="">
                                	<table class="table table-striped add-edit-table table-bordered" id="datatable-editable">
	                                    <thead>
	                                        <tr>
                                                
	                                            <th>First Name</th>
	                                            <th>Last Name</th>
	                                            <th>Email</th>
                                                <th>Roles</th>
	                                            <th>Actions</th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
                                            @foreach($users as $user)
	                                        <tr class="gradeX">                                                
	                                            <td>{{$user->first_name}}</td>
	                                            <td>{{$user->last_name}}</td>
	                                            <td>{{$user->email}}</td>
                                                <td>
                                                
                                                {{$user->getRoleForAny($user->id)->display_name}}
                                               
                                                </td>
	 
                                                <td class="actions">                                               
                                                   <a  href="" data-toggle="modal" data-target="#con-close-modal{{$user->id}}">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="">
                                                        <i   class="fa fa-trash-o" style="cursor: pointer;"></i>
                                                    </a>                                                            
	                                            </td>
                                                <form id="" action="" method="post">
                                                    {{csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                </form>
                                                <div id="con-close-modal{{$user->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Change Roles</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="col-sm-6">
                                                Name:&nbsp;<b>{{$user -> first_name}}&nbsp;
                                                {{$user -> last_name}}
                                                </b>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        Select Roles
                                                        <form action="{{url('/ecommerce/admin/RoleUpdate')}}" method="POST" >
                                                          {{csrf_field()}}

                                                    <input type="hidden" name="user_id" value="{{$user->id}}">
                                                          <div class="form-group {{$errors->has('roles') ? 'has-error' : ''}}">
                                                            <select name="role"  class="form-control">
                                                            @foreach($roles as $role)
                                                              <option value="{{$role->id}}">{{$role->display_name}}</option>
                                                             @endforeach 
                                                            </select>
                                                          </div>
                                                           <label style="color: red">{{ $errors->first('roles') }}</label>
                                                         
                                               
                                                        
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                     <button  type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                    
                                                </div>
                                                 </form>
                                            </div>
                                        </div>
                                    </div><!-- /.modal -->
	                                        </tr>
                                            @endforeach
	                                    </tbody>
	                                </table>
                                </div>
                            </div>
                            <!-- end: page -->

                        </div> <!-- end Panel -->



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

        <!-- Examples -->
	    <script src="{{URL::to('public/admin/ecommerce')}}/plugins/magnific-popup/js/jquery.magnific-popup.min.js"></script>
	    <script src="{{URL::to('public/admin/ecommerce')}}/plugins/jquery-datatables-editable/jquery.dataTables.js"></script>
	    <script src="{{URL::to('public/admin/ecommerce')}}/plugins/datatables/dataTables.bootstrap.js"></script>
	    <script src="{{URL::to('public/admin/ecommerce')}}/plugins/tiny-editable/mindmup-editabletable.js"></script>
	    <script src="{{URL::to('public/admin/ecommerce')}}/plugins/tiny-editable/numeric-input-example.js"></script>

        <!-- App js -->
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.core.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.app.js"></script>

        <script src="{{URL::to('public/admin/ecommerce')}}/assets/pages/jquery.datatables.editable.init.js"></script>

	    <script>
			$('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
		</script>
        <script type="text/javascript">
            var deleteRole = function(id){
            if (confirm('Are you sure you want to delete this?')) {
        event.preventDefault();
        document.getElementById('delete-form'+id).submit(); 
        }           
}
        </script>
        <!-- sweet alert -->
        <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
 
    </body>

<!-- Mirrored from coderthemes.com/zircos/material-design/tables-editable.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 19:46:55 GMT -->
</html>