<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    $teams = ['P07','P08','P09','F07','F08','F09'];
    return [
        'name' => $faker->randomElement($teams),
        'activity_id' => $faker->numberBetween(1,3),
    ];
});
