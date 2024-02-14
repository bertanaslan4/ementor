<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => 'User '.$i,
                'username' => 'user'.$i,
                'email' => 'user'.$i.'@example.com',
                'role' => 1,
                'password' => Hash::make('123456'),
            ]);
        }

        for ($i = 10; $i < 20; $i++) {
            User::create([
                'name' => 'User '.$i,
                'username' => 'user'.$i,
                'email' => 'user'.$i.'@example.com',
                'role' => 2,
                'password' => Hash::make('123456'),
                'email_verified_at' => now(), // E-posta adresini doğrula
            ]);
        }
    }
}
