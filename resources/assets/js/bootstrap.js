import Vue from 'vue';
import VueRouter from 'vue-router';
import Buefy from 'buefy';
import axios from 'axios';
import Sidebar from './components/Sidebar';
import router from './router';
import store from './store';

Vue.use(Buefy);
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