require('./bootstrap');

window.Vue = require('vue');
import store from './store/index';
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import rate from 'vue-rate'
import 'vue-rate/dist/vue-rate.css'
import Vue from 'vue'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
Vue.use(rate)
Vue.use(ElementUI);



Vue.component('create-post', require('./components/CreatePost.vue').default);
Vue.component('all-posts', require('./components/AllPosts.vue').default);
Vue.component('about-web', require('./components/About.vue').default);
Vue.component('panduan-web', require('./components/Panduan.vue').default);

const app = new Vue({
    store,
    el: '#app',
    
   
      
});
