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
$factory->define(App\Order::class, function (Faker\Generator $faker) {

    $lgas = \App\Lga::all();
    $pickup_lga = $lgas->random();
    $drop_off_lga = $lgas->random();

    $customer = \App\User::notAdmins()->get()->random();

    return [
        'pickup_address' => $faker->address,
        'pickup_lga_id' => $pickup_lga->id,
        'drop_off_address' => $faker->address,
        'drop_off_lga_id' => $drop_off_lga->id,
        'amount' => $faker->randomFloat(2, 2000, 10000),
        'description' => $faker->text(200),
        'recipient_name' => $faker->name,
        'recipient_phone_number' => substr($faker->phoneNumber, 0, 11),
        'customer_id' => $customer->id
    ];
});
