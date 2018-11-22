
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'

Vue.use(VueRouter)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const index = require('./components/job_b/dashboard/candidate/indexComponent.vue');
const createCv = require('./components/job_b/dashboard/candidate/createCvComponent.vue');
const editcv = require('./components/job_b/dashboard/candidate/editCvComponent.vue');

const routes = [
	{
	path:'/Eitmad5.5/jobs/candidate/dashboard',
	component: index
	},
	{
	path:'/Eitmad5.5/jobs/candidate/createCv',
	component: createCv
	},
	{
	path:'/Eitmad5.5/jobs/candidate/editCv',
	component: editcv
	},
];

const router = new VueRouter({
	mode:'history',
	routes
});

const app = new Vue({
    el: '#candidate_dashboard_app',
    router,
});
global.app = app;