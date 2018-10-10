 <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <div class="user-details">
                            <div class="overlay"></div>
                            <div class="text-center">
                                <img src="{{URL::to('public/admin/ecommerce')}}/assets/images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
                            </div>
                            <div class="user-info">
                                <div>
                                    <a href="#setting-dropdown" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Daniel Syme <span class="mdi mdi-menu-down"></span></a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown" id="setting-dropdown">
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)"><i class="mdi mdi-face-profile m-r-5"></i> Profile</a></li>
                                <li><a href="javascript:void(0)"><i class="mdi mdi-account-settings-variant m-r-5"></i> Settings</a></li>
                                <li><a href="javascript:void(0)"><i class="mdi mdi-lock m-r-5"></i> Lock screen</a></li>
                                <li><a href="javascript:void(0)"><i class="mdi mdi-logout m-r-5"></i> Logout</a></li>
                            </ul>
                        </div>

                        <ul>
                            <li class="menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span class="badge badge-success pull-right">2</span> <span> Dashboard </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="index.html">Dashboard 1</a></li>
                                    <li><a href="dashboard_2.html">Dashboard 2</a></li>
                                </ul>
                            </li>
                            
                             <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i><span>Orders</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    
                                   <!--  <li><a href="{{url('/ecommerce/admin/discount')}}/create">Add Discount</a></li> -->
                                  
                                    <li><a href="{{url('/ecommerce/admin/orders')}}">View All</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-invert-colors"></i> <span>Brand </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{url('/ecommerce/admin/brands')}}/create">Create</a></li>
                                    <li><a href="{{url('/ecommerce/admin/brands')}}">View All</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-invert-colors"></i> <span>Product </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{url('/ecommerce/admin/products')}}/create">Create</a></li>
                                    <li><a href="{{url('/ecommerce/admin/products')}}">View All</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i><span>Categories</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    
                                    <li><a href="{{url('/ecommerce/admin/categories')}}/create">Create</a></li>
                                    <!-- <li><a href="{{url('/ecommerce/admin/subcategories')}}/create">add sub category</a></li> -->
                                    <li><a href="{{url('/ecommerce/admin/categories')}}">View All</a></li>
                                    <!-- <li><a href="{{url('/ecommerce/admin/subcategories')}}">View All SubCategories</a></li> -->
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i><span>Sub-Categories</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    
                                    <li><a href="{{url('/ecommerce/admin/subcategories')}}/create">Create</a></li>
                                    
                                    <li><a href="{{url('/ecommerce/admin/subcategories')}}">View All</a></li>
                                </ul>
                            </li>



                                <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-invert-colors"></i> <span> Roles </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{url('/ecommerce/admin/roles/create')}}">Create new</a></li>
                                    <!-- <li><a href="{{url('/ecommerce/admin/roles')}}">View All</a></li>  
                                     -->  
                                    <li><a href="{{url('/ecommerce/admin/roles')}}">View All</a></li>                   
                                </ul>
                            </li>

                             <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i><span>Discounts</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    
                                    <li><a href="{{url('/ecommerce/admin/discount')}}/create">Add Discount</a></li>
                                  
                                    <li><a href="{{url('/ecommerce/admin/discount')}}">View All</a></li>
                                </ul>
                            </li>
                             <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i><span>Regions</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    
                                    <li><a href="{{url('/ecommerce/admin/region')}}/create">Add Region</a></li>
                                   
                                    <li><a href="{{url('/ecommerce/admin/region')}}">View All</a></li>
                                </ul>
                            </li>


                           <!--  <li>
                                <a href="calendar.html" class="waves-effect"><i class="mdi mdi-calendar"></i><span> Calendar </span></a>
                            </li> -->

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email"></i><span> Country </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{url('/ecommerce/admin/countries')}}/create">Add</a></li>
                                    <li><a href="{{url('/ecommerce/admin/countries')}}">View</a></li>
                                    <!-- <li><a href="email-compose.html"> Compose Mail</a></li> -->
                                </ul>
                            </li>
                             

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-heart-outline"></i><span> City </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{url('/ecommerce/admin/cities')}}/create">Add</a></li>
                                    <li><a href="{{url('/ecommerce/admin/cities')}}">View</a></li>
                                    
                                    
                                </ul>
                            </li>
                             <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i><span>Areas</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    
                                    <li><a href="{{url('/ecommerce/admin/area')}}/create">Add Area</a></li>
                                   
                                    <li><a href="{{url('/ecommerce/admin/area')}}">View All</a></li>
                                </ul>
                            </li>
                             <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i><span> Slider</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    
                                    <li><a href="{{url('/ecommerce/admin/sliders')}}/create">Add Slider</a></li>
                                   
                                    <li><a href="{{url('/ecommerce/admin/sliders')}}">View All Slider</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-diamond"></i><span class="badge badge-danger pull-right">New</span> <span> Forms </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-advanced.html">Form Advanced</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-pickers.html">Form Pickers</a></li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                    <li><a href="form-mask.html">Form Masks</a></li>
                                    <li><a href="form-summernote.html">Summernote</a></li>
                                    <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
                                    <li><a href="form-uploads.html">Multiple File Upload</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-layouts.html">Tables Layouts</a></li>
                                    <li><a href="tables-datatable.html">Data Table</a></li>
                                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="tables-tablesaw.html">Tablesaw Table</a></li>
                                    <li><a href="tables-editable.html">Editable Table</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Extra</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-chart-arc"></i><span> Charts </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="chart-flot.html">Flot Chart</a></li>
                                    <li><a href="chart-morris.html">Morris Chart</a></li>
                                    <li><a href="chart-google.html">Google Chart</a></li>
                                    <li><a href="chart-chartist.html">Chartist Charts</a></li>
                                    <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
                                    <li><a href="chart-c3.html">C3 Chart</a></li>
                                    <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                                    <li><a href="chart-knob.html">Jquery Knob</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-map"></i> <span> Maps </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="maps-google.html">Google Maps</a></li>
                                    <li><a href="maps-vector.html">Vector Maps</a></li>
                                    <li><a href="maps-mapael.html">Mapael Maps</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Pages </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="page-starter.html">Starter Page</a></li>
                                    <li><a href="page-login.html">Login</a></li>
                                    <li><a href="page-register.html">Register</a></li>
                                    <li><a href="page-logout.html">Logout</a></li>
                                    <li><a href="page-recoverpw.html">Recover Password</a></li>
                                    <li><a href="page-lock-screen.html">Lock Screen</a></li>
                                    <li><a href="page-confirm-mail.html">Confirm Mail</a></li>
                                    <li><a href="page-404.html">Error 404</a></li>
                                    <li><a href="page-404-alt.html">Error 404-alt</a></li>
                                    <li><a href="page-500.html">Error 500</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-gift"></i><span> Extras </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="extras-profile.html">Profile</a></li>
                                    <li><a href="extras-sitemap.html">Sitemap</a></li>
                                    <li><a href="extras-about.html">About Us</a></li>
                                    <li><a href="extras-contact.html">Contact</a></li>
                                    <li><a href="extras-members.html">Members</a></li>
                                    <li><a href="extras-timeline.html">Timeline</a></li>
                                    <li><a href="extras-invoice.html">Invoice</a></li>
                                    <li><a href="extras-search-result.html">Search Result</a></li>
                                    <li><a href="extras-emailtemplate.html">Email Template</a></li>
                                    <li><a href="extras-maintenance.html">Maintenance</a></li>
                                    <li><a href="extras-coming-soon.html">Coming Soon</a></li>
                                    <li><a href="extras-faq.html">FAQ</a></li>
                                    <li><a href="extras-gallery.html">Gallery</a></li>
                                    <li><a href="extras-pricing.html">Pricing</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">More</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-comment-text-outline"></i><span> Blog </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="blogs-dashboard.html">Dashboard</a></li>
                                    <li><a href="blogs-blog-list.html">Blog List</a></li>
                                    <li><a href="blogs-blog-column.html">Blog Column</a></li>
                                    <li><a href="blogs-blog-post.html">Blog Post</a></li>
                                    <li><a href="blogs-blog-add.html">Add Blog</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-home-map-marker"></i><span> Real Estate </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="real-estate-dashboard.html">Dashboard</a></li>
                                    <li><a href="real-estate-list.html">Property List</a></li>
                                    <li><a href="real-estate-column.html">Property Column</a></li>
                                    <li><a href="real-estate-detail.html">Property Detail</a></li>
                                    <li><a href="real-estate-agents.html">Agents</a></li>
                                    <li><a href="real-estate-profile.html">Agent Details</a></li>
                                    <li><a href="real-estate-add.html">Add Property</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                    <div class="help-box">
                        <h5 class="text-muted m-t-0">For Help ?</h5>
                        <p class=""><span class="text-dark"><b>Email:</b></span> <br/> support@support.com</p>
                        <p class="m-b-0"><span class="text-dark"><b>Call:</b></span> <br/> (+123) 123 456 789</p>
                    </div>

                </div>
                <!-- Sidebar -left -->

            </div>