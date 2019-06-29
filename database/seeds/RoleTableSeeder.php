<?php

use Illuminate\Database\Seeder;
use LaraDex\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = "Admin";
        $role->description = "Administrador";
        $role->save();

        $role = new Role();
        $role->name = "User";
        $role->description = "Usuario";
        $role->save();

    }
}
