
window._ = require('lodash');

window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

window.Vue = require('vue');

const app = new Vue({
    el: '#app',

    data: {
        stores: [
            {
                name: 'Old Farm Market',
                link: 'https://goo.gl/maps/7Pb4QYYaPC62'
            },
            {
                name: 'Shawnigan Coffee and Chocolates'
            },
            {
                name: 'Great Greens'
            },
            {
                name: 'The Root Cellar Village Green Grocer'
            },
            {
                name: 'Red Barn Market, All Locations'
            },
            {
                name: 'Country Grocer, Cobble Hill'
            },
            {
                name: '49th Parallel Grocery, Ladysmith, Cedar, Chemainus'
            },
            {
                name: 'Bridgeland Market, Calgary'
            },
            {
                name: 'West Coast Pantry, Downtown'
            },
            {
                name: 'Tomm\'s Food Village, Bowser'
            },
            {
                name: 'Market on Millstream, West Shore'
            },
            {
                name: 'Market on Yates, Victoria'
            },
            {
                name: 'Niagara Market, James Bay'
            },
            {
                name: 'Sweat Meadows, Mill Bay'
            },
            {
                name: 'The Market Garden, Vic West'
            },
        ] 
    }

});
