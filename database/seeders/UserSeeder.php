<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('password123'),
            'role' => 'admin'
        ]);

        user::create([
            'name' => 'user',
            'email' => 'user@mail.com',
            'password' => bcrypt('password123'),
            'role' => 'user'
        ]);
    }
}
