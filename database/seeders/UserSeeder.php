<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Nugraha Akbar',
            'email' => 'garuda.bangkit@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('password'),
        ]);

        User::factory()->create([
            'name' => 'Richard Ryan',
            'email' => 'aopsonly@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('password'),
        ]);
    }
}
