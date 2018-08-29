import { List } from './../components/'
import { Item } from './../components/'

export default [
    {
        path: '/events',
        component: List,
        name: 'events.index'
    },
    {
        path: '/events/:slug',
        component: Item,
        name: 'events.show'
    }
]
