import axios from 'axios'

export const getAll = ({ commit, dispatch }) => {
    return axios.get('/api/events').then((response) => {
        commit('setEvents', response.data)
    })
}

export const getOne = ({ commit, dispatch }, { payload }) => {
    return axios.get(`/api/events/${payload.slug}`).then((response) => {
        commit('setEvent', response.data)
    })
}
