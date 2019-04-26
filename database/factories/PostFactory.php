<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(4),
        'content' => $faker->paragraph(3),
        'user_id' => App\User::all()->random(1)->first()->id
    ];
});
