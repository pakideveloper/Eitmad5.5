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
  import { required, minLength, between, email } from 'vuelidate/lib/validators'
    export default {
        mounted() {
          //  [App.vue specific] When App.vue is finish loading finish the progress bar
          this.$Progress.finish()
        },
        data() {
          return {
              categories: [],
              sub_categories:[],
              brands:[],
              discounts: [],
              formData:{},
              name: '',
              des:'',
              size:'', 
              color:'', 
              price:'', 
              quantity:'', 
              category:'', 
              brand:'', 
              discount:'',
              inputs:[] , 
              selectedFile:[],
              selectedTitleImage:null             
          };
        },
        validations: {
          name: {
            required,
          },
          des: {
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
            this.$v.$touch();
            if (!this.$v.$invalid) {
              this.$Progress.start()
              let endpoint = this.url+'/product';
              const data = new FormData();
              data.append('name',this.name)
              data.append('description',this.des)
              data.append('size',this.size)
              data.append('color',this.color)
              data.append('price',this.price)
              data.append('quantity',this.quantity)
              data.append('sub_category_id',this.category)
              data.append('brand',this.brand)
              data.append('discount',this.discount)
              
              for (var i = 0; i < this.selectedFile.length; i++) {
                data.append('sliderImages[]',this.selectedFile[i])
              }
              $.each(this.formData, function(key, value) {
               data.append(key,value)
             });
              
              data.append('titleImage',this.selectedTitleImage,this.selectedTitleImage.name)
              axios.post(endpoint, data)
              .then(response => {
                 if(response.status === 200){
                    this.$Progress.finish();
                 }
                 // this.name = ' ';this.description = ' ';this.size = ' ';this.color = ' ';this.price = ' ';this.quantity = ' ';this.sliderImages = null;this.titleImage=null;
              }).catch(e => {
                this.$Progress.fail()
              })
            }
          },
          onFileSelected(event){
            let files =event.target.files;
            // this.selectedFile=event.target.files;
            for (var i = 0; i < files.length; i++) {
              this.selectedFile.push(files[i]);
            }
            // console.log(event.target.files);
          },
          onTitleImageSelected(event){
            this.selectedTitleImage=event.target.files[0]
          },
          resetForm() {
            console.log('Reseting the form')
            var self = this; //you need this because *this* will refer to Object.keys below`

            //Iterate through each object field, key is name of the object field`
            Object.keys(this.data.form).forEach(function(key,index) {
              self.data.form[key] = '';
            });
          },
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
      font-size: 12px;
      color: red;
  }
  .has-error{
    animation-name: shakeError;
    animation-fill-mode: forward;
    animation-duration: .6s;
    animation-timing-function: ease-in-out;
  }
  .has-error input{
    border-color: #f79483;
    
  }
  .has-error > .form-control:focus{
    color: #495057;
    background-color: #fff;
    border-color: #ff9d9d;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgb(236, 176, 176);

  }

  .has-error {
  animation: shake 0.82s cubic-bezier(.36,.07,.19,.97) both;
  transform: translate3d(0, 0, 0);
  backface-visibility: hidden;
  perspective: 1000px;
}

@keyframes shake {
  10%, 90% {
    transform: translate3d(-1px, 0, 0);
  }
  
  20%, 80% {
    transform: translate3d(2px, 0, 0);
  }

  30%, 50%, 70% {
    transform: translate3d(-4px, 0, 0);
  }

  40%, 60% {
    transform: translate3d(4px, 0, 0);
  }
}
</style>