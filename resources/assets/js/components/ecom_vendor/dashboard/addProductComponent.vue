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
      <form>
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6 col-sm-12">
            <div class="form-group col-md-12 col-sm-12">
              <label for="product_name">Product Name</label>
              <input type="text" class="form-control" id="product_name" aria-describedby="emailHelp" placeholder="Enter email" v-model="$v.name.$model">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group col-md-12 col-sm-12">
              <label for="product_description">Product Description</label>
              <input type="text" class="form-control" id="product_description" placeholder="text" v-model="$v.description.$model">
            </div>
            <div class="form-group col-md-12 col-sm-12">
              <label for="product_size">Product Size</label>
              <input type="text" class="form-control" id="product_size" placeholder="text" v-model="$v.size.$model">
            </div>
            <div class="form-group col-md-12 col-sm-12">
              <label for="product_color">Product Color</label>
              <input type="text" class="form-control" id="product_color" placeholder="text" v-model="$v.color.$model">
            </div>
            <div class="form-group col-md-12 col-sm-12">
              <label for="product_price">Product Price</label>
              <input type="text" class="form-control" id="product_price" placeholder="text" v-model="$v.price.$model">
            </div>
            <div class="form-group col-md-12 col-sm-12">
              <label for="product_quantity">Product Quantity</label>
              <input type="text" class="form-control" id="product_quantity" placeholder="Password" v-model="$v.quantity.$model">
            </div>
            
            <div class="form-group col-md-12 col-sm-12">
              <label for="product_category">Select Category</label>
              <select class="form-control" v-model="$v.category.$model" @change="catChange()">
                <optgroup v-for="category in categories" :label="category.category_name">
                  <option v-for="sub_cat in sub_categories" v-if="sub_cat.product_category_id == category.id" :value="sub_cat.id"  >{{sub_cat.sub_category_name}}</option>
                </optgroup>
              </select>
            </div>
            <div class="form-group col-md-12 col-sm-12" v-for="input in inputs">
              <label for="product_quantity">Product {{input.label}}</label>
              <input type="text" class="form-control" id="product_quantity" placeholder="Password" v-model.trim="formData[input.name]" >
            </div>
            <div class="form-group col-md-12 col-sm-12">
              <label for="product_category">Select Brand</label>
              <select class="form-control" v-model="$v.brand.$model">
                <option v-for="brand in brands" :value="brand.id">{{brand.brand_name}}</option>
              </select>
            </div>
            <div class="form-group col-md-12 col-sm-12">
              <label for="product_category">Select Discount</label>
              <select class="form-control" v-model="$v.discount.$model">
                <option v-for="discount in discounts" :value="discount.id">{{discount.discount_name}}&nbsp;{{discount.discount_percent}}%</option>\
              </select>
            </div>
            <div class="form-group form-check  col-md-12 col-sm-12">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div><br>
            <button type="submit" class="btn btn-primary" @click.prevent="submit">Submit</button>
          </div>  
        </div>      
      </form>
    </div>
    
  </main>
</template>

<script>
  import hasUrl from './hasUrl'
  import { required, minLength, between, email } from 'vuelidate/lib/validators'
    export default {
        mounted() {
        },
        data() {
          return {
              categories: [],
              sub_categories:[],
              brands:[],
              discounts: [],
              formData:{},
              name: '',
              description:'',
              size:'', 
              color:'', 
              price:'', 
              quantity:'', 
              category:'', 
              brand:'', 
              discount:'',
              inputs:[] ,              
          };
        },
        validations: {
          name: {
            required,
          },
          description: {
            required,
          },
          size: {
            required,
          },
          color: {
            required,
          },
          price: {
            required,
          },
          quantity: {
            required,
          },
          category: {
            required,
          },
          brand: {
            required,
          },
          discount: {
            required,
          },
        },
        methods: {
          getCategories(){
            axios.get(this.url+'/getCategories')
                .then(({ data }) => {
                    this.categories = data;
                });
          },
          getSubCategories(){
            axios.get(this.url+'/getSubCategories')
                .then(({ data }) => {
                    this.sub_categories = data;
                });
          },
          getBrands(){
            axios.get(this.url+'/getBrands')
                .then(({ data }) => {
                    this.brands = data;
                });
          },
          getDiscounts(){
            axios.get(this.url+'/getDiscounts')
                .then(({ data }) => {
                    this.discounts = data;
                });
          },
          catChange(){
            this.inputs = [];
            var data = JSON.parse(this.sub_categories[this.category-1].feature_names);
            $.each(data, function(key, value) {
              var input = {name:'', label:''};
              var value2 = value.replace(/\s/g, '') ;
              input.name = value2;
              input.label = value;
              this.inputs.push(input);
              input = {name:'', label:''};
           }.bind(this));
          },
          submit(){
            console.log(this.$v.$invalid);
            if (this.$v.$invalid) {
              let endpoint = this.url+'/product';
              let data = {
                  name : this.name,
                  description : this.description,
                  size : this.size,
                  color : this.color,
                  price : this.price,
                  quantity : this.quantity,
                  category  : this.category,
                  brand   : this.brand,
                  discount  : this.discount,
                  sub_categories : this.formData 
              };
            axios.post(endpoint, data)
            .then(({ data }) => {
                console.log(data);
            });
            }
          },
        },
        created(){
          this.getCategories();
          this.getSubCategories();
          this.getBrands();
          this.getDiscounts();
          // Vue.set(app.$data, 'b', 2);
          // Vue.set(this.$data, 'page', 1)
        },
        mixins: [hasUrl]
    }
</script>
<!-- //https://www.npmjs.com/package/vue-dynamic-forms -->
<!-- //https://www.youtube.com/watch?v=yFduo7kFbBM -->
<style>
  .error{
    position: absolute;
      font-size: 14px;
      color: red;
  }
</style>