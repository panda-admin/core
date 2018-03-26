<template>
    <section class="section">
        <ul>
            <li v-for="item in items">{{ item.title }}</li>
        </ul>
    </section>
</template>

<script>
    export default {
        data() {
            return {
                items: []
            }
        },
        mounted() {
            if(this.items .length === 0) {
                this.fetchItems(this.$route.params.contenttype);
            }
        },

        beforeRouteUpdate(to, from, next) {
            this.fetchItems(to.params.contenttype);
            next();
        },

        methods: {
            fetchItems(contenttype) {
                this.$http.get(`/content/${contenttype}`)
                    .then((res) => {
                        this.items = res.data;
                    });
            }
        }
    }
</script>

<style scoped>

</style>