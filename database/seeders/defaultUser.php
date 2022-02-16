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
    }
}
