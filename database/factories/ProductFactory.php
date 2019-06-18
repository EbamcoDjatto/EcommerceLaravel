<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'image' => 'uploads/products/book1.png',
        'description' =>$faker->paragraph(4),
        'price' => $faker->numberBetween(1000,10000)
    ];
});
