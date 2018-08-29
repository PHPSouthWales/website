import Vue from 'vue'
import Vuex from 'vuex'
import talks from './../app/talks/store'
import events from './../app/events/store'
import speakers from './../app/speakers/store'
import sponsors from './../app/sponsors/store'
import organisers from './../app/organisers/store'

Vue.use(Vuex)

export default new Vuex.Store({
    modules: {
        talks: talks,
        events: events,
        speakers: speakers,
        sponsors: sponsors,
        organisers: organisers
    }
})
