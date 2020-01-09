<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PostType;
use Faker\Generator as Faker;

$factory->define(App\PostType::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
