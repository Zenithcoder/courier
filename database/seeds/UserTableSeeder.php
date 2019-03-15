<?php

use App\Lga;
use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lga = Lga::get()->random();
        $role_user = Role::where('name', 'customer')->first();
        $role_rider = Role::where('name', 'rider')->first();
        $role_admin  = Role::where('name', 'admin')->first();

        $user = User::create([
            "name" => "Renny Young",
            "email" => "user@example.com",
            "password" => 'secret',
            "lga_id" => $lga->id,
        ]);
        $user->roles()->attach($role_user);

        $rider = User::create([
            "name" => "Kelvin Andrews",
            "email" => "rider@example.com",
            "password" => 'secret',
            "lga_id" => $lga->id,
        ]);
        $rider->roles()->attach($role_rider);

        $admin = User::create([
            "name" => "Sylvester Gabriel",
            "email" => "admin@example.com",
            "password" => 'secret',
            "lga_id" => $lga->id,
        ]);
        $admin->roles()->attach($role_admin);
    }
}
