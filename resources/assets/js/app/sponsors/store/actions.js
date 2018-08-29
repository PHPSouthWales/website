import axios from 'axios'

export const getAll = ({ commit, dispatch }) => {
    return axios.get('/api/sponsors').then((response) => {
        commit('setSponsors', response.data)
    })
}

export const getOne = ({ commit, dispatch }, { payload }) => {
    return axios.get(`/api/sponsors/${payload.slug}`).then((response) => {
        commit('setSponsor', response.data)
    })
}
