<template>
    <div>
        <ul>
            <li v-for="organiser in organisers" :key="organiser.id">
                <router-link :to="{ name: 'organisers.show', params: { slug: organiser.slug } }">
                    {{ organiser.firstname }} {{ organiser.lastname }}
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
            organisers: 'organisers/get' 
        }),
        mounted() {
            this.get()
        },
        methods: {
            ...mapActions({
                get: 'organisers/getAll'
            })
        }
    }
</script>
