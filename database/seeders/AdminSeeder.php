<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Admin User

        // Creating Admin User
        $admin = User::create([
            'name' => 'Alfi Daulay', 
            'email' => 'alfi@gmail.com',
            'password' => Hash::make('alfi1234')
        ]);
        $admin->assignRole('Admin');

        // Creating Pengelola User
        $pengelola = User::create([
            'name' => 'alfialfi', 
            'email' => 'alfi123@gmail.com',
            'password' => Hash::make('alfi12345')
        ]);
        $pengelola->assignRole('Pengelola');
        
    }
}
