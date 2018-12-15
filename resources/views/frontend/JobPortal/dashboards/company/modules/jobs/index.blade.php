    
    @include('frontend.JobPortal.dashboards.company.include.header')
    <div id="CompanyDashboard">
    <div class="container-fluid">
      <div class="row">
        
        @include('frontend.JobPortal.dashboards.company.include.left-sidebar')

              <router-view></router-view>
          
               
          
        
        </div>
      </div>
    </div>
     <!-- vue js -->
    <script src="{{URL::to('public/js')}}/companydashboard.js"></script>
    <!-- vue js -->
    @include('frontend.JobPortal.dashboards.company.include.footer')

