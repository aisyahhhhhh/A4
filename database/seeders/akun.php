<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class akun extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create admin account
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin'),
            'role' => 'admin', // assuming 'role' is a column in the users table to represent user role
        ]);

        // Create guru account
        User::create([
            'name' => 'Guru',
            'email' => 'guru@example.com',
            'password' => Hash::make('guru'),
            'role' => 'guru', // assuming 'role' is a column in the users table to represent user role
        ]);
    }
}
