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
            "title" => "C#",
        ]);
        poll_possible_answers::factory()->create([
            "poll_id" => 1,
            "poll_answer_nr" => 2,
            "title" => "Java"
        ]);


        poll_possible_answers::factory()->create([
            "poll_id" => 2,
            "poll_answer_nr" => 1,
            "title" => "Antwort 1"
        ]);
        poll_possible_answers::factory()->create([
            "poll_id" => 2,
            "poll_answer_nr" => 2,
            "title" => "Antwort 2"
        ]);
        poll_possible_answers::factory()->create([
            "poll_id" => 2,
            "poll_answer_nr" => 3,
            "title" => "Antwort 3"
        ]);
    }
}
