<?php

use Illuminate\Database\Seeder;

class FactorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = \App\Role::all();

        factory(\App\User::class, 100)->create()->each(function ($user) use ($roles) {
            $user->roles()->sync($roles->random());
        });

        factory(\App\Order::class, 100)->create();
        factory(\App\OrderActivity::class, 200)->create();
    }
}
