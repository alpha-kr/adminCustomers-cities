<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\City;
use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name'=>$faker->name(),
        'cod'=>uniqid(),
        'city_id'=>City::inRandomOrder()->first()->id
    ];
});
