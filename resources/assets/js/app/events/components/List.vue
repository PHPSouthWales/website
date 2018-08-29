<template>
    <div>
        <ul>
            <li v-for="event in events" :key="event.id">
                {{ event.title }}
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
