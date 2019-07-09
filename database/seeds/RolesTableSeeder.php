<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
          'name' => 'admin',
          'description' => 'An admin account'
        ]);

        Role::create([
          'name' => 'manager',
          'description' => 'A manager account'
        ]);

        Role::create([
          'name' => 'regular',
          'description' => 'A regular account'
        ]);
    }
}
