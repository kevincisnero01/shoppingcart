<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->paragraph(1),
    	'price' => $faker->randomElement(['2000','3000','4000','5000']),
    	'quantity' => $faker->numberBetween(1,10),
    	'image' => $faker->randomElement(['1.jpg','2.jpg','3.jpg']),
    	'status' =>  $faker->randomElement([0, 1]) 

    ];
});
