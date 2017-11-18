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

$factory->define(App\Selection::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomDigit,
        'fixture_date' => Carbon::parse('+2 days'),
        'selection_made_date' => Carbon::now(),
        'team_id' => $faker->randomDigit,
    ];
});
