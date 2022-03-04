<?php

namespace App\Http\Controllers;

use App\Models\poll;
use Illuminate\Http\Request;

class PollController extends Controller
{
    public function show()
    {
        //return view with list of all polls

        $polls = Poll::all();
        return $polls;
    }
    public function index(Poll $poll)
    {
        //return view of a single poll with all possible answers

        $answers = $poll->answers;
        return view("Poll.single_poll", compact('poll', 'answers'));
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
