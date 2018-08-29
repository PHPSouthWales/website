<template>
    <div>
        <ul>
            <li v-for="sponsor in sponsors" :key="sponsor.id">
                <router-link :to="{ name: 'sponsors.show', params: { slug: sponsor.slug } }">
                    {{ sponsor.name }}
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
            sponsors: 'sponsors/get' 
        }),
        mounted() {
            this.get()
        },
        methods: {
            ...mapActions({
                get: 'sponsors/getAll'
            })
        }
    }
</script>
