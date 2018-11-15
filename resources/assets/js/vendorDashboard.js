
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
import Vuelidate from 'vuelidate'
Vue.use(Vuelidate)

Vue.use(VueRouter)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const index = require('./components/ecom_vendor/dashboard/indexComponent.vue');
const addProduct = require('./components/ecom_vendor/dashboard/addProductComponent.vue');

const routes = [
	{
	path:'/Eitmad5.5/ecommerce/vendor/dashboard',
	component: index
	},
	{
	path:'/Eitmad5.5/ecommerce/vendor/add-product',
	component: addProducttt
	},

	path:'/Eitmad5.5/ecommerce/vendor/add-product',
	component: addProducttt
	},
];

const router = new VueRouter({
	mode:'history',
	routes
});

const app = new Vue({
    el: '#dashboard_app',
    router,
});
global.app = app;