{{--This view shows all the answers which have been made to a specific poll --}}

@extends("master")

@section("content")
    <div class="lg:p-6 p-2 w-5/6 bg-gray-100 lg:w-3/4 ">
        <h1>{{$poll->title}}</h1>

        <poll_answers
            :poll="{{$poll}}"
            :poll_answers="{{$poll_answers}}"
            :poll_possible_answer="{{$poll_possible_answers}}"
            :users="{{$users}}"
        ></poll_answers>

    </div>

@endsection

