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
        ]);
    }
}
