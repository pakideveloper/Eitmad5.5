<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/zircos/material-design/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 19:45:51 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{URL::to('public/admin/ecommerce')}}/assets/images/favicon.ico">
        <!-- App title -->
        <title>View Orders-Eitmad</title>
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
        <style type="text/css">
            .lds-roller {
  display: inline-block;
  position: relative;
  width: 64px;
  height: 64px;
  top: 50%;
    left: 50%;
}
.lds-roller div {
  animation: lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
  transform-origin: 32px 32px;
}
.lds-roller div:after {
  content: " ";
  display: block;
  position: absolute;
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background: #3ac9d6;
  margin: -3px 0 0 -3px;
}
.lds-roller div:nth-child(1) {
  animation-delay: -0.036s;
}
.lds-roller div:nth-child(1):after {
  top: 50px;
  left: 50px;
}
.lds-roller div:nth-child(2) {
  animation-delay: -0.072s;
}
.lds-roller div:nth-child(2):after {
  top: 54px;
  left: 45px;
}
.lds-roller div:nth-child(3) {
  animation-delay: -0.108s;
}
.lds-roller div:nth-child(3):after {
  top: 57px;
  left: 39px;
}
.lds-roller div:nth-child(4) {
  animation-delay: -0.144s;
}
.lds-roller div:nth-child(4):after {
  top: 58px;
  left: 32px;
}
.lds-roller div:nth-child(5) {
  animation-delay: -0.18s;
}
.lds-roller div:nth-child(5):after {
  top: 57px;
  left: 25px;
}
.lds-roller div:nth-child(6) {
  animation-delay: -0.216s;
}
.lds-roller div:nth-child(6):after {
  top: 54px;
  left: 19px;
}
.lds-roller div:nth-child(7) {
  animation-delay: -0.252s;
}
.lds-roller div:nth-child(7):after {
  top: 50px;
  left: 14px;
}
.lds-roller div:nth-child(8) {
  animation-delay: -0.288s;
}
.lds-roller div:nth-child(8):after {
  top: 45px;
  left: 10px;
}
@keyframes lds-roller {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

        </style>

    </head>


    <body class="fixed-left">
        
        <!-- Loader -->
        <div id="ids_loader" style="position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 9999999;
    display: none;">
        
        <div class="lds-roller" ><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
    </div>
        <div id="preloader" >
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
                    @if (session('status'))
                        <div class="alert alert-success" style="margin-bottom: 0px;">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">

                           <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">orders </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">orders </a>
                                        </li>
                                        <li class="active">
                                            orders List
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
                                        <h4 class="m-t-0 header-title"><b>All orders</b></h4>
                                        <div class="table-responsive" data-pattern="priority-columns">
                                            <table id="tech-companies-1" class="table  table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>OrderID</th>
                                                        <th data-priority="1">Cusomer Name</th>
                                                        <th data-priority="3">Amount</th>
                                                        <th data-priority="1">Discount</th>
                                                        <th data-priority="3">Status</th>
                                                        <th data-priority="3">Actions</th>                           
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   @foreach($orders as $order)
                                                    <tr>
                                                        
                                                        <td>{{$order->id}}</td>
                                                    
                                                        <td>{{$order->user->first_name}}</td>
                                                
                                                        <td style="color: #c71212;
    font-weight: 500;">Rs. {{$order->order_amount_receivable}}</td>
                                                        
                                                        
                                                        
                                                        <td>{{$order->discount->discount_name}}&nbsp;<span style="color: #d4ac50;
    font-weight: 800;">{{$order->discount->discount_percent}}%</span></td>
                                                        <td>
                                                            <div id="status_div{{$order->id}}">@if($order->order_status == 'pending') <label class="badge badge-danger">Pending</label>
                                                            @elseif($order->order_status == 'on hold')
                                                            <label class="badge badge-info">On hold</label>
                                                            @elseif($order->order_status == 'closed')
                                                            <label class="badge badge-success">Closed</label>
                                                            @elseif($order->order_status == 'open')
                                                            <label class="badge badge-warning">Open</label>
                                                             @endif<!--  --></div>

                                                            <select class="form-control" id="order_status{{$order->id}}" onchange="return statusChanged({{$order->id}});">
                                                                <option value="pending"><label class="badge badge-danger">Pending</label></option>
                                                                <option value="on hold"><label class="badge badge-info">On hold</label></option>
                                                                <option value="closed"><label class="badge badge-success">Closed</label></option>
                                                                <option value="open"><label class="badge badge-warning">Open</label></option>
                                                            </select>
                                                        </td>

                                                      <!--   <td><?php $monthNum  = Carbon\Carbon::parse($order->created_at)->format('m');
                                                $dateObj   = DateTime::createFromFormat('!m', $monthNum);
                                                $monthName = $dateObj->format('F'); 
                                                echo $monthName; // March?>
                                                {{ Carbon\Carbon::parse($order->created_at)->format('d,Y') }}</td>
                                                        <td><?php $monthNum  = Carbon\Carbon::parse($order->created_at)->format('m');
                                                $dateObj   = DateTime::createFromFormat('!m', $monthNum);
                                                $monthName = $dateObj->format('F'); 
                                                echo $monthName; // March?>
                                                {{ Carbon\Carbon::parse($order->updated_at)->format('d,Y') }}</td>  -->
                                                        <td>
                                                            <button class="btn btn-light" style="    float: left;
    height: 21px;
    padding-top: 2px;
    /* padding: 5px; */
    width: 58px;
    padding-left: 4px;" data-toggle="modal" data-target="#viewProduct{{$order->id}}">
                                    <i class="mdi mdi-eye text-primary" ></i>View
                                  </button>
                                  <!-- <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#full-width-modal">Full width Modal</button> -->
                                                             <a href="{{url('/ecommerce/admin/orders')}}/{{$order->id}}/edit" style="float: left;     float: left;
    margin-left: 10px;">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            <form id="delete-form{{$order->id}}" 
                                                                action="{{url('/ecommerce/admin/orders')}}/{{$order->id}}" method="post">
                                                                {{csrf_field() }}
                                                                {{ method_field('DELETE') }}
                                                                 
                                                                <i  onclick="return deleteCategory({{$order->id}});" class="fa fa-trash-o" style="cursor: pointer;     margin-left: 10px;     color: red;"></i>
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
                @foreach($orders as $order)
                <div id="viewProduct{{$order->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-full">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="full-width-modalLabel">Order Products</h4>
                            </div>
                            <div class="modal-body">
                                <h4>Products</h4>
                                <table class="table table-striped m-0">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Name</th>
                                                            <th>Unit Price</th>
                                                            <th>Quantity</th>
                                                            <th>Total Price</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($order->order_products as $key=>$order_product)
                                                        <?php $key++; ?>
                                                        <tr>
                                                            <th scope="row">{{$key}}</th>
                                                            <td>{{$order_product->product->product_name}}</td>
                                                            <td>{{$order_product->product->product_discounted_price}}</td>
                                                            <td>{{$order_product->order_product_quantity}}</td>
                                                            <td>{{$order_product->order_product_total_price}}</td>
                                                        </tr>
                                                        @endforeach
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
        <script src="{{URL::to('public/admin/ecommerce')}}/customAssets/js/jquery.fileuploads.orders.init.js"></script>
        <script type="text/javascript">
            var deleteCategory = function(id){
                if (confirm('Are you sure you want to delete this?')) {
                    event.preventDefault();
                    document.getElementById('delete-form'+id).submit(); 
                }           
            }
             $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var statusChanged = function(id){
                $('#ids_loader').show();
                var value = $('#order_status'+id).val();
               $.ajax({
                    url: 'http://localhost/Eitmad5.5/ecommerce/admin/orders/'+id,
                    data: {status: value},
                    // type: 'post',
                    method:'PUT',
                    success: function (response) {
                        if (response == 'ok') {
                            
                            if (value == 'pending') {
                                $('#status_div'+id).html('<label class="badge badge-danger">Pending</label>');
                            }else if(value == 'on hold'){
                                $('#status_div'+id).html('<label class="badge badge-info">On hold</label>');
                            }else if(value == 'closed'){
                                $('#status_div'+id).html('<label class="badge badge-success">Closed</label>');
                            }else if(value == 'open'){
                                $('#status_div'+id).html('<label class="badge badge-warning">Open</label>');
                            }
                            $('#ids_loader').hide();
                        }
                        // $('#msg').html(response); // display success response from the server
                        console.log(response);
                    },
                    error: function (response) {
                        $('#msg').html(response); // display error response from the server
                    }
                });
            }
        </script>
    </body>

<!-- Mirrored from coderthemes.com/zircos/material-design/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 19:45:51 GMT -->
</html>