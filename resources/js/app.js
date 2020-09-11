require('./bootstrap');


window.Vue = require('vue');
 
import App from './App.vue';
import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import axios from 'axios';
import {routes} from './routes';
 
Vue.use(VueRouter);
Vue.use(VueAxios, axios);

import Navbar from './components/includes/Navbar.vue';
import Sidebar from './components/includes/Sidebar.vue';
import Footer from './components/includes/Footer.vue';

Vue.component('admin_header', Navbar);
Vue.component('admin_footer', Footer);
Vue.component('admin_sidebar', Sidebar);



 
const router = new VueRouter({
    mode: 'history',
    routes: routes
});
 
const app = new Vue({
    el: '#app',
    router: router,
    render: app => app(App),
});