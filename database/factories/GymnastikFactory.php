<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Gymnastik;
use Faker\Generator as Faker;

$factory->define(Gymnastik::class, function (Faker $faker) {

    $teams = ['Damer', 'Herrar', 'Kids', 'Motion'];
    return [
        'grupp' => $faker->unique()->randomElement($teams),
    ];
});
