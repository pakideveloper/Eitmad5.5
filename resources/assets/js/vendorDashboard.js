
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
<<<<<<< HEAD
// import Vuelidate from 'vuelidate'
// Vue.use(Vuelidate)
=======
import Vuelidate from 'vuelidate'



Vue.use(Vuelidate)
>>>>>>> 235404c9a4cd31d747a953ffaddea3ba6df071c7

Vue.use(VueRouter)
import VueProgressBar from 'vue-progressbar'
// const options = {
//   color: '#bffaf3',
//   failedColor: '#874b4b',
//   thickness: '5px',
//   transition: {
//     speed: '0.2s',
//     opacity: '0.6s',
//     termination: 300
//   },
//   autoRevert: true,
//   location: 'left',
//   inverse: false
// }
Vue.use(VueProgressBar, {
  color: 'rgb(143, 255, 199)',
  failedColor: 'red',
  height: '4px'
})

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const index = require('./components/ecom_vendor/dashboard/indexComponent.vue');
const addProduct = require('./components/ecom_vendor/dashboard/addProductComponent.vue');
const viewAllProducts = require('./components/ecom_vendor/dashboard/viewAllProductsComponent.vue');

const routes = [
	{
		path:'/Eitmad5.5/ecommerce/vendor/dashboard',
		component: index,
		meta: {
	      progress: {
	        func: [
	          {call: 'color', modifier: 'temp', argument: '#ffb000'},
	          {call: 'fail', modifier: 'temp', argument: '#6e0000'},
	          {call: 'location', modifier: 'temp', argument: 'top'},
	          {call: 'transition', modifier: 'temp', argument: {speed: '1.5s', opacity: '0.6s', termination: 400}}
	        ]
	      }
	    }
	},
	{
	path:'/Eitmad5.5/ecommerce/vendor/add-product',
	component: addProduct
	},
	{
		path:'/Eitmad5.5/ecommerce/vendor/products',
		component: viewAllProducts,
		meta: {
	      progress: {
	        func: [
	          {call: 'color', modifier: 'temp', argument: '#ffb000'},
	          {call: 'fail', modifier: 'temp', argument: '#6e0000'},
	          {call: 'location', modifier: 'temp', argument: 'top'},
	          {call: 'transition', modifier: 'temp', argument: {speed: '1.5s', opacity: '0.6s', termination: 400}}
	        ]
	      }
	    }
	},
];

const router = new VueRouter({
	mode:'history',
	routes
});

const dashboard_app = new Vue({
    el: '#dashboard_app',
    router,
<<<<<<< HEAD
});
global.app = app;
=======
}).$mount('#dashboard_app')

// global.app = app;
>>>>>>> 235404c9a4cd31d747a953ffaddea3ba6df071c7
