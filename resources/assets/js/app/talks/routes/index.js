import { List } from './../components/'
import { Item } from './../components/'

export default [
    {
        path: '/talks',
        component: List,
        name: 'talks.index'
    },
    {
        path: '/talks/:slug',
        component: Item,
        name: 'talks.show'
    }
]
