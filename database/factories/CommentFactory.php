<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'author' => $faker->name,
        'email' => $faker->safeEmail,
        'content' => $faker->paragraph(2)
    ];
});
