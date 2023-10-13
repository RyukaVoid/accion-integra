require('./bootstrap');

window.Vue = require('vue').default;

import vuetify from './vuetify';
import 'animate.css';

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('listar-productos', require('./components/ListarProductos.vue').default);

const app = new Vue({
    el: '#app',
    vuetify
});
