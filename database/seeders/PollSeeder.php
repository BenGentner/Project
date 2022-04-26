<?php

namespace Database\Seeders;

use App\Models\Poll;
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
            "title" => "Zeltlager 2022 - Anwesenheit",
            "user_id" => 2,
            "url" => "zeltlager2022-anwesenheit",
        ]);


        \DB::table("poll_role")->insert([
            "role_id" => 1,
            "poll_id" => 1
        ]);
        \DB::table("poll_role")->insert([
            "role_id" => 2,
            "poll_id" => 1
        ]);
    }
}
