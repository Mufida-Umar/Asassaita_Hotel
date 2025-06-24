<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'Admin@mail.com',
            'password' => Hash::make('password'),
            'confirm_password' => Hash::make('password'),
        ]);
    }
}
