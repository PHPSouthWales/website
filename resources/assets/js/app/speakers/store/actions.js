import axios from 'axios'

export const getAll = ({ commit, dispatch }) => {
    return axios.get('/api/speakers').then((response) => {
        commit('setSpeakers', response.data)
    })
}