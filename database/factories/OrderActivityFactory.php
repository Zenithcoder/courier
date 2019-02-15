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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\OrderActivity::class, function (Faker\Generator $faker) {

    $lgas = \App\Lga::all();
    $current_lga_id = $lgas->random()->id;
    $next_lga_id = $lgas->random()->id;

    $order_id = \App\Order::all()->random()->id;

    return [
        'order_id' => $order_id,
        'description' => $faker->text,
        'current_location' => $faker->address,
        'current_lga_id' => $current_lga_id,
        'next_location' => $faker->address,
        'next_lga_id' => $next_lga_id,
        'expected_delivery_date' => $faker->dateTimeBetween("now", "2 weeks"),
    ];
});
