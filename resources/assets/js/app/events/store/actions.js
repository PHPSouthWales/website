import axios from 'axios'

export const getAll = ({ commit, dispatch }) => {
    return axios.get('/api/events').then((response) => {
        commit('setEvents', response.data)
    })
}