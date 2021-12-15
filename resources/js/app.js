require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

import './bootstrap'
import Vue from 'vue';
import Vuetify from './plugins/vuetify'

import ExampleComponent from './components/ExampleComponent.vue'

const app = new Vue({
    el: '#app',
    vuetify: Vuetify,
    data: {
        message: "HelloWorld",
    },
    methods: {
        reverseMessage: function() {
            this.message = this.message.split('').reverse().join('')
        }
    }
});
