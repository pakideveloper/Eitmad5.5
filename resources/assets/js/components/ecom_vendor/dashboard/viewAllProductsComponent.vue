<template>
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">All Product</h1>
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
      <div  v-for="product in products" @click="singleProduct" class="col-md-3 col-sm-6 col-xs-12 product">
        <span class="discount">{{product.discount.discount_percent}}%</span>
        <img :src="'http://localhost/Eitmad5.5/public/admin/ecommerce/upload/products/'+product.title_image.product_file_name" >
        <hr>
        <h5>{{product.product_name}}</h5>
        <strike>Rs.{{product.product_price}}</strike>
        <span class="price">Rs.{{product.product_discounted_price}}</span>
      </div>  
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
            products:[],            
          };
        },
        
        methods: {
          getProducts(){
            axios.get(this.url+'/product')
                .then(({ data }) => {
                    this.products = data;
                });
          },
          singleProduct(){
            this.$router.push({ path: 'add-product' })
          }
        },
        created(){
          this.$Progress.start()
          this.getProducts()
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
  .product{
    text-align: center;
    border: 1px solid #c3c3c3;
    cursor: pointer;
  }
  .product > img{
    width: 112px;
  }
  .product > .discount{
    position: absolute;
    right: 0;
    padding: 10px;
    font-size: 17px;
    color: #ffa700;
    font-family: fantasy;
    border: 1px solid #c3c3c3;
  }
  .product > .price{
    font-size: 17px;
    padding-left: 9px;
    color: red;
  }
  .product > strike{
    font-size: 14px;
  }
  .product > hr{
    border-top: 2px solid rgb(195, 195, 195);
  }
</style>