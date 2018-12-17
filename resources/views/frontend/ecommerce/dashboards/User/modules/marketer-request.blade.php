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
      
      <th scope="col">Product Name</th>
      <th scope="col">bid_Proposal</th>
      <th scope="col">Commission_ratio</th>
      
      <th scope="col">timestamp</th>
      <th scope="col">commission_amount</th>
      <th scope="col">Accept Bid</th>
       
     <!-- <th scope="col">Payment Method</th>
      <th scope="col">Status</th>
      <th scope="col">Claim Order</th> -->
    </tr>
  </thead>
  <tbody>
    <?php 
$i = 1;

     ?>
    @foreach($requests as $request)
    
    <tr>
      <th scope="row">{{$i++}}</th>
      
     
      <td>{{$request->product_name}}</td>

      <td>{{$request->proposal}}</td>
       <td>{{$request->commission_ratio}}</td>
      
      <td>{{$request->timestamp}}</td>
      <td>{{$request->commission_amount}}</td>
      <form action="{{url('/test2')}}/{{$request->id}}" method="post" enctype="multipart/form-data">
          {{ csrf_field()}}
      <td><input type="submit" class="btn btn-primary" name="yes" id="yes" value="yes">
        <input type="BUTTON" class="btn btn-primary" name="NO" id="NO" value="NO" onclick="document.getElementById('confirms{{$request->id}}').style.display='block'">
      </td>
      </form>
     <!--  @if($request->status == 0)
      <td>Pending</td>
      @else
      <td>Done</td>
      @endif -->
      
      
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

  </div>









  </div>

@foreach($requests as $request)
<div id="confirms{{$request->id}}" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom" style="height:auto; width:30%;">
    <header class="w3-container w3-black" >
     
      <h3 style = "font-family:Segoe UI,Arial,sans-serif;font-weight: 400;margin: 10px 0;">Confirm</h3>
    </header>

      <div class="w3-container">
          
          <center>
                     
                                                        
                                                </center>
                                                
                                                <hr>
                                                    <span>Do You Really Wants To Disagree this Request?</span>
                                                    
                                                    
                                                     <hr>
        
       
        
        <button type="button" class="btn btn-primary" onclick="document.getElementById('confirms{{$request->id}}').style.display='none'" style="float:right;margin:5px;background-color: black;
    border: black;">No</button>
    <a href="{{url('ecommerce/user/cancelrequest')}}/{{$request->id}}"><button type="button" class="btn btn-primary" style="float:right;margin:5px;background-color: black;
    border: black;">Yes</button></a>
       
        <p></p>
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

