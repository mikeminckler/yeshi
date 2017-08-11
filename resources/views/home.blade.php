@extends ('layouts.app')
@section ('title', 'Home')
@section ('bg', 'bowl')

@section ('content')

    <h1 class="home-logo">
        <img src="/images/logo_white.png" class="home-logo">
    </h1>
    <div class="slogan">Try It On Everything</div>

    <div class="section">

        <div class="p">
            <ul class="flex">
                <li>Gluten Free</li>
                <li>Dairy Free</li>
                <li>Nut Free</li>
                <li>Egg Free</li>
                <li>Low in Sugar</li>
                <li>Complete Protein</li>
                <li>Low Cholesterol</li>
                <li>High in B Vitamins</li>
            </ul>
        </div>

        <div class="p">
            <p>        
    Yeshi is a nutritional yeast based dressing that's fit for gluten free and vegetarian diets. Slightly sweet and creamy, with the subtle flavours of garlic and cheesy nutty undertones, there's a Yeshi flavour for every dish.
            </p>
        </div>

        
        <h2>Flavours</h2>

        <div class="p">

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
                        <li>Sandwhich</li>
                        <li>Wraps</li>
                        <li>French Fries</li>
                        <li>Pizza</li>
                    </ul>

                </div>
            </div>
        </div>


        <div class="p">

            <div class="flexbox">

                <div class="flex-3">
                    <img src="/images/ginger.jpg" class="square inline">
                </div>
                <div class="flex-2 flexbox flex-column">
                    <h3>Ginger Seasme</h3>
                    <ul>
                        <li>Rice</li>
                        <li>Sushi</li>
                        <li>Stirfry</li>
                    </ul>
                </div>

            </div>

        </div>

        <div class="p">

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
