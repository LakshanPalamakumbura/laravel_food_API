<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Food;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // Food::create([
       //    'name'=>'polos',
       //    'image'=>'https://www.archanaskitchen.com/images/archanaskitchen/1-Author/admin/Ambul_Polos_Curry__Sri_Lankan_Jack_Fruit_Curry_Recipe_With_Pol_Sambol.jpg',
       //     'type'=>'Traditional',
       //     'ingredients'=>'jackfood,coconut,chille',
       //    'detail'=>'bla bla'
       // ]);

        // User:create([
        //     'name'=>'user',
        //     'email'=>'user@gmail.com',
        //     'password'=>Hash::make('password'),
        // ]);



         $foods = [
           [
             'name'=>'kiribath',
             'ingredients'=>'1 cup Rice, Salt, 2 cup Water, Coconut Milk - 1 cup',
             'status'=>'calories 284,good healthy food',
             'type'=>'Breakfast',
             'image'=>'https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.peckishme.com%2Fwp-content%2Fuploads%2F2017%2F03%2Fmilk-rice1.jpg&imgrefurl=https%3A%2F%2Fwww.peckishme.com%2Fsri-lankan-milk-rice-kiribath%2F&tbnid=sT5on7PN87mY1M&vet=12ahUKEwiuj6XO_s38AhWRk9gFHUnuBkMQMygAegUIARDiAQ..i&docid=-fciYSqUbRCdEM&w=3696&h=2448&q=kiribath&client=safari&ved=2ahUKEwiuj6XO_s38AhWRk9gFHUnuBkMQMygAegUIARDiAQ'
            ],

           [
             'name'=>'Egg Hoppers',
             'ingredients'=>'12 cups rice flour,2 cup granulated sugar,1/2 cups coconut milk,3/4 cup water, tablespoon dry active yeast,1 1/2 teaspoons warm water,1 teaspoon sugar,3/4 cup cooked basmati rice,1 1/2 cups coconut milk,fresh eggs',
             'status'=>'calories 310, protein included food',
             'type'=>'Breakfast',
             'image'=>'https://www.google.com/imgres?imgurl=https%3A%2F%2Fi0.wp.com%2Fwww.lavenderandlovage.com%2Fwp-content%2Fuploads%2F2016%2F05%2FEgg-Hoppers.jpg%3Ffit%3D1200%252C1037%26ssl%3D1&imgrefurl=https%3A%2F%2Fwww.lavenderandlovage.com%2Frecipe%2Fegg-hoppers&tbnid=FW1J80C46uD3xM&vet=12ahUKEwiOtLz0gM78AhUQjtgFHZ-iBVoQMygIegUIARD4AQ..i&docid=WbG33zwqOkvpDM&w=1200&h=1037&q=Egg%20Hoppers&client=safari&ved=2ahUKEwiOtLz0gM78AhUQjtgFHZ-iBVoQMygIegUIARD4AQ'
            ],

           [
             'name'=>'Idiyappam',
             'ingredients'=>'1 cup Rice flour,1 1/4 to 1 1/5 cups Rolling boiled water, Salt, Oil',
             'status'=>'calories 69, good healthy food',
             'type'=>'Breakfast',
             'image'=>'https://www.google.com/imgres?imgurl=https%3A%2F%2Frakskitchen.net%2Fwp-content%2Fuploads%2F2021%2F09%2Fidiyappam-nool-puttu.jpg&imgrefurl=https%3A%2F%2Frakskitchen.net%2Fidiyappam-recipe-how-to-make-idiyappam%2F&tbnid=ky9u5MG1MOQNmM&vet=12ahUKEwjTove6gs78AhUjitgFHQT_A3MQMygCegUIARCHAg..i&docid=8jAZ-jJAxdodUM&w=1200&h=1200&q=Idiyappam&client=safari&ved=2ahUKEwjTove6gs78AhUjitgFHQT_A3MQMygCegUIARCHAg'
            ],

           [
             'name'=>'Pittu',
             'ingredients'=>'5 cups desiccated coconut, 1 cup coconut milk,1 can hot water (use the coconut milk can to measure), 2 tsp salt, 8 cups rice flour',
             'status'=>'calories 305, good healthy food',
             'type'=>'Breakfast',
             'image'=>'https://www.google.com/imgres?imgurl=https%3A%2F%2Fcookerybay.com%2Fwp-content%2Fuploads%2F2022%2F07%2FPittu-500x375.jpg&imgrefurl=https%3A%2F%2Fcookerybay.com%2Fbreakfast%2Fsrilankan-style-pittu-recipe%2F&tbnid=DGoYBKw9kZsoyM&vet=12ahUKEwixyqjSg878AhUCCLcAHXuVCtwQMygBegUIARDmAQ..i&docid=3GGi_yilsV7mZM&w=500&h=375&q=Pittu&client=safari&ved=2ahUKEwixyqjSg878AhUCCLcAHXuVCtwQMygBegUIARDmAQ'
            ],

           [
             'name'=>'Roti',
             'ingredients'=>'all-purpose flour, (can use wheat flour or a gluten-free flour blend too), shredded unsweetened coconut, salt, water, oil for greasing the pan with',
             'status'=>'calories 297, starchy food',
             'type'=>'Breakfast',
             'image'=>'https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.celebratingflavors.com%2Fwp-content%2Fuploads%2F2020%2F07%2FIMG_5885.jpg&imgrefurl=https%3A%2F%2Fwww.celebratingflavors.com%2Fsri-lankan-coconut-roti%2F&tbnid=lqnldK-Qlu1LoM&vet=12ahUKEwj6273JhM78AhVMhNgFHW3NBpQQMygDegUIARCBAg..i&docid=S-uSqS6M07sldM&w=600&h=900&q=Roti&client=safari&ved=2ahUKEwj6273JhM78AhVMhNgFHW3NBpQQMygDegUIARCBAg'
            ],

         [
           'name'=>'Fried rice',
           'ingredients'=>'⅔ cup chopped baby carrots, ½ cup frozen green peas, 2 tablespoons vegetable oil, 1 clove garlic, minced, or to taste (Optional), 2 large eggs, 3 cups leftover cooked white rice, 1 tablespoon soy sauce, or more to taste, 2 teaspoons sesame oil, or to taste',
           'status'=>'calories 352, fatty food may be harmful your health',
           'type'=>'Main Dish',
           'image'=>'https://www.google.com/imgres?imgurl=https%3A%2F%2Ftherecipecritic.com%2Fwp-content%2Fuploads%2F2019%2F07%2Feasy_fried_rice-1.jpg&imgrefurl=https%3A%2F%2Ftherecipecritic.com%2Feasy-fried-rice%2F&tbnid=eKLkjqvaE_wlCM&vet=12ahUKEwjB6PvYhs78AhWPKbcAHX4XA0QQMygDegUIARCRAg..i&docid=1Q-sfab-x0wZwM&w=1000&h=1500&q=Fried%20rice&client=safari&ved=2ahUKEwjB6PvYhs78AhWPKbcAHX4XA0QQMygDegUIARCRAg'
          ],
  
         [
          'name'=>'polos',
           'ingredients'=>'3 cup Coconut Milk (300ml), 1.5kg young green jack fruit, 1 onion (chopped), 1-2 green chillies, 2 tsp garlic (chopped), 2 tsp ginger(chopped), 1 sprig of curry leaves, 1-2 tsp chilli powder, 1 tsp turmeric powder, 1-2 tsp curry powder, 3-4 cardamoms, 3-4 cloves, 1 inch piece of cinnamon, 2-3 pieces of goraka, 1 tbsp oil, salt to taste',
          'status'=>'calories 250, nutritious food',
           'type'=>'Main Dish',
           'image'=>'https://www.archanaskitchen.com/images/archanaskitchen/1-Author/admin/Ambul_Polos_Curry__Sri_Lankan_Jack_Fruit_Curry_Recipe_With_Pol_Sambol.jpg'
          ],

         [
          'name'=>'Mango Curry',
          'ingredients'=>'3-4 raw green mangoes, 1 and 1/2 teaspoon red chilli powder, Salt to season, 1 tablespoon of sugar, 3 tablespoons of oil, 1 sprig of curry leaves, 1-2 inch long Pandan leaf, 1 tablespoon of ginger-garlic paste, 1 medium-sized onion sliced fine, 1 green chilli split into two, 1 teaspoon mustard seeds,4 teaspoon curry powder, 1 cup of thick coconut milk',
           'status'=>'calories 220, food rich with vitimians',
           'type'=>'Main Dish',
           'image'=>'https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.islandsmile.org%2Fwp-content%2Fuploads%2F2018%2F10%2Fsinhalease-mango-curry-islandsmile.org-7847-735x980.jpg&imgrefurl=https%3A%2F%2Fwww.islandsmile.org%2Fsinhalease-style-mango-curry%2F&tbnid=m2W47dMwS2y61M&vet=12ahUKEwi578rdi878AhXAyKACHRmqBa4QMygCegUIARCFAg..i&docid=vxg8P8Xg-rS9cM&w=735&h=980&q=mango%20curry%20ingredients&hl=en-US&client=safari&ved=2ahUKEwi578rdi878AhXAyKACHRmqBa4QMygCegUIARCFAg'
          ],

         [
           'name'=>'Dhal Curry',
           'ingredients'=>'Red lentils - Masoor dal/daal/dhal, Onion, Tomato, Ginger, garlic, Curry leaves, Coconut Milk, Spice powders (turmeric, chili, cumin, coriander), Mustard seeds, Cumin seeds',
           'status'=>'calories 88, food rich with proteins',
           'type'=>'Main Dish',
           'image'=>'https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.islandsmile.org%2Fwp-content%2Fuploads%2F2015%2F03%2FIMG_5675-480x480.jpg&imgrefurl=https%3A%2F%2Fwww.islandsmile.org%2Fsri-lankan-dhal-curry-parippu%2F&tbnid=UGl00_uq1o8InM&vet=12ahUKEwjn3J7ejM78AhUH53MBHSWSAXAQMygLegUIARCQAg..i&docid=Dd_HZK1bxGmiiM&w=480&h=480&q=dal%20curry%20ingredients&hl=en-US&client=safari&ved=2ahUKEwjn3J7ejM78AhUH53MBHSWSAXAQMygLegUIARCQAg'
          ],

         [
           'name'=>'Chicken Curry ',
           'ingredients'=>'Chicken, Cooking oil, Roasted curry powder, Red chilli powder, Onion, Ginger and Garlic, Curry leaves, Green chilies, Fresh tomato, Coconut milk, Salt',
           'status'=>'calories 110, food rich with high proteins',
           'type'=>'Main Dish',
           'image'=>'https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.theflavorbender.com%2Fwp-content%2Fuploads%2F2018%2F02%2FSri-Lankan-Chicken-Curry-The-Flavor-Bender-Featured-Image-SQ-2.jpg&imgrefurl=https%3A%2F%2Fwww.theflavorbender.com%2Fsri-lankan-chicken-curry%2F&tbnid=rH8yxQw1BzqUtM&vet=12ahUKEwjQ4dXnj878AhXNKbcAHSc6DJQQMygAegUIARCKAg..i&docid=a3AydglAoU7wCM&w=1000&h=1000&q=Chicken%20Curry&client=safari&ved=2ahUKEwjQ4dXnj878AhXNKbcAHSc6DJQQMygAegUIARCKAg'
          ],

         [
             'name'=>'Fruit Salad',
             'ingredients'=>'Strawberries, Pineapple, Red grapes, mangoes,Mandarin oranges, Bananas, Limes',
             'status'=>'calories 50, health food with vitamins and minarals',
             'type'=>'Dessert',
             'image'=>'https://www.google.com/imgres?imgurl=https%3A%2F%2Fgimmedelicious.com%2Fwp-content%2Fuploads%2F2016%2F03%2FFruit-Salad-with-Yogurt-Sauce-3-of-29.jpg&imgrefurl=https%3A%2F%2Fgimmedelicious.com%2Ffruit-salad-with-healthy-honey-yogurt-sauce%2F&tbnid=J9jE0k_Jt8kaCM&vet=12ahUKEwj8iIfUks78AhUoALcAHQ0zAYoQMygIegUIARCfAg..i&docid=5InIBR6XgUyyVM&w=700&h=980&q=healthy%20fruit%20salad&client=safari&ved=2ahUKEwj8iIfUks78AhUoALcAHQ0zAYoQMygIegUIARCfAg'
            ],

           [
             'name'=>'Coffee',
             'ingredients'=>'Coffee powder, Water, Milk, Sugar',
             'status'=>'calories 42, good beverage',
             'type'=>'Dessert',
             'image'=>'https://www.google.com/imgres?imgurl=https%3A%2F%2Fstatic.toiimg.com%2Fphoto%2F89078867.cms&imgrefurl=https%3A%2F%2Ftimesofindia.indiatimes.com%2Flife-style%2Ffood-news%2Fcoffee-for-digestion-coffee-can-help-in-digestion-says-study%2Fphotostory%2F89078864.cms&tbnid=rrhlkBaD3skCYM&vet=12ahUKEwipi9qrlM78AhXuynMBHS9PBb4QMygBegUIARDqAQ..i&docid=2HDKw-i20B0rGM&w=1200&h=900&q=coffee&client=safari&ved=2ahUKEwipi9qrlM78AhXuynMBHS9PBb4QMygBegUIARDqAQ'
            ],

           [
             'name'=>'Chocolate Pudding',
             'ingredients'=>'1 cup sugar, 1/2 cup baking cocoa, 1/4 cup cornstarch, 1/2 teaspoon salt, 4 cups whole milk, 2 tablespoons butter, 2 teaspoons vanilla extract',
             'status'=>'calories 142, avoid exessive sugar',
             'type'=>'Dessert',
             'image'=>'https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.biggerbolderbaking.com%2Fwp-content%2Fuploads%2F2021%2F03%2FDecadent-Steamed-Chocolate-Pudding-thumbnail-scaled.jpg&imgrefurl=https%3A%2F%2Fwww.biggerbolderbaking.com%2Fsteamed-chocolate-pudding-recipe%2F&tbnid=Q4GParUBXlkmsM&vet=12ahUKEwjEvbGdlc78AhVxi9gFHTiXDXgQMygWegUIARDKAg..i&docid=dg2wXUGXCjSM8M&w=2048&h=1365&q=Chocolate%20Pudding&hl=en&client=safari&ved=2ahUKEwjEvbGdlc78AhVxi9gFHTiXDXgQMygWegUIARDKAg'
            ],    
         ];

         foreach ($foods as $food) {
             Food::create($food);
         }
    }
}
