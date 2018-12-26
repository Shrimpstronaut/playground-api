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

$factory->define(App\Account::class, function (Faker $faker) {
    return [
        'surname' => $faker->lastName,
        'givenname' => $faker->firstName,
        'email' => $faker->unique()->safeEmail,
        'username' => $faker->unique()->userName,
        'bio' => $faker->realText($maxNbChars = 200, $indexSize = 2),
    ];
});
