<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class defaultUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            "name" => "Ben Gentner",
            "email" => "gentners.ben@gmail.com",
            "password" => bcrypt("password"),
            "role_id" => 2,
        ]);
        User::factory()->create([
            "name" => "Test User 1",
            "email" => "test@gmail.com",
            "password" => bcrypt("password"),
            "role_id" => 1,
        ]);
        User::factory()->create([
            "name" => "Test User 2",
            "email" => "test2@gmail.com",
            "password" => bcrypt("password"),
            "role_id" => 1,
        ]);
        User::factory()->create([
            "name" => "Test User 3",
            "email" => "test3@gmail.com",
            "password" => bcrypt("password"),
            "role_id" => 1,
        ]);
    }
}
