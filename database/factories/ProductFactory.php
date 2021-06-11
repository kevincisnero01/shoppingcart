<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['pizza','hamburguesa','sandwich','shawarma','helado','hotdog','papas','pescado','carne','ensalada','pasta']),
        'description' => $faker->paragraph(1),
    	'price' => $faker->randomElement(['1000','2000','3000','4000','5000']),
    	'quantity' => $faker->numberBetween(1,10),
    	'image' => 'img/productos_'.$faker->randomElement(['01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16']).'.png',
    	'status' =>  $faker->randomElement(['0', '1']) 

    ];
});
