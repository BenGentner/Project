<?php

namespace Database\Seeders;

use App\Models\Poll_possible_answers;
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
        poll_possible_answers::create([
            "poll_id" => 1,
            "poll_answer_nr" => 1,
            "title" => "Freitag",
        ]);
        poll_possible_answers::create([
            "poll_id" => 1,
            "poll_answer_nr" => 2,
            "title" => "Samstag"
        ]);
        poll_possible_answers::create([
            "poll_id" => 1,
            "poll_answer_nr" => 3,
            "title" => "Sonntag",
        ]);
        poll_possible_answers::create([
            "poll_id" => 1,
            "poll_answer_nr" => 4,
            "title" => "Montag"
        ]);
        poll_possible_answers::create([
            "poll_id" => 1,
            "poll_answer_nr" => 5,
            "title" => "Dienstag",
        ]);
        poll_possible_answers::create([
            "poll_id" => 1,
            "poll_answer_nr" => 6,
            "title" => "Mittwoch"
        ]);
        poll_possible_answers::create([
            "poll_id" => 1,
            "poll_answer_nr" => 7,
            "title" => "Donnerstag",
        ]);
        poll_possible_answers::create([
            "poll_id" => 1,
            "poll_answer_nr" => 8,
            "title" => "Freitag"
        ]);
        poll_possible_answers::create([
            "poll_id" => 1,
            "poll_answer_nr" => 9,
            "title" => "Samstag",
        ]);
        poll_possible_answers::create([
            "poll_id" => 1,
            "poll_answer_nr" => 10,
            "title" => "Schnipo (Sonntag)"
        ]);

    }
}
