<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'name' => $product_name = $faker->word,
        'slug' => \Illuminate\Support\Str::slug($product_name),
        'cost' => $faker->randomFloat(2, 0.50, 99999.00),
        'description' => $faker->sentence
    ];
});
