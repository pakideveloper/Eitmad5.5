 @include('frontend.ecommerce.dashboards.User.include.header')
    <div id="dashboard_user">
    <div class="container-fluid">
      <div class="row">
        
        @include('frontend.ecommerce.dashboards.User.include.left-sidebar')

        
          
            <router-view></router-view>
          
        
        </div>
      </div>
    </div>
    @include('frontend.ecommerce.dashboards.User.include.footer')