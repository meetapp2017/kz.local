import './bootstrap';
window.Vue = require('vue').default;

Vue.component('home-page', require('./components/home.vue').default);
Vue.component('login-page', require('./components/login.vue').default);
Vue.component('register-page', require('./components/register.vue').default);

const app = new Vue({
    el: '#app',
});

