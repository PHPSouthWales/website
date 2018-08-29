import axios from 'axios'

export const getAll = ({ commit, dispatch }) => {
    return axios.get('/api/speakers').then((response) => {
        commit('setSpeakers', response.data)
    })
}

export const getOne = ({ commit, dispatch }, { payload }) => {
    return axios.get(`/api/speakers/${payload.slug}`).then((response) => {
        commit('setSpeaker', response.data)
    })
}