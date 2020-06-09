<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Medlemmar;
use Faker\Generator as Faker;

$factory->define(Medlemmar::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'birthday' => $faker->dateTimeBetween($startDate = '-80 years', $endDate = '-10 years', $timezone = null),
        'email' => $faker->email,
        'password' => 'password',
        'membership' => $faker->boolean($chanceOfGettingTrue = 80)
    ];
});
