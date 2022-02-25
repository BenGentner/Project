<?php

namespace Database\Seeders;

use App\Models\poll_possible_answers;
use Illuminate\Database\Seeder;

class PollPossibleAnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        poll_possible_answers::factory()->create([
            "poll_id" => 1,
            "title" => "187"
        ]);
        poll_possible_answers::factory()->create([
            "poll_id" => 1,
            "title" => "420"
        ]);
    }
}
