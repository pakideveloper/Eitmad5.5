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
      <th scope="col">Payment Method</th>
      <th scope="col">Status</th>
      <th scope="col">Claim Order</th>
    </tr>
  </thead>
  <tbody>
    <?php 
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
       <td>{{$order->payment_method}}</td>
      @if($order->order_status == 0)
      <td>Pending</td>
      @else
      <td>Done</td>
      @endif
      <td><a data-toggle="modal" data-target="#myModal" style="cursor: pointer;color: red;text-decoration: underline;">wants to claim?</a></td>
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
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="display: block;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" >Claim Order</h4>
        </div>
        <div class="modal-body">
          <div class="form-group" style="margin: 0px;">
                          
                          <div class="col-xs-12">
                              <label for="product_name"><h4>Product name:</h4></label>
                              <!-- <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Enter Your product name" value=""  title="enter your first n if any."> -->
                          </div>
                      </div>
                      
                      <div class="form-group" style="margin: 0px;">
                          
                          <div class="col-xs-12">
                            <label for="product_category"><h4>Product Category:</h4></label>
                              <!-- <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Your last name" value="" title="enter your last name if any."> -->
                          </div>
                      </div>
                  <div class="form-group">
                          
                          <div class="col-xs-12">
                              <label for="product_type"><h4>Product Type:</h4></label>
                              <!-- <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" value="" title="enter your email."> -->
                          </div>
                      </div>
                      <div class="form-group" style="margin: 0px;">
                          
                          <div class="col-xs-12">
                            <label for="brand"><h4>Brand:</h4></label>
                             <!--  <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Your last name" value="" title="enter your last name if any."> -->
                          </div>
                      </div>
                       <div class="form-group">
                          
                          <div class="col-xs-12">
                              <label for="company_name"><h4>Company Name:</h4></label>
                              <!-- <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" value="" title="enter your email."> -->
                          </div>
                      </div>
                      <div class="form-group" style="margin: 0px;">
                          
                          <div class="col-xs-12">
                            <label for="last_name"><h4>Product Defected:</h4></label>
                              <input type="number" class="form-control" name="product_defected" id="product_defected" placeholder="Enter  product_defected" value="" title="enter product_defected if any.">
                          </div>
                      </div>
                         <div class="form-group">
                          
                          <div class="col-xs-12">
                              <label for="address"><h4>Product Problem Described:</h4></label>
                              <textarea  class="form-control" id="address" name="address" placeholder="Please Describe Problem" value="" title="Enter Your Problem"></textarea>
                          </div>
                      </div>
                       <div class="form-group">
                          
                          <div class="col-xs-12">
                              <label for="date"><h4>Purchasing Date:</h4></label>
                              <!-- <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" value="" title="enter your email."> -->
                          </div>
                      </div>
                      
                      </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  

    </main>
          
            
          
        
        </div>
      </div>
    </div>
    
</div>
    @include('frontend.ecommerce.dashboards.User.include.footer')

