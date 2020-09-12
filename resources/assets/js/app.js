
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

import Recipes from './components/recipes.vue';
Vue.component('recipes', Recipes);

import ImageViewer from './components/ImageViewer.vue';
Vue.component('image-viewer', ImageViewer);

const app = new Vue({
    el: '#app',

    data: {
        galleryImage: '',
        stores: [
            {
                name: 'Vancouver Island',
                stores: [
                    {
                        name: 'Thrifty Foods, All Locations',
                        link: 'https://www.thriftyfoods.com',
                    },
                    {
                        name: 'Save on Foods, All Locations',
                        link: 'https://www.saveonfoods.com/',
                    },
                    {
                        name: 'Quality Foods, Vancouver Island',
                        link: 'https://www.qualityfoods.com/about-qf/location-hours',
                    },
                    {
                        name: 'Red Barn Market, All Locations',
                        link: 'https://www.google.ca/maps/search/red+barn+market+/@48.4730794,-123.4133658,12.26z',
                    },
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
                        name: 'Country Grocer',
                        link: 'https://www.google.com/maps/search/country+grocer+vancouver+island/@48.806462,-124.0002516,10z/data=!3m1!4b1',
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
                        name: 'Sweet Meadows, Mill Bay',
                        link: 'https://goo.gl/maps/Grs9Zq899fr',
                    },
                    {
                        name: 'The Market Garden, Vic West',
                        link: 'https://goo.gl/maps/9EnzRuHF1eK2',
                    },
                    {
                        name: 'Peppers Foods, Cadboro Bay',
                        link: 'https://goo.gl/maps/1LQahnUXiAv',
                    },
                    {
                        name: 'Discovery Foods, Campbell River',
                        link: 'https://goo.gl/maps/Xm1kJBY7Sbm',
                    },
                    {
                        name: 'Western Foods, Sooke',
                        link: 'https://goo.gl/maps/q9UJM6uS6bG2',
                    },
                    {
                        name: '49th Parallel Grocery, Ladysmith, Cedar, Chemainus',
                        link: 'https://www.google.ca/maps/search/49th+Parallel+Grocery/@48.9465288,-123.9290373,11z/data=!3m1!4b1',
                    },
                ],
            },
            {
                name: 'BC Lower Mainland',
                stores: [
                    {
                        name: 'Save on Foods, All Locations',
                        link: 'https://www.saveonfoods.com/',
                    },
                    {
                        name: 'Safeway',
                        link: 'https://www.safeway.ca/',
                    },
                    {
                        name: 'Fresh Street Market, Lower Mainland',
                        link: 'http://www.freshstmarket.com',
                    },
                    {
                        name: 'Natures Pickens, Abbotsford',
                        link: 'https://goo.gl/maps/z7YtD8NxmqA2',
                    },
                    {
                        name: 'Meinhardt Fine Foods, Downtown Vancouver',
                        link: 'https://goo.gl/maps/GPTnRBeQcXK2',
                    },
                    {
                        name: 'Nourish Market, Lynn Valley Village',
                        link: 'https://goo.gl/maps/bYYvGuqGQQx',
                    },
                ],
            },
            {
                name: 'Alberta',
                stores: [
                    {
                        name: 'Save on Foods, All Locations',
                        link: 'https://www.saveonfoods.com/',
                    },
                    {
                        name: 'Freson Bros, Alberta',
                        link: 'http://freson.com/',
                    },
                ],
            },
            {
                name: 'Saskatchewan',
                stores: [
                    {
                        name: 'Save on Foods, All Locations',
                        link: 'https://www.saveonfoods.com/',
                    },
                ],
            },
            {
                name: 'Manitoba',
                stores: [
                    {
                        name: 'Save on Foods, All Locations',
                        link: 'https://www.saveonfoods.com/',
                    },
                ],
            },
        ] 
    }

});
