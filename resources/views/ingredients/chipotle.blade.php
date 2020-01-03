@extends ('layouts.app')
@section ('title', 'Home')
@section ('bg', 'bowl')

@section ('content')

    <div class="content-area">

        <div class="section">
            <h1>Smoky Chipotle Ingredients</h1>

            <div class="flex">

                <div class="flex-1">
                    <div class="ingredients">
                        <div class="list-item" v-for="label in [
                            'Canola Oil', 
                            'Water', 
                            'Soya Sauce (Water, Soybeans, Salt, Sugar, Corn Starch)',
                            'Vinegar', 
                            'Nutritional Yeast', 
                            'Garlic', 
                            'Chipotle Powder',
                            'Sugar', 
                            'Salt', 
                            'Hickory Smoke Flavour',
                            'Xanthan Gum',
                        ]">
                            <div class="list-icon"><i class="fas fa-check"></i></div>
                            <div class="list-name">@{{ label }}</div>
                        </div>
                        <div class="bold my-4">Contains: Soy, Sulfites</div>
                    </div>

                    <div class="m-4 flex"><img class="w-64" src="/images/chipotle_facts.png" /></div>
                </div>


                <div class="">
                    <img class="rounded-full" src="/images/chipotle.jpg" />
                </div>
            </div>

        </div>

    </div>
@endsection
