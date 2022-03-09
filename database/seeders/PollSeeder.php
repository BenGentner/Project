<?php

namespace Database\Seeders;

use App\Models\poll;
use Illuminate\Database\Seeder;

class PollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Poll::factory()->create([
            "title" => "Umfrage 1",
            "user_id" => 1,
            "url" => "umfrage_1",
        ]);
        Poll::factory()->create([
            "title" => "Umfrage 2",
            "user_id" => 1,
            "url" => "umfrage_2",
        ]);

        \DB::table("poll_role")->insert([
            "role_id" => 1,
            "poll_id" => 1
        ]);
        \DB::table("poll_role")->insert([
            "role_id" => 2,
            "poll_id" => 2
        ]);
        \DB::table("poll_role")->insert([
            "role_id" => 1,
            "poll_id" => 2
        ]);
        \DB::table("poll_role")->insert([
            "role_id" => 2,
            "poll_id" => 1
        ]);
    }
}
