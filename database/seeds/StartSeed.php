<?php

use Illuminate\Database\Seeder;
use App\Rol;

class StartSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRol = new Rol();
        $adminRol->name = "Admin";
        $adminRol->save();

        $userRol = new Rol();
        $userRol->name = "User";
        $userRol->save();
    }
}
