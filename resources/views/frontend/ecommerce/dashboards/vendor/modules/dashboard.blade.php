    @include('frontend.ecommerce.dashboards.vendor.include.header')
    <div id="dashboard_app">
    <div class="container-fluid">
      <div class="row">
        
        @include('frontend.ecommerce.dashboards.vendor.include.left-sidebar')

        
          
            <router-view></router-view>
          
        
        </div>
      </div>
    </div>
    @include('frontend.ecommerce.dashboards.vendor.include.footer')
