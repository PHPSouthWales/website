import axios from 'axios'

export const getAll = ({ commit, dispatch }) => {
    return axios.get('/api/talks').then((response) => {
        commit('setTalks', response.data)
    })
}

export const getOne = ({ commit, dispatch }, { payload }) => {
    return axios.get(`/api/talks/${payload.slug}`).then((response) => {
        commit('setTalk', response.data)
    })
}
