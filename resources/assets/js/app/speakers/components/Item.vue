<template>
    <p>{{ speaker }}</p>
</template>

<script>
    import { mapGetters } from 'vuex'
    import { mapActions } from 'vuex'

    export default {
        computed: mapGetters({
            speaker: 'speakers/one'
        }),
        mounted() {
            this.get({
                payload: this.$route.params
            })
        },
        methods: {
            ...mapActions({
                get: 'speakers/getOne'
            })
        }
    }
</script>