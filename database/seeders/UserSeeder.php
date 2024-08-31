<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Ahmaji Setiawan S.Kom, MDS',
            'username' => 'Ahmaji',
            'email' => 'Ahmajist@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
        User::create([
            'name' => 'Putri Lesatari Setiawati SE, M.Si.',
            'username' => 'Putri',
            'email' => 'Poetri@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
        User::create([
            'name' => 'Siti Nilal Muna S.si, MDS',
            'username' => 'UNA',
            'email' => 'Muna@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
        User::create([
            'name' => 'Muhammad Zayn Adriana Setiawan S.Kom, Ph.D.',
            'username' => 'Zayn',
            'email' => 'Adriana@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
        User::create([
            'name' => 'Diana Mulya Setiawan S.si, M.Kom.',
            'username' => 'Mulya',
            'email' => 'Diana@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
        User::create([
            'name' => 'Muhammad Alwi Bassar Setiawan S.Kom',
            'username' => 'Admin',
            'email' => 'Alwi@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
    }
}
