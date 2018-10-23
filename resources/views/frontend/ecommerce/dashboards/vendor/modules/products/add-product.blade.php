    @include('frontend.ecommerce.dashboards.vendor.include.header')

    <div class="container-fluid">
      <div class="row">
        @include('frontend.ecommerce.dashboards.vendor.include.left-sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Add Product</h1>
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

          
            <form>
              <div class="row">
                <div class="form-group col-md-6 col-sm-6">
                  <label for="product_name">Product Name</label>
                  <input type="text" class="form-control" id="product_name" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group col-md-6 col-sm-6">
                  <label for="product_description">Product Description</label>
                  <input type="text" class="form-control" id="product_description" placeholder="text">
                </div>
                <div class="form-group col-md-6 col-sm-6">
                  <label for="product_size">Product Size</label>
                  <input type="text" class="form-control" id="product_size" placeholder="text">
                </div>
                <div class="form-group col-md-6 col-sm-6">
                  <label for="product_color">Product Color</label>
                  <input type="text" class="form-control" id="product_color" placeholder="text">
                </div>
                <div class="form-group col-md-6 col-sm-6">
                  <label for="product_price">Product Price</label>
                  <input type="text" class="form-control" id="product_price" placeholder="text">
                </div>
                <div class="form-group col-md-6 col-sm-6">
                  <label for="product_quantity">Product Quantity</label>
                  <input type="text" class="form-control" id="product_quantity" placeholder="Password">
                </div>
                <div class="form-group col-md-6 col-sm-6">
                  <label for="product_category">Select Category</label>
                  <select class="form-control">
                    <option>Category 1</option>
                    <option>Category 2</option>
                  </select>
                </div>
                <div class="form-group col-md-6 col-sm-6">
                  <label for="product_category">Select Brand</label>
                  <select class="form-control">
                    <option>Brand 1</option>
                    <option>Brand 2</option>
                  </select>
                </div>
                <div class="form-group col-md-6 col-sm-6">
                  <label for="product_category">Select Discount</label>
                  <select class="form-control">
                    <option>discount 1</option>
                    <option>discount 2</option>
                  </select>
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              
            </form>
          
          
          
        </main>
      </div>
    </div>
    @include('frontend.ecommerce.dashboards.vendor.include.footer')
