import Vue from 'vue';


global.axios = require('axios');

global.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// global.baseUrl = `${process.env.APP_PUBLIC_URL}`

// global.axios = require('axios');

// global.axios.defaults.headers.common = {
//     // 'X-CSRF-TOKEN': '',
//     'X-Requested-With': 'XMLHttpRequest'
// };

// Fastclick prevents the 300ms touch delay on touch devices
// var attachFastClick = require('fastclick');
// attachFastClick.attach(document.body);

// import Componente1 from './components/componente1';

// Vue.component('componente1', Componente1);


import BlockUI from 'vue-blockui'

Vue.use(BlockUI);


const app = new Vue({
    // delimiters: ['[[', ']]'],
    el: '#app',
    data: {
    },
    methods: {

    }
});