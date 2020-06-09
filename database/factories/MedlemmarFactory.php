<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Medlemmar;
use Faker\Generator as Faker;

$factory->define(Medlemmar::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'birthday' => $faker->dateTimeBetween($startDate = '-80 years', $endDate = '-10 years', $timezone = null),
        'email' => $faker->email,
        'password' => 'password',
        'member_fee' => $faker->boolean($chanceOfGettingTrue = 80)
    ];
});
