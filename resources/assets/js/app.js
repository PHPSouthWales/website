import Vue from 'vue'
import router from './router'
import store from './store'

Vue.component('app', require('./components/App'))

const app = new Vue({
    el: '#app',
    router,
    store,
    template: `<app />`
});
