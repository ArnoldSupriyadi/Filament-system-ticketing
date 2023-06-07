<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('password'),
                'remember_token' => null,
            ],
            [
                'name' => 'Agent',
                'email' => 'agent@agent.com',
                'password' => bcrypt('password'),
                'remember_token' => null
            ]

            ];

        User::insert($users);
    }
}
