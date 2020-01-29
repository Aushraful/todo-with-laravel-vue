
require('./bootstrap');

window.Vue = require('vue');

import AppRoutes from './routes';

window.eventBus = new Vue();

const app = new Vue({
    router: AppRoutes,
    el: '#app',
    render: h=> h(App),
});
