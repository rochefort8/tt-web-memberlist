<?php

use App\Member;
use Faker\Generator as Faker;

$factory->define(Member::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'email' => $faker->email,
    ];
});
