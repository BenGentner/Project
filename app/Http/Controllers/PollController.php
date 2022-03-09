<?php

namespace App\Http\Controllers;

use App\Models\poll;
use App\Models\User;
use DB;
use Illuminate\Http\Request;

class PollController extends Controller
{
    public function show()
    {
        //return json of all polls

        $polls = Poll::all();
        return $polls;
    }
    public function index(Poll $poll)
    {
        //return view of a single poll with all answers

        $poll_possible_answers = $poll->answers;

        $poll_answers_id = $poll->answers->pluck('id')->toArray();

        $poll_answers = DB::table('poll_answers')
            ->whereIn('answer_id', $poll_answers_id)->get();

        $users = DB::table('users')
            ->whereIn('role_id', $poll->roles->pluck('id'))->get();

        return view("Poll.answer_poll", compact('poll', 'poll_answers', 'poll_possible_answers', 'users'));
    }






    public function create()
    {
        //return crete view
    }
    public function store()
    {
        //post method called by create view
        // request()->validate([]);
        //Poll:create
    }

    public function edit(Poll $poll)
    {
        //return edit view
    }

    public function update(Poll $poll)
    {
        //post method called by edit view
    }

    public function destroy(Poll $poll)
    {
        //delete poll
        $poll->delete();

        return redirect('/poll')->with('success', 'Poll has been removed');
    }

}
