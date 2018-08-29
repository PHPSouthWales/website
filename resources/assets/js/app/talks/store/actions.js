import axios from 'axios'

export const getAll = ({ commit, dispatch }) => {
    return axios.get('/api/talks').then((response) => {
        commit('setTalks', response.data)
    })
}