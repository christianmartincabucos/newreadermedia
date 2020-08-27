
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
// import 'ckeditor/ckeditor';

window.Vue = require('vue');
import VueIziToast from "vue-izitoast";
import "izitoast/dist/css/iziToast.min.css";
import DataTable from "laravel-vue-datatable";

Vue.use(DataTable);
Vue.use(VueIziToast);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('form-blog', require('./components/CreateBlog.vue'));
Vue.component('approve-blog', require('./components/ApprovePost.vue'));
Vue.component('show-media', require('./components/ShowMedia.vue'));
Vue.component("show-nmagazine", require("./components/ShowNmagazine.vue"));
Vue.component("show-reviews", require("./components/ShowReviews.vue"));
Vue.component("show-writing", require("./components/ShowWriting.vue"));
Vue.component("status-reference", require("./components/StatusReference.vue"));

Vue.config.productionTip = false;

const app = new Vue({
    el: '#app'
});
