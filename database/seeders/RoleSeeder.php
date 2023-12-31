<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'Admin']);
        $pengelola = Role::create(['name' => 'Pengelola']);

        $admin->givePermissionTo([
            'create-user',
            'edit-user',
            'delete-user',
            'create-role',
            'edit-role',
            'edit-product',
            'delete-product',
            'delete-role'
        ]);

        $pengelola->givePermissionTo([
            'create-product',
            'edit-product',
            'delete-product'
        ]);

        
    }
}
