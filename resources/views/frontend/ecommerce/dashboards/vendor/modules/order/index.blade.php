@include('frontend.ecommerce.dashboards.vendor.include.header')
<div class="container-fluid">
  <div class="row">
    @include('frontend.ecommerce.dashboards.vendor.include.left-sidebar')
    
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" style="height: -webkit-fill-available;">
      @if (session('status'))
                        <div class="alert alert-success" style="margin-bottom: 0px;">
                            {{ session('status') }}
                        </div>
                    @endif
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">All Orders</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
          <button class="btn btn-sm btn-outline-secondary">Share</button>
          <button class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span>
        This week
        </button>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>OrderID</th>
                <th data-priority="1">Cusomer Name</th>
                <th data-priority="3">Amount</th>
                <th data-priority="1">Discount</th>
                <th data-priority="3">Status</th>
                <th data-priority="3">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>John</td>
              <td>Doe</td>
              <td>john@example.com</td>
            </tr>
            <tr>
              <td>Mary</td>
              <td>Moe</td>
              <td>mary@example.com</td>
            </tr>
            <tr>
              <td>July</td>
              <td>Dooley</td>
              <td>july@example.com</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    
  </main>
  </div>
</div>
</div>
@include('frontend.ecommerce.dashboards.vendor.include.footer')