<template>
    <p>{{ sponsor }}</p>
</template>

<script>
    import { mapGetters } from 'vuex'
    import { mapActions } from 'vuex'

    export default {
        computed: mapGetters({
            sponsor: 'sponsors/one'
        }),
        mounted() {
            this.get({
                payload: this.$route.params
            })
        },
        methods: {
            ...mapActions({
                get: 'sponsors/getOne'
            })
        }
    }
</script>