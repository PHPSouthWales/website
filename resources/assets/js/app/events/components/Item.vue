<template>
    <p>{{ event }}</p>
</template>

<script>
    import { mapGetters } from 'vuex'
    import { mapActions } from 'vuex'

    export default {
        computed: mapGetters({
            event: 'events/one'
        }),
        mounted() {
            this.get({
                payload: this.$route.params
            })
        },
        methods: {
            ...mapActions({
                get: 'events/getOne'
            })
        }
    }
</script>