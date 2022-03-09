<?php

namespace Database\Seeders;

use App\Models\Poll_answers;
use App\Models\Poll_possible_answers;
use Illuminate\Database\Seeder;

class PollAnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Poll_answers::factory()->create([
            "answer_id" => 1,
            "user_id" => 1
        ]);
        Poll_answers::factory()->create([
            "answer_id" => 4,
            "user_id" => 1
        ]);
        Poll_answers::factory()->create([
            "answer_id" => 5,
            "user_id" => 1
        ]);
        Poll_answers::factory()->create([
            "answer_id" => 5,
            "user_id" => 2
        ]);
        Poll_answers::factory()->create([
            "answer_id" => 3,
            "user_id" => 3
        ]);
        Poll_answers::factory()->create([
            "answer_id" => 2,
            "user_id" => 3
        ]);
    }

}
