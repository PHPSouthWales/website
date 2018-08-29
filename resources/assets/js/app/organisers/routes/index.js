import { List } from './../components/'
import { Item } from './../components/'

export default [
    {
        path: '/organisers',
        component: List,
        name: 'organisers.index'
    },
    {
        path: '/organisers/:slug',
        component: Item,
        name: 'organisers.show'
    }
]
