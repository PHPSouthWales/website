<template>
    <div>
        <ul>
            <li v-for="talk in talks" :key="talk.id">
                {{ talk.title }}
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
