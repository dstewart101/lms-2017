<?php

use Faker\Generator as Faker;
use Carbon\Carbon;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Fixture::class, function (Faker $faker) {
    return [
        'fixture_date' => Carbon::parse('+2 days'),
        'home_team' => $faker->randomDigit,
        'home_score' => null,
        'away_team' => $faker->randomDigit,
        'away_score' => null,
        'result' => 0
    ];
});
