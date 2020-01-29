import Vue from 'vue';
import VueRouter from 'vue-router';

import App from './components/TodoList';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'app',
            component: App,
        },
    ]
});

export default router;
