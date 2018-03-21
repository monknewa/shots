<?php

use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'price'=>200,
        'image'=>$faker->name,
        'category_id'=>1,
        'description'=>$faker->paragraph,
    ];
});
