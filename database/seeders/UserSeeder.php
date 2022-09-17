<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Harsh Vishwakarma',
                'email' => 'harshprogrammer782@gmail.com',
                'password' => bcrypt('password'),
                'username' => 'devguy',
                'profile_photo_path' =>
                'https://avatars.githubusercontent.com/u/64343449?v=4',
            ],
            [
                'name' => 'Test User',
                'email' => 'email@gmail.com',
                'password' => bcrypt('password'),
                'username' => 'user',
                'profile_photo_path' =>
                'https://avatars.githubusercontent.com/u/64343449?v=4',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }

    }
}
