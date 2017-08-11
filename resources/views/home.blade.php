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

                <img src="/images/original.jpg">
                <div>
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


        <p>
            <img src="images/yeshi-bottles.jpg">
        </p>

    </div>

@endsection
