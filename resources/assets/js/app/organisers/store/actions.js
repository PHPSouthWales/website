import axios from 'axios'

export const getAll = ({ commit, dispatch }) => {
    return axios.get('/api/organisers').then((response) => {
        commit('setOrganisers', response.data)
    })
}