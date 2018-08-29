import Vue from 'vue'
import Vuex from 'vuex'
import speakers from './../app/speakers/store'

Vue.use(Vuex)

export default new Vuex.Store({
    modules: {
        speakers: speakers
    }
})
