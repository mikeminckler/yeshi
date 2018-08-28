<template>

    <div class="recipes-container">

        <transition name="recipe-transition">
            <div class="selected-recipe" v-if="selectedRecipe.name" :key="selectedRecipe.image">

                <h1>{{ selectedRecipe.name }}</h1>

                <div class="flexbox">
                    <div class="flex-1">

                        <h2>Ingredients</h2>

                        <div class="recipe-ingredients">
                            <div v-for="ingredients in selectedRecipe.ingredients"
                                class="ingredient-list"
                                >
                                <h3 class="ingredients-title">{{ ingredients.title }}</h3>
                                <ul>
                                    <li v-for="item in ingredients.items">{{ item }}</li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="flex-1 recipes-selected-image">
                        <img :src="'/images/recipes/' + selectedRecipe.image">
                    </div>

                </div>

                <h3>Instructions</h3>
                <ol>
                    <li v-for="instruction in selectedRecipe.instructions">{{ instruction }}</li>
                </ol>

            </div>
        </transition>

        <div class="button-container" v-if="selectedRecipe.name">
            <div class="button" @click="selectedRecipe = {}">
                <div class="button-text">Close Recipe</div>
                <div class="button-icon"> <i class="fas fa-times-circle"></i></div>
            </div>
        </div>

        <div class="recipes">

            <div v-for="recipe in recipes" 
                class="recipe"
                @click="selectRecipe(recipe)"
            >
                <div class="recipe-image"><img :src="'/images/recipes/' + recipe.image"></div>
                <div class="recipe-title">{{ recipe.name }}</div>
            </div>

        </div>


    </div>

</template>

