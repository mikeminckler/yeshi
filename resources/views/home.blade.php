@extends ('layouts.app')
@section ('title', 'Home')
@section ('bg', 'bowl')

@section ('content')

    <div class="banner-content">
        <div class="banner-text banner-text-logo">
            <div class="home-logo">
                <div class="home-logo-image">
                    <img src="/images/yeshi_logo.png" class="home-logo">
                </div>
                <div class="slogan">Try It On Everything</div>
            </div>
        </div>
        <div class="banner-bg banner-bg-logo"></div>
        <div class="banner-image"><img src="/images/banner2.jpg" class="banner-image"></div>
    </div>

    <div class="content-area">

        <div class="section">
            <h1>For Any Diet</h1>
            <p>        
    Yeshi is a nutritional yeast based dressing that's fit for gluten free and vegetarian diets. Slightly sweet and creamy, with the subtle flavour of garlic complimented by a cheesy nutty undertone, there's a Yeshi flavour for every dish.
            </p>
            <div class="grid">
                <div class="list-item" v-for="label in [
                    'Gluten Free',
                    'Keto Friendly',
                    'Dairy Free',
                    'Nut Free',
                    'Egg Free',
                    'Low in Sugar',
                    'Complete Protein',
                    'Low Cholesterol',
                    'High in B Vitamins',
                ]">
                    <div class="list-icon"><i class="fas fa-check"></i></div>
                    <div class="list-name">@{{ label }}</div>
                </div>
            </div>

            <div class="button-container">
                <div class="button">
                    <a href="https://my-site-108684-102215.square.site/" target="_blank">Buy Online Now</a>
                </div>
            </div>

        </div>

    </div>

    <div class="banner-content short-banner">
        <div class="banner-text">
            <div class="banner-link-container">
                <div><a class="banner-link" href="/recipes">Recipes</a></div>
                <div class="banner-text-icon">
                    <a class="banner-link" href="/recipes">
                        <i class="fas fa-arrow-alt-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="banner-bg"></div>
        <div class="banner-image"><img src="/images/bowl.jpg" class="banner-image"></div>
    </div>


    <div class="content-area">

        <div class="section">

            <h1>Where To Buy</h1>
            <p class="center">Yeshi Dressing can be found in these local stores</p>

            <div class="" v-for="region in stores">

                <h3>@{{ region.name }}</h3>

                <div class="grid stores">
                    <div class="list-item" v-for="store in region.stores">
                        <div class="list-icon">
                            <a :href="store.link" target="_blank"><i class="fas fa-map-marker-alt"></i></a>
                        </div>
                        <div class="list-name"><a :href="store.link" target="_blank">@{{ store.name }}</a></div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="content-area">
        <div class="section">
            <h1>Flavours</h1>
        </div>
    </div>

    <div class="banner-content padded original">
        <div class="banner-text flavours">

            <div class="flex-1">
                <h2>Original</h2>
                <div class="grid ideas">
                    <div class="list-item" v-for="label in [
                        'Green Salad',
                        'Eggs',
                        'Raw Veggies',
                        'Sandwich',
                        'Wraps',
                        'French Fries',
                        'Pizza'
                    ]">
                        <div class="list-icon"><i class="fas fa-check"></i></div>
                        <div class="list-name">@{{ label }}</div>
                    </div>
                </div>
                <div class="py-4"><a href="/ingredients/original">Ingredients</a></div>
            </div>
            <div class="inset-image"><img src="/images/original2.jpg" class="inset-image rounded"></div>
        </div>
        <div class="banner-bg"></div>
        <div class="banner-image"><img src="/images/egg.jpg" class="banner-image"></div>
    </div>

    <div class="banner-content padded ginger">
        <div class="banner-text flavours">

            <div class="flex-1">
                <h2>Ginger Sesame</h2>
                <div class="grid ideas">
                    <div class="list-item" v-for="label in [
                        'Rice',
                        'Sushi',
                        'Stirfry',
                        'Salmon',
                        'Noodles',
                    ]">
                        <div class="list-icon"><i class="fas fa-check"></i></div>
                        <div class="list-name">@{{ label }}</div>
                    </div>
                </div>
                <div class="py-4"><a href="/ingredients/ginger">Ingredients</a></div>
            </div>

            <div class="inset-image"><img src="/images/ginger2.jpg" class="inset-image rounded"></div>
        </div>
        <div class="banner-bg"></div>
        <div class="banner-image"><img src="/images/sushi.jpg" class="banner-image"></div>
    </div>

    <div class="banner-content padded chili">
        <div class="banner-text flavours">

            <div class="flex-1">
                <h2>Mild Chili</h2>
                <div class="grid ideas">
                    <div class="list-item" v-for="label in [
                        'Beef',
                        'Chicken',
                        'Seafood',
                        'Marinade'
                    ]">
                        <div class="list-icon"><i class="fas fa-check"></i></div>
                        <div class="list-name">@{{ label }}</div>
                    </div>
                </div>
                <div class="py-4"><a href="/ingredients/chili">Ingredients</a></div>
            </div>

            <div class="inset-image"><img src="/images/chili2.jpg" class="inset-image rounded"></div>
        </div>
        <div class="banner-bg"></div>
        <div class="banner-image"><img src="/images/shrimp.jpg" class="banner-image"></div>
    </div>

    <div class="banner-content padded chipotle">
        <div class="banner-text flavours">

            <div class="flex-1">
                <h2>Smokey Chipotle</h2>
                <div class="grid ideas">
                    <div class="list-item" v-for="label in [
                        'Bean Salad',
                        'Ribs',
                        'Wings',
                        'Burgers',
                        'Tacos',
                    ]">
                        <div class="list-icon"><i class="fas fa-check"></i></div>
                        <div class="list-name">@{{ label }}</div>
                    </div>
                </div>
                <div class="py-4"><a href="/ingredients/chipotle">Ingredients</a></div>
            </div>

            <div class="inset-image"><img src="/images/chipotle.jpg" class="inset-image rounded"></div>
        </div>
        <div class="banner-bg"></div>
        <div class="banner-image"><img src="/images/bean_salad.jpg" class="banner-image"></div>
    </div>

    <div class="banner-content padded caesar">
        <div class="banner-text flavours">

            <div class="flex-1">
                <h2>Caesar</h2>
                <div class="grid ideas">
                    <div class="list-item" v-for="label in [
                        'Salad',
                        'Chicken Wrap',
                        'Tofu', 
                        'Marinated Chicken',
                    ]">
                        <div class="list-icon"><i class="fas fa-check"></i></div>
                        <div class="list-name">@{{ label }}</div>
                    </div>
                </div>
                <div class="py-4"><a href="/ingredients/caesar">Ingredients</a></div>
            </div>

            <div class="inset-image"><img src="/images/caesar.jpg" class="inset-image rounded"></div>
        </div>
        <div class="banner-bg"></div>
        <div class="banner-image"><img src="/images/salad.jpg" class="banner-image"></div>
    </div>

    <div class="gallery">
            
        <div class="image" v-for="image in [
            'sushi2',
            'burger',
            'bowl2',
            'ribs',
            'wings',
            'bean_salad',
            'salad',
            'sushi',
            'stirfry',
            'egg',
            'steak',
            'bowl',
            'shrimp',
        ]">
            <img @click="galleryImage = image" :src="'/images/gallery/' + image + '.jpg'">
        </div>

    </div>

    <image-viewer :image="galleryImage"></image-viewer>

@endsection
