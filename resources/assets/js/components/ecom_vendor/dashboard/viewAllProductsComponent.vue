<template>
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
    <div class="col-md-12">
      <form @submit.prevent="submit">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6 col-sm-12">

            <div class="form-group col-md-12 col-sm-12" :class="{ 'has-error': $v.name.$error }">
              <label for="product_name">Product Name</label>
              <input type="text" class="form-control" id="product_name" aria-describedby="emailHelp" placeholder="Enter email" v-model="$v.name.$model">
              <span class="error" v-if="$v.name.$error">Field is required</span>
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>


            <div class="form-group col-md-12 col-sm-12"  >
              <label for="product_images">Title Image</label>
              <input type="file" class="form-control" id="title_image" @change="onTitleImageSelected($event)" placeholder="Select Images">
              <!-- <span class="error" v-if="$v.des.$error">Field is required</span> -->
            </div>
            <div class="form-group col-md-12 col-sm-12"  >
              <label for="product_images">Slider Images</label>
              <input type="file" class="form-control" id="product_images" @change="onFileSelected($event)" placeholder="Select Images" multiple="true">
              <!-- <span class="error" v-if="$v.des.$error">Field is required</span> -->
            </div>

            <div class="form-group col-md-12 col-sm-12"  :class="{ 'has-error': $v.des.$error }">
              <label for="product_description">Product Description</label>
              <input type="text" class="form-control" id="product_description" placeholder="text" v-model="$v.des.$model">
              <span class="error" v-if="$v.des.$error">Field is required</span>
            </div>


            <div class="form-group col-md-12 col-sm-12"  :class="{ 'has-error': $v.size.$error }">
              <label for="product_size">Product Size</label>
              <input type="text" class="form-control" id="product_size" placeholder="text" v-model="$v.size.$model">
              <span class="error" v-if="$v.size.$error">Field is required</span>
            </div>


            <div class="form-group col-md-12 col-sm-12"  :class="{ 'has-error': $v.color.$error }">
              <label for="product_color">Product Color</label>
              <input type="text" class="form-control" id="product_color" placeholder="text" v-model="$v.color.$model">
              <span class="error" v-if="$v.color.$error">Field is required</span>
            </div>
            <div class="form-group col-md-12 col-sm-12"  :class="{ 'has-error': $v.price.$error }">
              <label for="product_price">Product Price</label>
              <input type="text" class="form-control" id="product_price" placeholder="text" v-model="$v.price.$model">
              <span class="error" v-if="$v.price.$error">Field is required</span>
            </div>
            <div class="form-group col-md-12 col-sm-12"  :class="{ 'has-error': $v.quantity.$error }">
              <label for="product_quantity">Product Quantity</label>
              <input type="text" class="form-control" id="product_quantity" placeholder="Password" v-model="$v.quantity.$model">
              <span class="error" v-if="$v.quantity.$error">Field is required</span>
            </div>
            
            <div class="form-group col-md-12 col-sm-12"  :class="{ 'has-error': $v.category.$error }">
              <label for="product_category">Select Category</label>
              <select class="form-control" v-model="$v.category.$model" @change="catChange()">
                <optgroup v-for="category in categories" :label="category.category_name">
                  <option v-for="sub_cat in sub_categories" v-if="sub_cat.product_category_id == category.id" :value="sub_cat.id"  >{{sub_cat.sub_category_name}}</option>
                </optgroup>
              </select>
              <span class="error" v-if="$v.category.$error">Field is required</span>
            </div>
            <div class="form-group col-md-12 col-sm-12" v-for="input in inputs">
              <label for="product_quantity">Product {{input.label}}</label>
              <input type="text" class="form-control" id="product_quantity" placeholder="Password" v-model.trim="formData[input.name]" >
            </div>
            <div class="form-group col-md-12 col-sm-12"  :class="{ 'has-error': $v.brand.$error }">
              <label for="product_category">Select Brand</label>
              <select class="form-control" v-model="$v.brand.$model">
                <option v-for="brand in brands" :value="brand.id">{{brand.brand_name}}</option>
              </select>
              <span class="error" v-if="$v.brand.$error">Field is required</span>
            </div>
            <div class="form-group col-md-12 col-sm-12"  :class="{ 'has-error': $v.discount.$error }">
              <label for="product_category">Select Discount</label>
              <select class="form-control" v-model="$v.discount.$model">
                <option v-for="discount in discounts" :value="discount.id">{{discount.discount_name}}&nbsp;{{discount.discount_percent}}%</option>\
              </select>
              <span class="error" v-if="$v.discount.$error">Field is required</span>
            </div>
            <div class="form-group form-check  col-md-12 col-sm-12">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div><br>
            <button type="submit" class="btn btn-primary" >Submit</button>
          </div>  
        </div>      
      </form>
    </div>
    
  </main>
</template>

<script>
  import hasUrl from './hasUrl'
    export default {
        mounted() {
          //  [App.vue specific] When App.vue is finish loading finish the progress bar
          this.$Progress.finish()
        },
        data() {
          return {            
          };
        },
        
        methods: {
          
        },
        created(){
          this.$Progress.start()
          this.$router.beforeEach((to, from, next) => {
            //  does the page we want to go to have a meta.progress object
            if (to.meta.progress !== undefined) {
              let meta = to.meta.progress
              // parse meta tags
              this.$Progress.parseMeta(meta)
            }
            //  start the progress bar
            this.$Progress.start()
              //  continue to next page
              next()
          })
          //  hook the progress bar to finish after we've finished moving router-view
          this.$router.afterEach((to, from) => {
            //  finish the progress bar
            this.$Progress.finish()
          })
        },
        mixins: [hasUrl]
    }
</script>
<style>
 
</style>