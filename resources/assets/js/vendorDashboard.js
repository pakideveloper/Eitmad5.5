
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
// import Vuelidate from 'vuelidate'
// Vue.use(Vuelidate)
import Vuelidate from 'vuelidate'



Vue.use(Vuelidate)

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
=======
import Vuelidate from 'vuelidate'
Vue.use(Vuelidate)

Vue.use(VueRouter)
>>>>>>> 6f0095791375845ece0f24c2b42e446e1cbbf3b9

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const index = require('./components/ecom_vendor/dashboard/indexComponent.vue');
const addProduct = require('./components/ecom_vendor/dashboard/addProductComponent.vue');
<<<<<<< HEAD
const viewAllProducts = require('./components/ecom_vendor/dashboard/viewAllProductsComponent.vue');
=======
>>>>>>> 6f0095791375845ece0f24c2b42e446e1cbbf3b9

const routes = [
	{
		path:'/Eitmad5.5/ecommerce/vendor/dashboard',
		component: viewAllProducts,
		meta: {
	      progress: {
	        func: [
	          {call: 'color', modifier: 'temp', argument: 'rgb(143, 255, 199)'},
	          {call: 'fail', modifier: 'temp', argument: '#6e0000'},
	          {call: 'location', modifier: 'temp', argument: 'top'},
	          {call: 'transition', modifier: 'temp', argument: {speed: '1.5s', opacity: '0.6s', termination: 400}}
	        ]
	      }
	    }
	},
	{
		path:'/Eitmad5.5/ecommerce/vendor/add-product',
		component: addProduct,
		meta: {
	      progress: {
	        func: [
	          {call: 'color', modifier: 'temp', argument: 'rgb(143, 255, 199)'},
	          {call: 'fail', modifier: 'temp', argument: '#6e0000'},
	          {call: 'location', modifier: 'temp', argument: 'top'},
	          {call: 'transition', modifier: 'temp', argument: {speed: '1.5s', opacity: '0.6s', termination: 400}}
	        ]
	      }
	    }
	},
<<<<<<< HEAD
	{
		path:'/Eitmad5.5/ecommerce/vendor/products',
		component: viewAllProducts,
		meta: {
	      progress: {
	        func: [
	          {call: 'color', modifier: 'temp', argument: 'rgb(143, 255, 199)'},
	          {call: 'fail', modifier: 'temp', argument: '#6e0000'},
	          {call: 'location', modifier: 'temp', argument: 'top'},
	          {call: 'transition', modifier: 'temp', argument: {speed: '1.5s', opacity: '0.6s', termination: 400}}
	        ]
	      }
	    }
	},
=======
>>>>>>> 6f0095791375845ece0f24c2b42e446e1cbbf3b9
];

const router = new VueRouter({
	mode:'history',
	routes
});

const dashboard_app = new Vue({
    el: '#dashboard_app',
    router,
}).$mount('#dashboard_app')

// global.app = app;