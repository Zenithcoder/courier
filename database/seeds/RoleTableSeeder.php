<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employee = new Role();
        $role_employee->name = 'user';
        $role_employee->description = 'A customer User';
        $role_employee->save();
        $role_employee = new Role();
        $role_employee->name = 'rider';
        $role_employee->description = 'A Rider User';
        $role_employee->save();
        $role_manager = new Role();
        $role_manager->name = 'admin';
        $role_manager->description = 'A Admin User';
        $role_manager->save();
    }
}
