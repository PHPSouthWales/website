import axios from 'axios'

export const getAll = ({ commit, dispatch }) => {
    return axios.get('/api/organisers').then((response) => {
        commit('setOrganisers', response.data)
    })
}

export const getOne = ({ commit, dispatch }, { payload }) => {
    return axios.get(`/api/organisers/${payload.slug}`).then((response) => {
        commit('setOrganiser', response.data)
    })
}
