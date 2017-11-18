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

$factory->define(App\Gameworld::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'start_date' => Carbon::parse('+2 weeks'),
        'league' => $faker->company,
    ];
});
