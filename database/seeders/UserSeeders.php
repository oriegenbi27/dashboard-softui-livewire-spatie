<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //
        $admin = User::create([
            'name' => 'Superadmin',
            'email' => 'superadmin@mail.com',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole('superadmin');

        $user = User::create([
            'name' => 'Administrator',
            'email' => 'administrator@mail.com',
            'password' => bcrypt('12345678'),
        ]);

        $user->assignRole('administrator');

        $user = User::create([
            'name' => 'User',
            'email' => 'user@mail.com',
            'password' => bcrypt('12345678'),
        ]);

        $user->assignRole('user');
    }
}
