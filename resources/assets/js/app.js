
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

Vue.component('recipes', require('./components/recipes.vue'));

const app = new Vue({
    el: '#app',

    data: {
        stores: [
            {
                name: 'Old Farm Market',
                link: 'https://goo.gl/maps/7Pb4QYYaPC62',
            },
            {
                name: 'Shawnigan Coffee and Chocolates',
                link: 'https://goo.gl/maps/Pxp3wjgdoxp',
            },
            {
                name: 'Great Greens',
                link: 'https://goo.gl/maps/TMnDCMjgwg72',
            },
            {
                name: 'The Root Cellar Village Green Grocer',
                link: 'https://goo.gl/maps/eGmCSPRhiZF2',
            },
            {
                name: 'Red Barn Market, All Locations',
                link: 'https://www.google.ca/maps/search/Red+Barn+Markets/@48.4723271,-123.3870522,13z/data=!3m1!4b1',
            },
            {
                name: 'Country Grocer, Cobble Hill',
                link: 'https://goo.gl/maps/wjLTBXw7aNx',
            },
            {
                name: '49th Parallel Grocery, Ladysmith, Cedar, Chemainus',
                link: 'https://www.google.ca/maps/search/49th+Parallel+Grocery/@48.9465288,-123.9290373,11z/data=!3m1!4b1',
            },
            {
                name: 'Bridgeland Market, Calgary',
                link: 'https://goo.gl/maps/u28vPs32pmH2',
            },
            {
                name: 'West Coast Pantry, Downtown Victoria',
                link: 'https://goo.gl/maps/68JgTXfkfTu',
            },
            {
                name: 'Tomm\'s Food Village, Bowser',
                link: 'https://goo.gl/maps/XPHWRKUJ1ru',
            },
            {
                name: 'Market on Millstream, West Shore',
                link: 'https://goo.gl/maps/G59dGTM5Si62',
            },
            {
                name: 'Market on Yates, Victoria',
                link: 'https://goo.gl/maps/Ro4qjNGH3vC2',
            },
            {
                name: 'Niagara Market, James Bay',
                link: 'https://goo.gl/maps/8z7cfAab1Bk',
            },
            {
                name: 'Sweat Meadows, Mill Bay',
                link: 'https://goo.gl/maps/Grs9Zq899fr',
            },
            {
                name: 'The Market Garden, Vic West',
                link: 'https://goo.gl/maps/9EnzRuHF1eK2',
            },
        ] 
    }

});
