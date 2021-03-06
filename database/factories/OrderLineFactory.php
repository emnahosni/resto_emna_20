<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrderLine;
use App\User;
use Faker\Generator as Faker;

$factory->define(OrderLine::class, function (Faker $faker) {
    return [
        'meal_id' => Meal::get('id')->random(),
        'order_id' => Order::get('id')->random(),
        'quantity_ordered' => $faker->randomDigitNotNull,
        'price_each' => $faker->randomFloat(3, 2, 1000),
        'created_at' => now(),
        'updated_at' => now()
    ];
});
