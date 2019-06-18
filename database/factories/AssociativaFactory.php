<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Associativa;
use Faker\Generator as Faker;

$factory->define(Associativa::class, function (Faker $faker) {
    return [
        'descricao' => $faker->name,
        'user_id' => 1,
        'simples_id' => 1,
    ];
});
