import axios from 'axios'

export const getAll = ({ commit, dispatch }) => {
    return axios.get('/api/sponsors').then((response) => {
        commit('setSponsors', response.data)
    })
}