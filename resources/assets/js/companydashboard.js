
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

// import VueProgressBar from 'vue-progressbar'
// Vue.use(VueProgressBar, {
//   color: 'rgb(143, 255, 199)',
//   failedColor: 'red',
//   height: '4px'
// })
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.mixin({
//   data: function() {
//     return {
//       globalVar:''
//       }
//     }
// });
Vue.prototype.CompanyDashboardRoute = '/Eitmad5.5/jobs/company/dashboard';
const index = require('./components/Job/CompanyDashboard/indexComponent.vue');
const addJob = require('./components/Job/CompanyDashboard/addjobComponent.vue');
const viewJobs = require('./components/Job/CompanyDashboard/viewjobsComponent.vue');

const routes = [
	{
	path: Vue.prototype.CompanyDashboardRoute,
	component: index
	},
	{
	path: Vue.prototype.CompanyDashboardRoute+'/add-job',
	component: addJob
	},
	{
	path: Vue.prototype.CompanyDashboardRoute+'/all-jobs',
	component: viewJobs
	},
];

const router = new VueRouter({
	mode:'history',
	routes
});

const app = new Vue({
    el: '#CompanyDashboard',
  //    created: function() {
  //   this.CompanyDashboardRoute = "/MyEitmad/jobs/company/dashboard";
  // },
	  // data: {
	  // 		CompanyDashboardRoute : '/MyEitmad/jobs/company/dashboard',
	  // },
    router,
}).$mount('#CompanyDashboard');
// global.app = app;