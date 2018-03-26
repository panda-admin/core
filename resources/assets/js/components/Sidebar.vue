<template>
    <section class="section">
        <aside class="menu">
            <p class="menu-label">
                General
            </p>
            <ul class="menu-list">
                <li>
                    <router-link to="/">Dashboard</router-link>
                </li>
                <li>
                    <router-link to="/content">Content</router-link>
                </li>
            </ul>

            <p class="menu-label">
                Content
            </p>

            <ul class="menu-list">
                <li v-for="(item, key) in store.contenttypes">
                    <router-link :to="`/content/${key}`">{{ item.label }}</router-link>
                </li>
            </ul>
        </aside>
    </section>
</template>

<script>
    export default {
        data() {
            return {
                store: window.Store.Sidebar
            }
        },
        mounted() {
            this.$http.get('/content/types').then((res) => this.store.contenttypes = res.data);
        }
    }
</script>

<style scoped>

</style>