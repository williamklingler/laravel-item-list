<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\item;
use Faker\Generator as Faker;

$factory->define(item::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'excerpt' => $faker->sentence,
        'body' => $faker->paragraph,
        'user_id'=> factory(\App\User::class)
    ];
});
