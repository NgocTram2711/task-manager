<?php

use Faker\Generator as Faker;

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

$factory->define(App\Models\task::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'project-id' => $faker->numberBetween($min = 1, $max = 10),
        'user-id' => $faker->numberBetween($min = 1, $max = 10),
        'created-by' => $faker->name,
        'description' => $faker->text($maxNbChars = 50),
        'delete_at' => $faker->dateTime
    ];
});
