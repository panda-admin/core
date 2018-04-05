<template>
    <section class="section">
        Dashboard

        <ul>
            <li v-for="field in form.fields">
                <component :is="field.component"></component>
            </li>
        </ul>
    </section>
</template>

<script>
    export default {
        data() {
            return {
                form: {}
            }
        },
        mounted() {
            this.$http.get('/contenttypes/articles').then((res) => this.form = res.data);
        }
    }
</script>

<style scoped>

</style>