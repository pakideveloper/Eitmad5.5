<nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <!-- <li class="nav-item">
                <router-link  to="dashboard" class="nav-link"><span data-feather="shopping-cart"></span>&nbsp;Dasboard</router-link>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="{{url('ecommerce/user/dashboard')}}"  ><span data-feather="user"></span>&nbsp;Profile</a>
              </li>
             
              <li class="nav-item has-sub">
                <a class="nav-link" href="{{url('ecommerce/myorders')}}">
                  <span data-feather="user"></span>
                  Orders
                  
                </a>
                
              </li>
              
             
              <li class="nav-item">
                 <a class="nav-link" href="{{url('ecommerce/changepassword')}}">
                  <span data-feather="user"></span>
                 WishList
                  <!-- <span class="positive">+</span> -->
                </a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="{{url('ecommerce/changepassword')}}">
                  <span data-feather="user"></span>
                 Claim Request
                  <!-- <span class="positive">+</span> -->
                </a>
              </li>
              <li class="nav-item has-sub">
                <a class="nav-link" href="{{url('ecommerce/changepassword')}}">
                  <span data-feather="user"></span>
                 Change Password
                  <!-- <span class="positive">+</span> -->
                </a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="{{url('ecommerce/deactivate')}}">
                  <span data-feather="user"></span>
                 Deactivate Account
                  <!-- <span class="positive">+</span> -->
                </a>
              </li>
             
              
             
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Integrations
                </a>
              </li> -->
            </ul>

            
          </div>
        </nav>