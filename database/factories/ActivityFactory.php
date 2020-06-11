<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Activity;
use Faker\Generator as Faker;

$factory->define(Activity::class, function (Faker $faker) {
    $activities = ['Skidor', 'Fotboll', 'Gymnastik'];
    return [
        'name' => $faker->unique()->randomElement($activities),
    ];
});
