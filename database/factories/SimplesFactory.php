<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Simples;
use Faker\Generator as Faker;

$factory->define(Simples::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
    ];
});
