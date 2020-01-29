
require('./bootstrap');

window.Vue = require('vue');

import {store} from './store';
import AppRoutes from './routes';
import App from './components/TodoList';

window.eventBus = new Vue();

const app = new Vue({
    router: AppRoutes,
    el: '#app',
    store: store,
    render: h=> h(App),
});
