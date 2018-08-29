<template>
    <div>
        <ul>
            <li v-for="event in events" :key="event.id">
                <router-link :to="{ name: 'events.show', params: { slug: event.slug } }">
                    {{ event.title }}
                </router-link>
            </li>
        </ul>
    </div>
</template>

<script>
    import { mapGetters } from 'vuex'
    import { mapActions } from 'vuex'

    export default {
        computed: mapGetters({
            events: 'events/get' 
        }),
        mounted() {
            this.get()
        },
        methods: {
            ...mapActions({
                get: 'events/getAll'
            })
        }
    }
</script>
