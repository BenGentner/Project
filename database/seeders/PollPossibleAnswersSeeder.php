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
            "poll_answer_nr" => 1,
            "title" => "187",
        ]);
        poll_possible_answers::factory()->create([
            "poll_id" => 1,
            "poll_answer_nr" => 2,
            "title" => "420"
        ]);


        poll_possible_answers::factory()->create([
            "poll_id" => 2,
            "poll_answer_nr" => 1,
            "title" => "CP2077"
        ]);
        poll_possible_answers::factory()->create([
            "poll_id" => 2,
            "poll_answer_nr" => 2,
            "title" => "OW2"
        ]);
        poll_possible_answers::factory()->create([
            "poll_id" => 2,
            "poll_answer_nr" => 3,
            "title" => "W3"
        ]);
    }
}
