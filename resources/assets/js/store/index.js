import Vue from 'vue'
import Vuex from 'vuex'
import speakers from './../app/speakers/store'
import sponsors from './../app/sponsors/store'

Vue.use(Vuex)

export default new Vuex.Store({
    modules: {
        speakers: speakers,
        sponsors: sponsors
    }
})
