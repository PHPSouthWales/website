import { List } from './../components/'
import { Item } from './../components/'

export default [
    {
        path: '/sponsors',
        component: List,
        name: 'sponsors.index'
    },
    {
        path: '/sponsors/:slug',
        component: Item,
        name: 'sponsors.show'
    }
]
