<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'John Doe',
            'gender' => 'male',
            'date_of_birth' => '1990-01-01',
            'email' => 'john@example.com',
            'phone_number' => '123456789',
            'password' => Hash::make('rahasia'),
            'role' => 'user',
            'token' => null,
            'token_expired_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
