@include('frontend.ecommerce.dashboards.vendor.include.header')
<link href="{{URL::to('public/admin/ecommerce')}}/assets/css/icons.css" rel="stylesheet" type="text/css" />
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
  background: #36465d;
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
.checkbox_div > label{
  padding-right: 36px;
}
.checkbox_div > label > input{
  margin-right: 6px;
}
.form-control:focus{
  border-color: #f2992e;
  box-shadow: 0 0 5px #f2992e;
}
.pagination > li > a {
      position: relative;
    display: block;
    padding: .5rem .75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #f2992e;
    background-color: #fff;
    border: 1px solid #dee2e6;
}
.pagination > li > span {
      position: relative;
    display: block;
    padding: .5rem .75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #f2992e;
    background-color: #fff;
    border: 1px solid #dee2e6;
}
.active > span{
  color: black !important;
}
.disabled > span{
  color: black !important;
}
.badge{
      padding: 5px;
}

        </style>
<div id="ids_loader" style="position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 9999999;
    display: none;">
        
        <div class="lds-roller" ><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
    </div>
<div class="container-fluid">
  <div class="row">
    @include('frontend.ecommerce.dashboards.vendor.include.left-sidebar')
    
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" style="height: -webkit-fill-available;">
      @if (session('status'))
                        <div class="alert alert-success" style="margin-bottom: 0px;">
                            {{ session('status') }}
                        </div>
                    @endif
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">All Orders</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
          <button class="btn btn-sm btn-outline-secondary">Share</button>
          <button class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span>
        This week
        </button>
      </div>
    </div>
      <form class="row" action="{{url('ecommerce/vendor/search')}}" method="get" id="search_form">
      <div class="col-md-6 checkbox_div">
        @if($vendor_order_cs == null)
        <label class="checkbox-inline"><input type="checkbox" class="checkbox" name="c_1" value="pending">Pending</label>
        <label class="checkbox-inline"><input type="checkbox" class="checkbox" name="c_2" value="on hold">On Hold</label>
        <label class="checkbox-inline"><input type="checkbox" class="checkbox" name="c_3" value="open">Open</label>
        <label class="checkbox-inline"><input type="checkbox" class="checkbox" name="c_4" value="closed">Closed</label>
        @else

          <label class="checkbox-inline"><input type="checkbox" class="checkbox" name="c_1" @if($vendor_order_cs['c_1'] == 'pending') checked="" @endif  value="pending">Pending</label>
        <label class="checkbox-inline"><input type="checkbox" class="checkbox" name="c_2" @if($vendor_order_cs['c_2'] == 'on hold') checked="" @endif value="on hold">On Hold</label>
        <label class="checkbox-inline"><input type="checkbox" class="checkbox" name="c_3" @if($vendor_order_cs['c_3'] == 'open') checked="" @endif value="open">Open</label>
        <label class="checkbox-inline"><input type="checkbox" class="checkbox" name="c_4" @if($vendor_order_cs['c_4'] == 'closed') checked="" @endif value="closed">Closed</label>
        @endif
      </div>
      <div class="col-md-6 search_div row">
        
          <div class="col-md-8 form-group">
            <input type="text" name="search_key" @if(isset($search_key)) value="{{$search_key}}" @endif class="form-control" placeholder="search by customer name" style="height: 32px; font-size: 13px;">
          </div>
          <div class="col-md-4">
            <input type="hidden" name="in_form" value="in_form">
            <button type="submit" class="btn btn-success" style="height: 30px;
    padding-top: 2px;
    background-color: #f2992e;
    border-color: #f2992e;
    font-size: 15px;">Search</button>
          </div>  
          
        
      </div>
    </form>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12" style="background-color: white !important;">
        <table class="table table-striped">
          <thead>
            <tr>
                <th>OrderID</th>
                <th data-priority="1">Cusomer Name</th>
                <th data-priority="3">Amount</th>
                <th data-priority="1">Payment Method</th>
                <th data-priority="3">Status</th>
                <th data-priority="3">Discount</th>
                <th data-priority="3">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($orders as $order)
            <tr>
              <td>{{$order->id}}</td>
              <td  style="text-transform: capitalize;">{{$order->user->first_name}}&nbsp{{$order->user->last_name}}</td>
              <td style="color: #c71212;
    font-weight: 500;">Rs. {{$order->order_amount_receivable}}</td>
              <td>{{$order->payment_method}}</td>
              <td>
                <div id="status_div{{$order->id}}" style="    float: left;
    padding-right: 10px;">@if($order->order_status == 'pending') <label class="badge badge-danger">Pending</label>
                                                            @elseif($order->order_status == 'on hold')
                                                            <label class="badge badge-info">On hold</label>
                                                            @elseif($order->order_status == 'closed')
                                                            <label class="badge badge-success">Closed</label>
                                                            @elseif($order->order_status == 'open')
                                                            <label class="badge badge-warning">Open</label>
                                                             @endif<!--  --></div>

                                                            <select class="form-control" id="order_status{{$order->id}}" onchange="return statusChanged({{$order->id}});" style="height: 22px;
    padding-top: 0px;
    padding-bottom: 0px;     font-size: 13px;
    width: 74px;
    padding-left: 2px;">  
                                                                <option value="">Select</option>
                                                                <option value="pending"><label class="badge badge-danger">Pending</label></option>
                                                                <option value="on hold"><label class="badge badge-info">On hold</label></option>
                                                                <option value="closed"><label class="badge badge-success">Closed</label></option>
                                                                <option value="open"><label class="badge badge-warning">Open</label></option>
                                                            </select>
              </td>
              <td>{{$order->discount->discount_name}}&nbsp;<span style="color: #d4ac50;
    font-weight: 800;">{{$order->discount->discount_percent}}%</span></td>
    <td><button class="btn btn-light"  data-toggle="modal" data-target="#viewProduct{{$order->id}}" style="font-size: 13px; 
    padding: 4px;">
                                    <i class="mdi mdi-eye text-primary" ></i>View
                                  </button></td>
            </tr>  
            @endforeach          
          </tbody>
        </table>
        {{ $orders->links() }}
      </div>
      
    </div>
    
  </main>
  </div>
</div>
</div>
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
                            <!-- <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                            </div> -->
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                @endforeach
@include('frontend.ecommerce.dashboards.vendor.include.footer')
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
                var value = $('#order_status'+id).val();
                if (!value) {
                  return false;
                }
                $('#ids_loader').show();

               $.ajax({
                    url: 'http://localhost/Eitmad5.5/ecommerce/vendor/order/'+id,
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
            $(".checkbox").change(function(){
              $("#search_form").submit();
            });

          
        </script>