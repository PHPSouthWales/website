<template>
    <div>
        <ul>
            <li v-for="talk in talks" :key="talk.id">
                <router-link :to="{ name: 'talks.show', params: { slug: talk.slug } }">
                    {{ talk.title }}
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
            talks: 'talks/get' 
        }),
        mounted() {
            this.get()
        },
        methods: {
            ...mapActions({
                get: 'talks/getAll'
            })
        }
    }
</script>
