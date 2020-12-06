<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Collaborator;
use Faker\Generator as Faker;

$factory->define(Collaborator::class, function (Faker $faker) {
    return [
        'cpf' => "999.999.999-99",
        'name' => $faker->name,
        'email' => $faker->email,
        'telephone' => "38 9999-9999",
        'birth' => $faker->date($formt = 'Y-m-d', $max = 'now'),
        'address' => $faker->streetAddress,
    ];
});
