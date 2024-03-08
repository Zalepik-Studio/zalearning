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
            'name' => 'Admin',
            'gender' => null,
            'date_of_birth' => '0000-00-00',
            'email' => 'admin@zalepik.com',
            'phone_number' => '085720075826',
            'password' => Hash::make('123456'),
            'role' => 'admin',
            'token' => null,
            'token_expired_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
