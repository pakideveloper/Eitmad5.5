<nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <!-- <li class="nav-item">
                <router-link  to="dashboard" class="nav-link"><span data-feather="shopping-cart"></span>&nbsp;Dasboard</router-link>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="{{url('ecommerce/user/dashboard')}}" ><span data-feather="user"></span>&nbsp;Profile</a>
              </li>
              <li class="nav-item has-sub">
               

                <!-- <a class="nav-link" href="JavaScript:void(0)">
                  <span data-feather="user" ></span>
                  Product
                  <span class="positive">+</span>
                </a> -->
                <!-- <ul class="nav flex-column is-sub">                  
                  <li>
                      <router-link  to="add-product1" class="nav-link">Manage Products</router-link>
                    
                  </li>
                  <li>
                      <router-link  to="add-product" class="nav-link">Add Product</router-link>
                    
                  </li>
                  <li>
                      <router-link  to="add-product" class="nav-link">Add Product</router-link>
                    
                  </li>
                  <li>
                      <router-link  to="add-product" class="nav-link">Media Center</router-link>
                    
                  </li>
                  <li>
                      <router-link  to="add-product" class="nav-link">Manage Image</router-link>
                    
                  </li>
                  <li>
                      <router-link  to="add-product" class="nav-link">Fulfilment by Eitmad</router-link>
                    
                  </li>
                </ul> -->
              </li>
             
              <li class="nav-item has-sub">
                <a class="nav-link" href="{{url('ecommerce/myorders')}}">
                  <span data-feather="user"></span>
                  My Orders
                  <!-- <span class="positive">+</span> -->
                </a>
                <!-- <ul class="nav flex-column is-sub">                  
                  <li>
                      <router-link  to="add-product" class="nav-link">Manage orders</router-link>   
                  </li>
                  <li>
                      <router-link  to="add-product" class="nav-link">Manage Reviews</router-link>   
                  </li>
                </ul> -->
              </li>
              <!-- <li class="nav-item has-sub">
                <a class="nav-link" href="JavaScript:void(0)">
                  <span data-feather="user"></span>
                  Promotion
                  <span class="positive">+</span>
                </a>
                <ul class="nav flex-column is-sub">                  
                  <li>
                      <router-link  to="add-product" class="nav-link">Compaign Managment</router-link>   
                  </li>
                  <li>
                      <router-link  to="add-product" class="nav-link">Bundles</router-link>   
                  </li>
                  <li>
                      <router-link  to="add-product" class="nav-link">Seller Voucher</router-link>   
                  </li>
                </ul>
              </li> -->
              <li class="nav-item has-sub">
                <a class="nav-link" href="JavaScript:void(0)">
                  <span data-feather="user"></span>
                  Product
                  <span class="positive">+</span>
                </a>
                <ul class="nav flex-column is-sub">                  
                  <li>
                      <a  href="{{url('ecommerce/user/addproduct')}}/create" class="nav-link">Add</a>   
                  </li>
                  <li>
                       <a  href="{{url('ecommerce/user/addproduct')}}" class="nav-link">Manage Products</a>    
                  </li>
                  <li>
                       <a  href="{{url('ecommerce/user/allproducts')}}" class="nav-link">All Products</a>   
                  </li>
                </ul>
              </li>

              <li class="nav-item has-sub">
                <a class="nav-link" href="{{url('ecommerce/user/marketerRequest')}}">
                  <span data-feather="user"></span>
                  Affiliate Marketer Requests
                  
                </a>
                
              </li>


              <li class="nav-item">
                 <a class="nav-link" href="{{url('ecommerce/changepassword')}}">
                  <span data-feather="user"></span>
                 WishList
                  <!-- <span class="positive">+</span> -->
                </a>
              </li>
             <!--  <li class="nav-item">
                 <a class="nav-link" href="{{url('ecommerce/changepassword')}}">
                  <span data-feather="user"></span>
                 Claim Request
                
                </a>
              </li> -->
              <li class="nav-item has-sub">
                <a class="nav-link" href="{{url('ecommerce/changepassword')}}">
                  <span data-feather="user"></span>
                 Change Password
                  <!-- <span class="positive">+</span> -->
                </a>
              </li>
              <!-- <li class="nav-item">
                 <a class="nav-link" href="{{url('ecommerce/deactivate')}}">
                  <span data-feather="user"></span>
                 Deactivate Account
                  
                </a>
              </li> -->

              <li class="nav-item">
                 <a class="nav-link" onclick="document.getElementById('confirms').style.display='block'" style="cursor: pointer;">
                  <span data-feather="user"></span>
                 Deactivate Account
                  
                </a>
              </li>
              <div id="confirms" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom" style="height:auto; width:30%;">
    <header class="w3-container w3-black" >
     
      <h3 style = "font-family:Segoe UI,Arial,sans-serif;font-weight: 400;margin: 10px 0;">Confirm</h3>
    </header>

      <div class="w3-container">
          
          <center>
                     
                                                        
                                                </center>
                                                
                                                <hr>
                                                    <span>Do You Really Wants To Deactivate Your Account?</span>
                                                    
                                                    
                                                     <hr>
        
       
        
        <button type="button" class="btn btn-primary" onclick="document.getElementById('confirms').style.display='none'" style="float:right;margin:5px;background-color: black;
    border: black;">No</button>
    <a href="{{url('ecommerce/deactivate')}}"><button type="button" class="btn btn-primary" style="float:right;margin:5px;background-color: black;
    border: black;">Yes</button></a>
       
        <p></p>
      </div>
    </div>
  </div>

    <!-- <li class="nav-item has-sub">
                <a class="nav-link" href="JavaScript:void(0)">
                  <span data-feather="user"></span>
                  Finance
                  <span class="positive">+</span>
                </a>
                <ul class="nav flex-column is-sub">                  
                  <li>
                      <router-link  to="add-product" class="nav-link">Account Statements</router-link>   
                  </li>
                  <li>
                      <router-link  to="add-product" class="nav-link">Order Overview</router-link>   
                  </li>
                  <li>
                      <router-link  to="add-product" class="nav-link">Transaction Overview</router-link>   
                  </li>
                </ul>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Customers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Reports
                </a>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Integrations
                </a>
              </li> -->
            </ul>


           <!--  <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6> -->
            <!-- <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Year-end sale
                </a>
              </li>
            </ul> -->
          </div>
        </nav>