<script>

    export default {

        props: [],

        mixins: [],

        data: function() {
            return {
                selectedRecipe: '',
                recipes: [
                    {
                        name: 'Grilled Flank Steak ',
                        image: 'steak.jpg',
                        ingredients: [
                            {
                                title: 'Meat',
                                items: [
                                    '2 pounds flank steak',
                                ]
                            },
                            {
                                title: 'Marinade',
                                items: [
                                    '1/3 cup olive oil',
                                    '2 cloves garlic, minced',
                                    '2 Tbsp red wine vinegar',
                                    '1/3 cup soy sauce',
                                    '1/4 cup honey',
                                    '1/2 teaspoon freshly ground black pepper',
                                ]
                            },
                        ],
                        instructions: [
                            'Combine the marinade ingredients in a large bowl. Place steak in the bowl and turn so that it is completely coated with the marinade. (You can also place the steak and marinade in a freezer bag and place it in a bowl.) Chill and marinate for at least 2 hours and up to overnight.',
                            'Prepare your grill for high, direct heat.',
                            'Grill the steak: Remove the steak from the marinade and gently shake off the excess.',
                            'Place steak on the hot side of the grill. Grill for a minute or two on each side to get a good sear, then move the steak to the cooler side of the grill, cover and cook a few minutes more until done to your liking.',
                            'Pull the steak off the grill at 125 to 130°F for rare, 140°F for medium rare, and 150°F for medium.',
                            'Rest the steak: When the steak has cooked to your preferred level of doneness, remove from the grill and place on a cutting board. Cover with aluminum foil to hold in the heat while the steak rests for 10 to 15 minutes.',
                            'Slice across the grain: Notice the direction of the muscle fibers of the steak; this is called the grain of the meat. Flank steak is a very lean cut that will be tough and chewy unless you cut it in a way that breaks up the muscle fibers.So, cut the steak across the grain of the meat, at a steep diagonal, so that the slices are wide. I find it easiest to use a long serrated bread knife for this, but any long sharp knife will do.',
                            'Top with your favorite flavor of Yeshi and Enjoy! (We would recommend “Yeshi Chili”)',

                        ]
                    },
                    {
                        name: 'Buddha Bowl',
                        image: 'bowl.jpg',
                        ingredients: [
                            {
                                title: '',
                                items: [
                                    '4 cup cooked quinoa',
                                    '3 medium to large sweet potatoes peeled and cut into 1/2 inch pieces',
                                    '1 tablespoon olive oil',
                                    'salt and pepper to taste',
                                    '1 15-ounce can chickpeas rinsed and drained',
                                    '1 cup baby spinach leaves',
                                    '1 cup shredded purple cabbage',
                                    '1/4 cup roasted cashews',
                                    '1 avocado peeled, pitted and thinly sliced',
                                    '1 tablespoon Garlic',
                                    '1 teaspoons Chili Flakes',
                                    '2 tsp Curry Powder',
                                    '3 Tbsp veg',
                                ]
                            },
                        ],
                        instructions: [
                            'Preheat the oven to 400 degrees. Line a sheet pan with foil and coat with cooking spray.',
                            'Coat the chickpeas the olive oil garlic and chili flakes and curry powder, salt and pepper.',
                            'Place the chickpeas on one side of the pan and the sweet potatoes on the other side of the pan in a single layer.',
                            'Bake for 25 minutes, or until sweet potatoes are tender and chickpeas are browned and crispy.',
                            'Divide the quinoa evenly between 4 bowls. ',
                            'Divide the sweet potatoes, chickpeas, cabbage, spinach, cashews and avocado evenly between the 4 bowls, arranging on top of the quinoa.',
                            'Top with your favorite flavor of Yeshi and Enjoy! (We would recommend “Yeshi Original”)',
                        ]
                    },
                    {
                        name: 'Lemon Garlic Butter Shrimp ',
                        image: 'shrimp.jpg',
                        ingredients: [
                            {
                                title: '',
                                items: [
                                    '1/3 cup butter , divided',
                                    '4 cloves garlic , minced (or 1 tablespoon)',
                                    '1 3/4 pounds | 800 grams shrimp (or prawns), peeled and deveined, tails intact',
                                    'Kosher salt and freshly ground black pepper , to taste',
                                    'Juice of half a lemon (about 2 tablespoons -- add more if desired)',
                                    '2 tablespoons water',
                                    'Fresh chopped parsley , to garnish',
                                ]
                            },
                        ],
                        instructions: [
                            'Melt 2 tablespoon butter in a large skillet over medium-high heat. Add the garlic and cook until fragrant (about 1 minute). Fry shrimp and add salt and pepper, to your taste. Cook 2 minutes on one side, while stirring occasionally; then flip and cook 2 minutes on the other side, until JUST beginning to turn nice and pink.',
                        'Add in the remaining butter, lemon juice and water. Cook, while stirring, until the butter melts and the shrimp have cooked through (do not overcook them). Take off heat. Taste test, and add more lemon juice, salt or pepper, if needed to suit YOUR tastes.',
                        'Garnish with fresh chopped parsley and serve over rice or pasta.',
                        'Top with your favorite flavor of Yeshi and Enjoy! (We would recommend Yeshi Ginger Sesame)',
                        ]
                    },
                    {
                        name: 'Avacado Toast With Egg',
                        image: 'egg.jpg',
                        ingredients: [
                            {
                                title: '',
                                items: [
                                    '1 piece bread, whole wheat or sprouted',
                                    '1/2 avocado, ripe and soft',
                                    '1 egg',
                                    'Salt and pepper',
                                    '1 tsp butter',
                                ]
                            },
                        ],
                        instructions: [
                            'Toast bread.',
                            'Smash avocado in a small bowl. Add salt and pepper to taste',
                            'Smear avocado spread on toast.',
                            'Gently crack egg into a hot pan with the melted butter. Reduce the heat to medium and allow to cook for about 2 minutes. Cover the pan with a lid for an additional minute to finish. Slide out of pan on top of toast.',
                            'Crack black pepper and sea salt over the top. ',
                            'Top with your favorite flavor of Yeshi and Enjoy!',
                        ]
                    },
                    /*
                    {
                        name: 'Crispy Baked Parmesan Chicken ',
                        image: 'shrimp.jpg',
                        ingredients: [
                            {
                                title: '',
                                items: [
                                    '6 chicken breast halves',
                                    '1 Bottle of Yeshi Original',
                                    '3 cup cornflake crumbs',
                                    '1/2 cup Parmesan cheese',
                                    '1 1/2 teaspoons garlic powder',
                                    '2 Tablespoons parsley flakes',
                                    '1/2 teaspoon each salt and pepper',
                                ]
                            },
                        ],
                        instructions: [
                            'Preheat oven to 375 degrees',
                            'Pound chicken breasts to 1/2 inch thickness.',
                            'Combine, cornflake crumbs, parmesan, parsley, garlic powder and salt and pepper.',
                            'In a shallow bowl coat chicken with Yeshi Original ',
                            'Place chicken in the crumb mixture pressing the crumbs to adhere.',
                            'Place on a pan sprayed with cooking spray. Spray the top of the chicken with cooking spray.',
                            'Bake at 375 bake 30-35 min or until juices run clear',
                        ]
                    },
                    {
                        name: 'One Skillet Cashew Chicken Stir Fry ',
                        image: 'bowl.jpg',
                        ingredients: [
                            {
                                title: 'Bowl',
                                items: [
                                    '1 Tbsp olive oil',
                                    '1 lb boneless skinless chicken breasts, cut into 1-inch pieces',
                                    'Salt and pepper, to taste',
                                    '3 cloves garlic, minced',
                                    '2 cups broccoli florets',
                                    '1 red bell pepper, julienned',
                                    '1 cup sugar snap peas',
                                    '½ cup carrots, julienned',
                                    '⅓ cup unsalted cashews',
                                    '4 green onions, chopped',
                                ]
                            },
                            {
                                title: 'Suace',
                                items: [
                                    '2 tsp soy sauce (keep it Gluten Free)',
                                    '1.5 Tbsp all-natural peanut butter',
                                    '1 Tbsp honey',
                                    '1 tsp sesame oil',
                                    '2 tsp grated ginger',
                                    '2 or 3 Tbsp water',
                                ]
                            }
                        ],
                        instructions: [
                            'To make the sauce, whisk together tamari (or soy sauce), peanut butter, honey, sesame oil, and grated ginger in a small bowl. Whisk in 2 or 3 tablespoons of water, depending on the consistency you prefer, and set aside.',
                            'In a large skillet over medium heat, drizzle olive oil and add chicken. Season with salt and pepper and sauté until lightly browned, about 4 to 5 minutes. Add the garlic and sauté for about 30 seconds, mixing it with the chicken.',
                            'Add broccoli, bell pepper, snap peas and carrots to the skillet, incorporating everything together. Cook an additional 5 minutes, until veggies are tender and chicken is cooked through, then add cashews and green onions and drizzle the peanut sauce over top.',
                            'Mix everything together with the sauce, coating well, and cook for one more minute. Serve',
                            'Top with your favorite flavor of Yeshi and Enjoy!',
                        ]
                    },
            */
                    {
                        name: 'The Big Salad',
                        image: 'salad.jpg',
                        ingredients: [
                            {
                                title: '',
                                items: [
                                    'Red leaf Lettuce',
                                    'Head Lettuce',
                                    'Kale',
                                    'Grape Tomatoes',
                                    'Red Cabbage',
                                    'Carrots',
                                    'Red Pepper',
                                    'Yellow Pepper',
                                    'Cucumber',
                                    'Snow Peas',
                                    'Sunflower sprouts',
                                ]
                            },
                        ],
                        instructions: [
                            'Chop Dice, or Slice all your ingredients, place in large bowl.',
                            'Apply a generous helping of your favorite Yeshi Dressing',
                        ]
                    },
        
                ]
            }
        },

        methods: {

            selectRecipe: function(recipe) {

                this.selectedRecipe = recipe;

                setTimeout(function() {
                    window.scroll({
                        behavior: 'smooth',
                        left: 0,
                        top: 0,
                    });
                }, 250);

            }
        
        }

    }

</script>
