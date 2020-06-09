<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Skidor;
use Faker\Generator as Faker;

$factory->define(Skidor::class, function (Faker $faker) {

    $teams = ['Dam', 'Herr', 'Junior', 'Senior'];
    return [
        'grupp' => $faker->unique()->randomElement($teams),
    ];
});
