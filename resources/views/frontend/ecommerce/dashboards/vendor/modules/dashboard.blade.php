    @include('frontend.ecommerce.dashboards.vendor.include.header')
    <div id="dashboard_app">
    <div class="container-fluid">
      <div class="row">
        
        @include('frontend.ecommerce.dashboards.vendor.include.left-sidebar')

        
          
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="text-center">
  <span class="min-chart" id="chart-sales" data-percent="56"><span class="percent"></span></span>
  <h5><span class="label green badge">Sales <i class="fas fa-arrow-circle-up"></i></span></h5>
</div>
            </main>
        
        </div>
      </div>
    </div>
    @include('frontend.ecommerce.dashboards.vendor.include.footer')
