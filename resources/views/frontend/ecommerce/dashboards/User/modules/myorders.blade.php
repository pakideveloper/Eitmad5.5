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
      <!-- <th scope="col">Order ID</th> -->
      <th scope="col"></th>
      <!-- <th scope="col">Product Unit Price</th> -->
      <!-- <th scope="col">Order Quantity</th> -->
      
      <th scope="col">Shipping Charges</th>
      <th scope="col">Tax</th>
      <!-- <th scope="col">Discount</th> -->
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
      <th scope="row"> {{$i++}}</th>
     <!--  <td>{{$order->id}}</td> -->
     
      <td>
        <!-- <a onclick="">Show details</a> -->

        <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse{{$order->id}}">Details</a>
        </h4>
      </div>
     
      <div id="collapse{{$order->id}}" class="panel-collapse collapse">
        <table class="table table-hover" width="100%">
  <thead>
    <tr>
      <th scope="col">Product Name</th>
      <!-- <th scope="col">Order ID</th> -->
      <th scope="col">Product Price </th>
      <!-- <th scope="col">Product Unit Price</th> -->
      <!-- <th scope="col">Order Quantity</th> -->
      
      <th scope="col">Product Quantity</th>
      
       <th scope="col">Discount</th>
      <!-- <th scope="col">Total</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Status</th>
      <th scope="col">Claim Order</th> -->
    </tr>

  </thead>
   @foreach($order->order_products as $order_product)
<tr>
  <td>{{$order_product->product->product_name}}</td>
  <td>{{$order_product->order_product_unit_price}}</td>
  <td>{{$order_product->order_product_quantity}}</td>
  <td>{{$order->discount->discount_percent}}%</td>
</tr>
@endforeach
</table>
        
        <!-- <div class="panel-footer">Footer</div> -->
      </div>
      
       </div>
  </div>
      </td>

      <!-- <td>{{$order->order_product_unit_price}}</td> -->
       <!-- <td>{{$order->order_product_quantity}}</td> -->
      
      <td>{{$order->shipping_charges}}</td>
      <td>{{$order->order_tax}}</td>
       <!-- <td>{{$order->discount_percent}}%</td> -->
      <td>{{$order->order_product_total_price}}</td>
       <td>{{$order->payment_method}}</td>
      @if($order->order_status == 0)
      <td>Pending</td>
      @else
      <td>Accept</td>
      @endif
      <td><a data-toggle="modal" data-target="#myModal{{$order->id}}" style="cursor: pointer;color: red;text-decoration: underline;">wants to claim?</a></td>
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
@foreach($orders as $order)

<div class="modal fade" id="myModal{{$order->id}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="display: block;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" >Claim Order</h4>
        </div>
        <div class="modal-body">
          <form action="{{url('ecommerce/user/dashboard')}}" method="post" enctype="multipart/form-data" >
            {{csrf_field()}}
          <div class="form-group" style="margin: 0px;">
                          
                          <div class="col-xs-12">
                              <label for="product_name"><h4>Product name: </h4></label>
                              <select class="form-control" id="sel1" name = "product_id">
                                @foreach($order->order_products as $order_product)
                                  <option value="{{$order_product->product->id}}">{{$order_product->product->product_name}}</option>
                                  @endforeach
                                  <!-- <option>2</option>
                                  <option>3</option>
                                  <option>4</option> -->
                                </select>
                          </div>
                      </div>
                      
                      <div class="form-group" style="margin: 0px;">
                          
                          <!-- <div class="col-xs-12">
                            <label for="product_category"><h4>Product Type: </h4></label>
                              
                          </div>
                      </div> -->
                  <!-- <div class="form-group">
                          
                          <div class="col-xs-12">
                              <label for="product_type"><h4>Product Type:</h4></label>
                              
                          </div>
                      </div> -->
                      <!-- <div class="form-group" style="margin: 0px;">
                          
                          <div class="col-xs-12">
                            <label for="brand"><h4>Brand:</h4></label>
                             
                          </div>
                      </div> -->
                       <!-- <div class="form-group">
                          
                          <div class="col-xs-12">
                              <label for="company_name"><h4>Company Name:</h4></label>
                              
                          </div>
                      </div> -->
                      <div class="form-group" style="margin: 0px;">
                          
                          <div class="col-xs-12">
                            <label for="claim_request"><h4>Claim Request as:</h4></label>
                              <select class="form-control" id="sel1" name="claim_request">
                                
                                  <option value="I WANT TO KNOW WHERE MY ORDER IS?">I WANT TO KNOW WHERE MY ORDER IS?</option>
                                  <option value="I WANT TO RETURN AN ITEM">I WANT TO RETURN AN ITEM</option>
                                  <option value="I WANT TO CANCEL AN ORDER">I WANT TO CANCEL AN ORDER</option>
                                </select>
                          </div>
                      </div>
                         <div class="form-group">
                          
                          <div class="col-xs-12">
                              <label for="address"><h4>Describe Your Issue:</h4></label>
                              <textarea  class="form-control" id="address" name="issue" placeholder="Please Describe Your Issue" value="" title="Enter Your Problem" ></textarea>
                          </div>
                      </div>
                       <!-- <div class="form-group">
                          
                          <div class="col-xs-12">
                              <label for="date"><h4>Purchasing Date:</h4></label>
                              
                          </div>
                      </div> -->
                      
                      </div>
        </div>
      
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" >Submit</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>
  @endforeach
  

    </main>
          
            
          
        
        </div>
      </div>
    </div>
    
</div>
    @include('frontend.ecommerce.dashboards.User.include.footer')

