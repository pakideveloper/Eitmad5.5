<template>
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <!-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Profile</h1>
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
    </div> -->
    <div class="row basic-info">
        <div class="col-md-3 col-sm-6 profile-image">
          <img   src="http://localhost/Eitmad_my/public/frontend/ecommerce/defaultImages/profile.png">
          <span  id="change_img">Change</span>
          <!-- <input type="file" name="profile-image"> -->
        </div>
        <div class="col-md-4 col-sm-6 basic-info-2">
          <h4 class="name">{{user.first_name}}&nbsp;{{user.last_name}}</h4>
          <p class="email">{{user.email}}</p>
          <p class="gender">{{user.gender}}</p>
          <p class="contact">{{user.contact_number}}</p>          
        </div>
        <div class="col-md-4 col-sm-6 basic-info-3">
          <p class="address">{{user.address}}</p>
          <p class="email">{{user.area}}</p>
          <p class="contact">{{user.city.city_name}}</p>          
        </div>
    </div>
    <k-tabs>
        <!-- <k-tab name="Tab 1" :tags="[{ content:'102002'}]" :selected="true">tab1</k-tab> -->
        <k-tab name="Profile" :selected="true">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
              <span>First Name : </span><span contenteditable="true">{{user.first_name}}</span>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
              <span>Last Name : </span><editable :content="text" @update="text = $event">{{user.last_name}}</editable>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
              <span>Email : </span><span>{{user.email}}</span>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
              <span>Contact :</span><span>{{user.contact_number}}</span>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
              <span>Gender : </span><span>{{user.gender}}</span>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
              <span>CNIC : </span><span>{{user.cnic}}</span>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
              <span>Nationality : </span><span>{{user.nationality}}</span>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
              <span>City :</span><span></span>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
              <span>Area :</span><span></span>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
              <span>Address : </span><span>{{user.address}}</span>
            </div>
            
            
            <div class="col-md-6 col-sm-6 col-xs-6">
              <span>Date Of Birth :</span><span>{{user.date_of_birth}}</span>
            </div>
          </div>
        </k-tab>
        <k-tab name="Company">
          <div class="row">
            <div class="col-md-6">
              <h4>Hush Puppies</h4>
              <p>Hush Puppies is an American internationally marketed brand of contemporary, casual footwear for men, women and children. The shoes have been described as "the classic American brushed-suede shoes with the lightweight crepe sole". A division of Wolverine World Wide, Hush Puppies is headquartered in Rockford, Michigan.</p>
            </div>
          </div>
        </k-tab>
        <k-tab name="Logo">Logo</k-tab>
        <k-tab name="CNIC">CNIC</k-tab>
        <k-tab name="Incharge">Incharge</k-tab>
     </k-tabs>
    <div class="row">
      <div class="col-md-12"></div>
    </div>
    
  </main>
</template>

<script>
  import hasUrl from './hasUrl'
  import Vue from 'vue'
  import KTabs from '@kevindesousa/vue-k-tabs'

Vue.use(KTabs)
    export default {
        mounted() {
          //  [App.vue specific] When App.vue is finish loading finish the progress bar
          this.$Progress.finish()
        },
        data() {
          return {
            user:{},
            first_name:'',           
          };
        },
        
        methods: {
          //here user is vendor
          getUser(){
            axios.get(this.url+'/vendor')
                .then(({ data }) => {
                    this.user = data;
                });
          },
          singleProduct(){
            this.$router.push({ path: 'add-product' })
          },
          // mouseOver(){
          //   $("#change_img").show();
          // },
          //  mouseout(){
          //   $("#change_img").hide();
          // }
          mouseOver: function(){
              this.active = !this.active;   
          }
        },
        created(){
          this.$Progress.start()
          this.getUser()
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
<style type="text/css">
  .name{
    text-transform: capitalize;
  }
  .basic-info{
    padding-top: 17px;
    padding-bottom: 12px;
    background-color: white;
    margin-top: 19px;
    margin-left: 0px;
    margin-right: 0px;
  }
  .profile-image > img {
    border-radius: 113px;
    width: 139px;
  }
  .profile-image > span {
    position: absolute;
    top: 70px;
    left: 70px;
    /* opacity: 0.5; */
    /* background-color: #56585a; */
    width: 139px;
    height: 70px;
    border-bottom-right-radius: 70px;
    border-bottom-left-radius: 70px;
    color: white;
    padding-top: 24px;
    font-size: 16px;
    background-color: rgb(52, 58, 0.);
    background-color: rgba(192,192,192,0.3);
    color: #343a40;
    font-weight: 600;
    cursor: pointer;
      }
  .profile-image{
    text-align: center;
  }
  .basic-info-2{
    padding-top: 25px;
  }
  .basic-info-3{
    padding-top: 25px;
  }
  ul.tabs li[data-v-85c5a11c] {
    padding-left: 31px;
    padding-right: 31px;
  }
  main{
    background-color: #f9f9f9;
  }
  .tabs-details{
    background-color: white;
    padding: 18px;
  }
</style>