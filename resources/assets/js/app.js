
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
                name: 'Fresh Street Market, Lower Mainland',
                link: 'http://www.freshstmarket.com/',
            },
            {
                name: 'Quality Foods, Vancouver Island',
                link: 'https://www.qualityfoods.com/about-qf/location-hours',
            },
            {
                name: 'Freason Bros, Alberta',
                link: 'http://freson.com/',
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
            {
                name: 'Peppers Foods, Cadboro Bay',
                link: 'https://goo.gl/maps/1LQahnUXiAv',
            },
            {
                name: 'Hopcott Premium Meats, Pitt Meadows',
                link: 'https://goo.gl/maps/wP8WCCFpCJN2',
            },
            {
                name: 'Natures Pickens, Abbotsford',
                link: 'https://goo.gl/maps/z7YtD8NxmqA2',
            },
            {
                name: 'L & D Meats and Deli, Kelowna',
                link: 'https://goo.gl/maps/qyzNZFvpNV72',
            },
            {
                name: 'Meinhardt Fine Foods, Downtown Vancouver',
                link: 'https://goo.gl/maps/GPTnRBeQcXK2',
            },
            {
                name: 'Nourish Market, Lynn Valley Village',
                link: 'https://goo.gl/maps/bYYvGuqGQQx',
            },
            {
                name: 'Birdcage Confectionary, Victoria',
                link: 'https://goo.gl/maps/KzmxZuijuFz',
            },
            {
                name: 'Bruce\'s Country Market, Albion',
                link: 'https://goo.gl/maps/CsrN9odEfeR2',
            },
            {
                name: 'Discovery Foods Willow Point, Campbell River',
                link: 'https://goo.gl/maps/Xm1kJBY7Sbm',
            },
            {
                name: 'The Fernwood Inn, Victoria',
                link: 'https://goo.gl/maps/JKZ8x6aZj652',
            },
            {
                name: 'Lee\'s Market, Fort Langley',
                link: 'https://goo.gl/maps/98hz6N1fEkS2',
            },
            {
                name: 'Sunshine Market, Vancouver',
                link: 'https://goo.gl/maps/J2EAzYwMLh22',
            },
            {
                name: 'Salt Spring Mercantile, Fulford Harbour',
                link: 'https://goo.gl/maps/5Lj6jJ9swxP2',
            },
            {
                name: 'Salt Spring Mercantil, Salt Spring Islande',
                link: 'https://goo.gl/maps/5Lj6jJ9swxP2',
            },
            {
                name: 'Western Foods, Sooke',
                link: 'https://goo.gl/maps/q9UJM6uS6bG2',
            },
            {
                name: 'Daystar Market, Galiano',
                link: 'https://goo.gl/maps/tFgLxAUYyUr',
            },
            {
                name: 'Weinberg\'s Good Food, Denman Island',
                link: 'https://goo.gl/maps/tFgLxAUYyUr',
            },
            {
                name: 'Grove Hall Farm, Italian Kitchen, Market & Deli, Duncan',
                link: 'https://goo.gl/maps/jyxmPAqSNvB2',
            },
            {
                name: 'The Whistler Grocery Store, Whistler',
                link: 'https://goo.gl/maps/kwf6Auja3XG2',
            },
        ] 
    }

});
