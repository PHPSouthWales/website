import Vue from 'vue'
import Router from 'vue-router'
import routes from './../app/routes'

Vue.use(Router)

const router = new Router({
    mode: 'history',
    routes
})

// any beforeEach registrations

export default router
