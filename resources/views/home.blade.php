@extends ('layouts.app')
@section ('title', 'Home')
@section ('bg', 'bowl')

@section ('content')

    <div class="banner">
        <div class="banner-image"><img src="/images/banner.jpg" class="banner-image"></div>
        <div class="home-logo">
            <h1 class="home-logo">
                <img src="/images/logo_white.png" class="home-logo">
            </h1>
            <div class="slogan">Try It On Everything</div>
        </div>
    </div>

    <div class="home-content-area">

        <div class="section">
            <h1>Fits Any Diet</h1>
            <p>        
    Yeshi is a nutritional yeast based dressing that's fit for gluten free and vegetarian diets. Slightly sweet and creamy, with the subtle flavours of garlic and cheesy nutty undertones, there's a Yeshi flavour for every dish.
            </p>
            <div class="grid">
                <div class="list-item" v-for="label in [
                    'Gluten Free',
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

    <div class="image-banner">
        <div class="content-banner"><img src="/images/bowl.jpg" class="banner-image"></div>
    </div>


    <div class="content-area">

        <div class="section">

            <h2>Where To Buy</h2>
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

        
        <h2>Flavours</h2>

        <div class="section">

            <div class="flexbox">

                <div class="flex-3">
                    <img src="/images/original.jpg" class="square inline">
                </div>
                <div class="flex-2 flexbox flex-column">
                    <h3>Original</h3>
                    <ul>
                        <li>Green Salad</li>
                        <li>Eggs</li>
                        <li>Raw Veggies</li>
                        <li>Sandwich</li>
                        <li>Wraps</li>
                        <li>French Fries</li>
                        <li>Pizza</li>
                    </ul>

                </div>
            </div>
        </div>


        <div class="section">

            <div class="flexbox">

                <div class="flex-3">
                    <img src="/images/ginger.jpg" class="square inline">
                </div>
                <div class="flex-2 flexbox flex-column">
                    <h3>Ginger Sesame</h3>
                    <ul>
                        <li>Rice</li>
                        <li>Sushi</li>
                        <li>Stirfry</li>
                    </ul>
                </div>

            </div>

        </div>

        <div class="section">

            <div class="flexbox">

                <div class="flex-3">
                    <img src="/images/chili.jpg" class="square inline">
                </div>
                <div class="flex-2 flexbox flex-column">
                    <h3>Chili</h3>
                    <ul>
                        <li>Beef</li>
                        <li>Chicken</li>
                        <li>Seafood</li>
                        <li>Marinade</li>
                    </ul>

                </div>
            </div>
        </div>

        <p>
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
        </p>


    </div>

@endsection
