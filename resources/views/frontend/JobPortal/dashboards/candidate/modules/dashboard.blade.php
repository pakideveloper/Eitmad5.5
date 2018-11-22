    @include('frontend.JobPortal.dashboards.candidate.include.header')
    <div id="candidate_dashboard_app">
    <div class="container-fluid">
      <div class="row">
        
        @include('frontend.JobPortal.dashboards.candidate.include.left-sidebar')

            <router-view></router-view>
          
        @include('frontend.JobPortal.dashboards.candidate.include.footer')

        </div>
      </div>
    </div>
