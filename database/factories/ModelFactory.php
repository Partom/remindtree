<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
 */

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'firstname'      => $faker->name,
        'lastname'       => $faker->name,
        'email'          => $faker->safeEmail,
        'password'       => $password ?: $password = bcrypt('secret'),
        'btype'          => 'personal',
        'bname'          => $faker->name,
        'address'        => $faker->address,
        'city'           => $faker->city,
        'state'          => $faker->state,
        'country'        => $faker->country,
        'zipcode'        => $faker->numberBetween(1000,9999),
        'phone_number'   => $faker->numberBetween(20000000,999999999),
        'type'           => 'personal',
        'remember_token' => str_random(10),
    ];
});
