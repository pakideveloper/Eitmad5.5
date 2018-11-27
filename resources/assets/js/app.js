
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

// Vue.component('examplecomponent', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });
const index = require('./components/ecom_vendor/dashboard/indexComponent.vue');
const userProfile = require('./components/ecommerce/user_dashboard/userProfileComponent.vue');

const routes = [
	{
	path:'/Eitmad5.5/ecommerce/user/dashboard',
	component: test
	},
	{
	path:'/Eitmad5.5/ecommerce/user/profile',
	component: userProfile
	},
];

const router = new VueRouter({
	mode:'history',
	routes
});
// Vue.component('example-component', require('./components/ExampleComponent.vue'));
// const example = require('./components/ExampleComponent.vue');
// const routes = [
// 	{
// 		path: '/example',
// 		component: example
// 	}
// ];

// const router = new VueRouter({
// 	mode:'history',
// 	routes
// })
const app = new Vue({
    el: '#dashboard_app',
    // el: '#company_dashboard_app',
    router,
});
