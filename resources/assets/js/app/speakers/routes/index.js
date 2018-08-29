import { List } from './../components/'
import { Item } from './../components/'

export default [
    {
        path: '/speakers',
        component: List,
        name: 'speakers.index'
    },
    {
        path: '/speakers/:slug',
        component: Item,
        name: 'speakers.show'
    }
]
