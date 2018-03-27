<?php

use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'price'=>$faker->numberBetween(200,5000),
        'quantity'=>200,
        'image'=>$faker->name,
        'category_id'=>$faker->numberBetween(1,7),
        'description'=>$faker->paragraph,
    ];
});
