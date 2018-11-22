 @include('frontend.ecommerce.dashboards.User.include.header')
 
    <div id="dashboard_user">
    <div class="container-fluid">
      <div class="row">
        
        @include('frontend.ecommerce.dashboards.User.include.left-sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

@if (session('status'))
                        <div class="alert alert-success" style="margin-bottom: 0px;">
                            {{ session('status') }}
                        </div>
                    @endif

       
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Order ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Unit Price</th>
      <th scope="col">Order Quantity</th>

      <th scope="col">Shipping Charges</th>
      <th scope="col">Tax</th>
      <th scope="col">Discount</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <<?php 
$i = 1;

     ?>
    @foreach($orders as $order)
    
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$order->id}}</td>
     
      <td>{{$order->product_name}}</td>

      <td>{{$order->order_product_unit_price}}</td>
       <td>{{$order->order_product_quantity}}</td>
      <td>{{$order->shipping_charges}}</td>
      <td>{{$order->order_tax}}</td>
       <td>{{$order->discount_percent}}%</td>
      <td>{{$order->order_product_total_price}}</td>
    </tr>
    
    @endforeach
    <!-- <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>


    </main>
          
            
          
        
        </div>
      </div>
    </div>
    @include('frontend.ecommerce.dashboards.User.include.footer')

