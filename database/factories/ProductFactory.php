<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->firstNameMale,
        'category_id' => $faker->numberBetween(1, 5),
        'price' => $faker->numberBetween(100000, 1000000),
        'desc' => $faker->paragraph($nbSenteces = 2, $variableNbSenteces = true),
        'image' => '/storage/image/product.jpg'
    ];
});
