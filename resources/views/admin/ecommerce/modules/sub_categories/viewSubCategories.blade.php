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
        <title>Eitmad</title>

        <!-- Table Responsive css -->
        <link href="{{URL::to('public/admin/ecommerce')}}/plugins/responsive-table/css/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen">
        <link href="{{URL::to('public/admin/ecommerce')}}/plugins/custombox/css/custombox.min.css" rel="stylesheet">

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
        <style type="text/css">
            .fa-trash-o{
                padding-left: 10px;
    color: red
            }
        </style>

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
                                    <h4 class="page-title">SubCategories</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Eitmad</a>
                                        </li>
                                        <li>
                                            <a href="#">SubCategories </a>
                                        </li>
                                        <li class="active">
                                            All Sub Categories
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
                                        <h4 class="m-t-0 header-title"><b>All Sub Categories</b></h4>
                                        <p class="text-muted m-b-30 font-13">
                                        just start typing to edit, or move around with arrow keys or mouse clicks!
                                    </p>
                                        <div class="table-responsive" data-pattern="priority-columns">
                                            <table id="tech-companies-1" class="table  table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th data-priority="1">Sub_Category_Name</th>
                                                        <th data-priority="1">Parent_Category_Name</th>
                                                        <th data-priority="1">Feature_Names</th>
                                                        <th data-priority="3">Created at</th>
                                                        <th data-priority="1">Updated at</th>
                                                        <th data-priority="3">Actions</th>                           
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($subcategories as $subcategory)
                                                    <tr>
                                                        
                                                        <td>{{$subcategory->id}}</td>
                                                        <th>{{$subcategory->sub_category_name}}</th>
                                                        <th>{{$subcategory->parent->category_name}}</th>
                                                        <th>{{$subcategory->feature_names}}</th>
                                                        <td>{{$subcategory->created_at}}</td>
                                                        <td>{{$subcategory->updated_at}}</td>
                                                        <td>
                                                            <a href="{{url('/ecommerce/admin/subcategories')}}/{{\Crypt::encrypt($subcategory->id)}}/edit"  style="float: left;">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                           <form id="delete-form{{$subcategory->id}}" 
                                                                action="{{url('/ecommerce/admin/subcategories')}}/{{$subcategory->id}}" method="post">
                                                                {{csrf_field() }}
                                                                {{ method_field('DELETE') }}
                                                                 
                                                                <i  onclick="return deleteSubCategory({{$subcategory->id}});" class="fa fa-trash-o" style="cursor: pointer;"></i>
                                                            
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

        <!-- responsive-table-->
        <script src="{{URL::to('public/admin/ecommerce')}}/plugins/responsive-table/js/rwd-table.min.js"></script>
          <!-- Modal-Effect -->
        <script src="{{URL::to('public/admin/ecommerce')}}/plugins/custombox/js/custombox.min.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/plugins/custombox/js/legacy.min.js"></script>
        <!-- App js -->
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.core.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.app.js"></script>
        <script type="text/javascript">
            var deleteSubCategory = function(id){
            if (confirm('Are you sure you want to delete this?')) {
        event.preventDefault();
        document.getElementById('delete-form'+id).submit(); 
        }           
}
        </script>
        <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
       
    </body>

<!-- Mirrored from coderthemes.com/zircos/material-design/real-estate-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 19:49:17 GMT -->
</html>