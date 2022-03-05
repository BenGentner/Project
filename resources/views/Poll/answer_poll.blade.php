{{--This view shows all the answers which have been made to a specific poll --}}

@extends("master")

@section("content")
    <div class="p-6 bg-gray-100 w-75 ">
        <h1>{{$poll->title}}</h1>


        <table class="table">
            <thead>
                <tr>
                    @foreach($poll_possible_answers as $possible_answer)
                        <th> {{$possible_answer->title}} </th>
                    @endforeach
                </tr>
            </thead>
            <tfoot>
{{--            foreach user which has access to the poll => on row with in the table --}}
{{--            if he answered that row add an x at that place --}}
{{--            users which have access to the poll have to be added as a var in the controller--}}
                <tr></tr>
            </tfoot>
        </table>

        {{$poll_answers}}

    </div>

@endsection
