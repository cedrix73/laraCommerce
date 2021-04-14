<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    $professionnal = $faker->boolean();
    if(!$professionnal || ($professionnal && $faker->boolean())) {
        $name = $faker->name();
        $firstname = $faker->firstName();
    } else {
        $name = null;
        $firstname = null;
    }
    return [
        'professionnal' => $professionnal,
        'civility' => $faker->boolean() ? 'Mme': 'M.',
        'lastname' => $faker->lastName,
        'firstname' => $faker->firstName,
        'company' => $professionnal ? $faker->company : null,
        'address' => $faker->streetAddress,
        'addressbis' => $faker->boolean() ? $faker->secondaryAddress : null,
        'bp' => $faker->boolean() ? $faker->numberBetween(100, 900) : null,
        'postal' => $faker->numberBetween(10000, 90000),
        'city' => $faker->city,
        'country_id' => mt_rand(1, 4),
        'phone' => $faker->numberBetween(1000000000, 9000000000),
    ];
});
