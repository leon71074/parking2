<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'price' => $faker->numberBetween(1, 8000),
        'size' => $faker->word,
        'enabled' => $faker->boolean,
        'pic' => $faker->word,
        'updated_at' => $faker->dateTime
    ];
});
