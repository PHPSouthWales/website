<template>
    <div>
        <ul>
            <li v-for="sponsor in sponsors" :key="sponsor.id">
                {{ sponsor.name }}
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
