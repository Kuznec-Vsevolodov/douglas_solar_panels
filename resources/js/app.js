/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import PrimeVue from 'primevue/config';
import Vue from 'vue';


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('view-user-model-component', require('./components/ModelUserViewComponent.vue').default);
Vue.component('view-admin-model-component', require('./components/ModelAdminViewComponent.vue').default);
Vue.component('view-user-list-component', require('./components/UsersListComponent.vue').default);
Vue.component('user-edit-component', require('./components/UserEditComponent.vue').default);
Vue.component('model-edit-component', require('./components/ModelEditComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.use(PrimeVue);
const app = new Vue({
    el: '#app',
});
