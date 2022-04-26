<?php

namespace App\Http\Controllers;

use App\Models\Poll;
use App\Models\Poll_answers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use PhpParser\Node\Expr\Array_;

class PollAnswersController extends Controller
{
    public function index(Poll $poll)
    {
        //return view of a single poll with the possibility to answer the poll

        $answers = $poll->answers;
        return view("Poll.single_poll", compact('poll', 'answers'));
    }


    public function store(Poll $poll)
    {
        \request()->validate([
            "username" => "required", Rule::unique("poll_answers", "username")
        ]);
        $possible_answers = $poll->answers;

        $this->delete($poll);

        foreach ($possible_answers as $possible_answer)
        {
            if(request()->options[$possible_answer->poll_answer_nr - 1] == 1)
            {
                Poll_answers::create([
                    'user_id' => auth()->id(),
                    'username' => \request("username"),
                    'answer_id' => $possible_answer->id,
                ]);
            }
        }

        return "success!";
    }

    public function delete(Poll $poll)
    {
        $poll_answers_id = $poll->answers->pluck('id')->toArray();

        $poll_answers = DB::table('poll_answers')
            ->where('user_id', "=", auth()->id())
            ->whereIn('answer_id', $poll_answers_id)->delete();

        return "delete successful";
    }
}
