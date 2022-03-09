{{--This view shows all the answers which have been made to a specific poll --}}

@extends("master")

@section("content")
    <div class="p-6 bg-gray-100 w-75 ">
        <h1>{{$poll->title}}</h1>

        <poll_answers
            :poll="{{$poll}}"
            :poll_answers="{{$poll_answers}}"
            :poll_possible_answer="{{$poll_possible_answers}}"
            :users="{{$users}}"
        ></poll_answers>

    </div>

@endsection

