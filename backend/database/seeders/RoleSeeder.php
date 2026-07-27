<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::firstOrCreate(
            ['name' => 'Admin'],
            [
                'description' => 'Administrator role with full access to the system.',
            ]
        );

        Role::firstOrCreate(
            ['name' => 'User'],
            [
                'description' => 'Regular user role with limited access to the system.',
            ]
        );

    }
}
