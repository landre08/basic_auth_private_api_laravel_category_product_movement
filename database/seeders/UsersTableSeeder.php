<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'User 1',
                'email' => 'user_um@gmail.com',
                'password' => bcrypt('abc123'),
                'active' => true,
            ],
            [
                'name' => 'User 2',
                'email' => 'user_dois@gmail.com',
                'password' => bcrypt('abc123'),
                'active' => true,
            ],
            [
                'name' => 'User 3',
                'email' => 'user_tres@gmail.com',
                'password' => bcrypt('abc123'),
                'active' => true,
            ],
        ];

        DB::table('users')->insert($users);
    }
}
