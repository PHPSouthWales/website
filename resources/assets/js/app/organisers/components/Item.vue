<template>
    <p>{{ organiser }}</p>
</template>

<script>
    import { mapGetters } from 'vuex'
    import { mapActions } from 'vuex'

    export default {
        computed: mapGetters({
            organiser: 'organisers/one'
        }),
        mounted() {
            this.get({
                payload: this.$route.params
            })
        },
        methods: {
            ...mapActions({
                get: 'organisers/getOne'
            })
        }
    }
</script>