import VueRouter from 'vue-router';
import DashboardPage from './components/pages/DashboardPage';
import ContentList from './components/content/ContentList';

export default new VueRouter({
    routes: [
        {
            path: '/',
            component: DashboardPage
        },
        {
            path: '/content/:contenttype',
            component: ContentList
        }
    ]
});