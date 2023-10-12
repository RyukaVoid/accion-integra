require('./bootstrap');

window.Vue = require('vue').default;

import vuetify from './vuetify';

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('listar-productos', require('./components/ListarProductos.vue').default);

const app = new Vue({
    el: '#app',
    vuetify
});
