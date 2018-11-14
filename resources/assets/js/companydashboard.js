
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

Vue.mixin({
  data: function() {
    return {
      globalVar:''
      }
    }
});

const index = require('./components/Job/CompanyDashboard/indexComponent.vue');
const addJob = require('./components/Job/CompanyDashboard/testComponent.vue');

const routes = [
	{
	path:'/Eitmad5.5/jobs/company/dashboard',
	component: index
	},
	{
	path:'/Eitmad5.5/jobs/company/add-job',
	component: addJob
	},
];

const router = new VueRouter({
	mode:'history',
	routes
});

const app = new Vue({
    el: '#CompanyDashboard',
     created: function() {
    this.globalVar = "/Eitmad5.5/jobs/company/dashboard";
  },
    router,
});
global.app = app;