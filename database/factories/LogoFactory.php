<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Logo;
use Faker\Generator as Faker;

$factory->define(Logo::class, function (Faker $faker) {
    return [
        'logo' => $faker->image('public/storage/images',640,480,null,false),
    ];
});
