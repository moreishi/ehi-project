<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = factory(User::class)->create([
          'name' => 'Admin',
          'email' => "admin@domain.local",
        ]);
        $admin->roles()->attach(Role::where('name','admin')->first());

    }
}
