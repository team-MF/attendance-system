
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import Buefy from 'buefy'
import 'buefy/dist/buefy.css'

Vue.use(Buefy)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// common components
Vue.component('header-bar', require('./sample/components/HeaderBar.vue'))
Vue.component('dropdown-btn', require('./sample/components/DropdownBtn.vue'))

// parent components
Vue.component('sample', require('./sample/views/Sample.vue'))

const app = new Vue({
    el: '#app'
});
