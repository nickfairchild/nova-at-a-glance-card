<template>
    <card class="flex flex-col">
        <div class="px-3 py-3">
            <h1 class="text-2xl text-80 font-light">At A Glance</h1>
        </div>
        <div class="flex flex-wrap px-3 pb-3 w-full">
            <div class="w-1/2 pb-2" v-for="resource in resources" :key="resource">
                <router-link
                    :to="`/resources/${resource.uri}`"
                    class="no-underline font-bold dim text-primary"
                >
                    {{ resource.count }} {{ resource.label }}
                </router-link>
            </div>
        </div>
    </card>
</template>

<script>
export default {
    props: ['card'],

    data() {
        return {
            resources: {}
        }
    },

    mounted() {
        this.load()
    },

    methods: {
        load() {
            Nova.request().get('/nova-vendor/at-a-glance/resources', {
                params: {
                    excludes:   this.card.excludes
                }
            })
                .then(response => this.resources = response.data)
        }
    },

    filters: {
        title: function (value, count) {
            if (!value) return ''

            value = value.toString().charAt(0).toUpperCase() + value.slice(1)

            if (count != 1) return value

            return value.slice(0, -1)
        }
    }
}
</script>
