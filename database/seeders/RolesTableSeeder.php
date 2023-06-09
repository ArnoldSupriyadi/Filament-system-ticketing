<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'id' => 1,
                'title' => Role::ROLES['Admin'],
            ],
            [
                'id' => 2,
                'title' => Role::ROLES['Agent'],
            ],
        ];


        Role::insert($roles);
    }
}
