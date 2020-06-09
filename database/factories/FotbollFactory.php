<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Fotboll;
use Faker\Generator as Faker;

$factory->define(Fotboll::class, function (Faker $faker) {

    $teams = [ 'F08', 'F09', 'P08', 'P09','Korpen'];
    return [
        'grupp' => $faker->unique()->randomElement($teams),
    ];
});
