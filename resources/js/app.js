/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

require('./vendor/modernizr-3.5.0.min');
require('./vendor/jquery-1.12.4.min');
require('./popper.min');
require('./bootstrap.min');
require('./jquery.slicknav.min');
require('./owl.carousel.min');
require('./slick.min');
require('./wow.min');
require('./animated.headline');
require('./jquery.magnific-popup');
require('./jquery.nice-select.min');
require('./jquery.sticky');
require('./contact');
require('./jquery.form');
require('./jquery.validate.min');
require('./mail-script');
require('./jquery.ajaxchimp.min');
require('./plugins');
require('./main');

// global.$=global.jQuery=require('./jquery-1.12.4.min');

window.Vue = require('vue');

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

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
