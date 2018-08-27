@extends ('layouts.app')
@section ('title', 'Home')
@section ('bg', 'bowl')

@section ('content')

    <div class="banner-content">
        <div class="banner-text home-logo">
            <div class="home-logo-image">
                <img src="/images/logo_white.png" class="home-logo">
            </div>
            <div class="slogan">Try It On Everything</div>
        </div>
        <div class="banner-image"><img src="/images/banner.jpg" class="banner-image"></div>
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

        </div>

    </div>

    <div class="banner-content">
        <div class="banner-text">
            <div class="banner-link-container">
                <div class="banner-text-icon"><a class="banner-link" href="/recipes"><i class="fas fa-clipboard-list"></i></a></div>
                <div><a class="banner-link" href="/recipes">Recipes...</a></div>
            </div>
        </div>
        <div class="banner-image"><img src="/images/bowl.jpg" class="banner-image"></div>
    </div>


    <div class="content-area">

        <div class="section">

            <h1>Where To Buy</h1>
            <p>Yeshi Dressing can be found in these local stores</p>

            <div class="flexbox">

                <div class="grid stores">

                    <div class="list-item" v-for="store in stores">
                        <div class="list-icon">
                            <a :href="store.link" target="_blank"><i class="fas fa-map-marker-alt"></i></a>
                        </div>
                        <div class="list-name">@{{ store.name }}</div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="content-area">

        <div class="section">
            <h1>Flavours</h1>
        </div>

            <div class="banner-content padded original">
                <div class="banner-text flex-column flex-start">
                    <h2>Original</h2>
                    <div class="grid">
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

                </div>
                <div class="banner-image"><img src="/images/bowl.jpg" class="banner-image"></div>
                <div class="inset-image"><img src="/images/original.jpg" class="inset-image rounded"></div>
            </div>

            <div class="banner-content padded ginger">
                <div class="banner-text flex-column flex-start">
                    <h2>Ginger Sesame</h2>
                    <div class="grid">
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

                </div>
                <div class="banner-image"><img src="/images/bowl.jpg" class="banner-image"></div>
                <div class="inset-image"><img src="/images/ginger.jpg" class="inset-image rounded"></div>
            </div>

            <div class="banner-content padded chili">
                <div class="banner-text flex-column flex-start">
                    <h2>Chili</h2>
                    <div class="grid">
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

                </div>
                <div class="banner-image"><img src="/images/bowl.jpg" class="banner-image"></div>
                <div class="inset-image"><img src="/images/chili.jpg" class="inset-image rounded"></div>
            </div>

    </div>


    <div class="gallery">

        <div class="image"><img src="/images/gallery/salad.jpg"></div>
        <div class="image"><img src="/images/gallery/sushi.jpg"></div>
        <div class="image"><img src="/images/gallery/stirfry.jpg"></div>
        <div class="image"><img src="/images/gallery/egg.jpg"></div>
        <div class="image"><img src="/images/gallery/steak.jpg"></div>
        <div class="image"><img src="/images/gallery/bowl.jpg"></div>
        <div class="image"><img src="/images/gallery/shrimp.jpg"></div>
        <div class="image"><img src="images/yeshi-bottles.jpg"></div>

    </div>

@endsection
