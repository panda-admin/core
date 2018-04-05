import Vue from 'vue';
import VueRouter from 'vue-router';
import Element from 'element-ui';
import axios from 'axios';
import Sidebar from './components/Sidebar';
import router from './router';
import store from './store';

Vue.use(Element);
Vue.use(VueRouter);

Vue.component('sidebar-component', Sidebar);

window.Store = store;

Vue.prototype.$http = axios.create({
    baseURL: '/admin'
});

const App = new Vue({
    el: '#app',
    router
});