<nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <!--  <router-link  :to="CompanyDashboardRoute" class="nav-link"><span data-feather="shopping-cart"></span>&nbsp;Dasboard</router-link> -->
               <a href="{{url('/jobs/company')}}" class="nav-link"><span data-feather="shopping-cart"></span>&nbsp;Dashboard</a>
              </li>
              <li class="nav-item has-sub">
                <a class="nav-link" href="JavaScript:void(0)">
                  <span data-feather="user"></span>
                  Jobs
                  <span class="positive">+</span>
                </a>
                <ul class="nav flex-column is-sub">                  
                   <li>
                      <!-- <router-link  :to="CompanyDashboardRoute +'/add-job'" exact class="nav-link">Post A Job </router-link> -->
                      <a href="{{url('/jobs/company/add-job')}}/create" class="nav-link">Post A Job</a>
                    
                  </li>
                  <li>
                     <!--  <router-link  :to="CompanyDashboardRoute +'/all-jobs'" class="nav-link">All Jobs</router-link> -->
                      <a href="{{url('/jobs/company/all-jobs')}}" class="nav-link">All Jobs</a>
                  </li>
                 <!--  <li>
                      <router-link  to="add-product" class="nav-link">Add Product test</router-link>
                    
                  </li>
                  <li>
                      <router-link  to="add-product" class="nav-link">Media Center</router-link>
                    
                  </li>
                  <li>
                      <router-link  to="add-product" class="nav-link">Manage Image</router-link>
                    
                  </li>
                  <li>
                      <router-link  to="add-product" class="nav-link">Fulfilment by Eitmad</router-link>
                    
                  </li> -->
                </ul>
              </li>
              <li class="nav-item has-sub">
                <a class="nav-link" href="JavaScript:void(0)">
                  <span data-feather="user"></span>
                  Orders
                  <span class="positive">+</span>
                </a>
                <ul class="nav flex-column is-sub">                  
                  <li>
                      <router-link  to="add-product" class="nav-link">Manage orders</router-link>   
                  </li>
                  <li>
                      <router-link  to="add-product" class="nav-link">Manage Reviews</router-link>   
                  </li>
                </ul>
              </li>
              <li class="nav-item has-sub">
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
              </li>
              <li class="nav-item has-sub">
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
              </li>
              <li class="nav-item">
                <router-link  to="add-product" class="nav-link"><span data-feather="shopping-cart"></span>&nbsp;Store</router-link>
              </li>
              <li class="nav-item has-sub">
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
              </li>
              <li class="nav-item">
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
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Integrations
                </a>
              </li> -->
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
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
            </ul>
          </div>
        </nav>