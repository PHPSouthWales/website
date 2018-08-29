<template>
    <div>
        <ul>
            <li v-for="speaker in speakers" :key="speaker.id">
                {{ speaker.firstname }} {{ speaker.lastname }}
            </li>
        </ul>
    </div>
</template>

<script>
    import { mapGetters } from 'vuex'
    import { mapActions } from 'vuex'

    export default {
        computed: mapGetters({
            speakers: 'speakers/get' 
        }),
        mounted() {
            this.get()
        },
        methods: {
            ...mapActions({
                get: 'speakers/getAll'
            })
        }
    }
</script>
