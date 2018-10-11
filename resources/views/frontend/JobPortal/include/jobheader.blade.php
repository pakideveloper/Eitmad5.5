
	
<!-- header start here-->
	<header>
		<!-- header container start here-->
		<div class="container">
			<div class="row">
				<div class="col-sm-2 col-md-2 col-xs-12">
					<!-- logo start here-->
					<div id="logo">
						<a href="{{url('home')}}">
							<img class="img-responsive" alt="logo" title="logo" src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/logo.png" />
						</a>
					</div>
					<!-- logo end here-->
				</div>
				<div class="col-sm-3 col-md-3 col-xs-12 visible-xs paddleft">
					<!-- button-login start here -->
					<div class="button-login pull-right">
						<button type="button" class="btn btn-default btn-lg" onclick="location.href='login.html'">CV Manager</button>
						<button type="button" class="btn btn-primary btn-lg" onclick="location.href='submit-job.html'">Submit Job</button>
					</div>
					<!-- button-login end here -->
				</div>
			    <div class="col-sm-6 col-md-6 col-xs-12 padd0">
					<!-- menu start here-->
					<nav class="navbar" id="menu">
						<div class="navbar-header">
							<span class="menutext visible-xs">Menu</span>
							<button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="btn btn-navbar navbar-toggle" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
						</div>
						<div class="collapse navbar-collapse navbar-ex1-collapse padd0">
							<ul class="nav navbar-nav pull-left">
								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#">HOME</a>
									
								</li>
								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#">JOBS</a>
									<div class="dropdown-menu animated fadeInDown">
										<div class="dropdown-inner">
											<ul class="list-unstyled">
												<li>
													<a href="jobs.html">job grid view</a>
												</li>
												<li>
													<a href="jobs-list-view.html">Job List view</a>
												</li>
												<li>
													<a href="jobs-detail.html">job detail</a>
												</li>
												<li>
													<a href="apply-job-form.html">apply job form</a>
												</li>
												<li>
													<a href="jobs-search.html">Search job</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<!-- <li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#">CANDIDATES</a>
									<div class="dropdown-menu animated fadeInDown">
										<div class="dropdown-inner">
											<ul class="list-unstyled">
												<li>
													<a href="candidate-grid-view.html">candidate grid view</a>
												</li>
												<li>
													<a href="candidate-list-view.html">candidate list view</a>
												</li>
												<li>
													<a href="candidate-single-view.html">candidate single view</a>
												</li>
												<li>
													<a href="my-profile.html">my profile</a>
												</li>
											</ul>
										</div>
									</div>
								</li> -->
								<li class="dropdown">
									<a  href="{{ url('employers') }}">Paper Jobs</a>
									
								</li>
								<li class="dropdown">
									<a  href="{{ url('employers') }}">Companies</a>
									
								</li>
								<!-- <li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#">BLOG</a>
									<div class="dropdown-menu animated fadeInDown">
										<div class="dropdown-inner">
											<ul class="list-unstyled">
												<li>
													<a href="blog.html">blog</a>
												</li>
												<li>
													<a href="blog-detail.html">blog detail</a>
												</li>
											</ul>
										</div>
									</div>
								</li> -->
								
								<!-- <li class="dropdown">
									<a href="register.html">Sign Up</a>
									
								</li> -->
								<li class="dropdown">
									<a  class="dropdown-toggle" href="{{ url('contactus') }}">User Name</a>
									<div class="dropdown-menu animated fadeInDown">
										<div class="dropdown-inner">
											<ul class="list-unstyled">
												<li>
													<a href="{{ url('aboutportal') }}"> User Dashboard</a>
									
												</li>
												<li>
													<a href="{{ url('aboutportal') }}">Logout</a>
									
												</li>

								
											</ul>
										</div>
									</div>
								</li>
								<!-- <li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#">PAGES
										<span class="fa fa-angle-down"></span>
									</a>
									<div class="dropdown-menu animated fadeInDown">
										<div class="dropdown-inner">
											<ul class="list-unstyled">
												<li>
													<a href="about.html">About Us</a>
												</li>
												<li>
													<a href="login.html">Login</a>
												</li>
												<li>
													<a href="register.html">Register</a>
												</li>
												<li>
													<a href="contact.html">Contact us</a>
												</li>
											</ul>
										</div>
									</div>
								</li> -->
							</ul>
						</div>
					</nav>
					<!-- menu end here -->
				</div>
			    <div class="col-sm-4 col-md-4 col-xs-12 hidden-xs">
					<!-- button-login start here -->
					<div class="button-login pull-right">
						<button type="button" class="btn btn-default btn-lg" onclick="location.href='login.html'">CV Manager</button>
						<button type="button" class="btn btn-primary btn-lg" onclick="location.href='{{ url('jobs/addcompany') }}'">Submit Job</button>
					</div>
					<!-- button-login end here -->
				</div>
			</div>
		</div>
		<!-- header container end here -->
	</header>
<!-- header end here