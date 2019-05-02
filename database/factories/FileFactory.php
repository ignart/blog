<?php

use Faker\Generator as Faker;

$factory->define(App\File::class, function (Faker $faker) {
    return [
        'file_name' => 'random',
        'file_size' => '2MB'
    ];
});
