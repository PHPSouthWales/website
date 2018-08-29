<template>
    <p>{{ talk }}</p>
</template>

<script>
    import { mapGetters } from 'vuex'
    import { mapActions } from 'vuex'

    export default {
        computed: mapGetters({
            talk: 'talks/one'
        }),
        mounted() {
            this.get({
                payload: this.$route.params
            })
        },
        methods: {
            ...mapActions({
                get: 'talks/getOne'
            })
        }
    }
</script>