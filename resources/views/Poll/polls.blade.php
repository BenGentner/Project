{{-- probably changed to a vue component --}}


@extends("master")

@section("content")
    <div class="p-6 bg-gray-100 w-75 ">
        @foreach($polls as $poll)
            <a href="poll/{{$poll->url}}">{!! $poll->title !!}</a>

        @endforeach
    </div>

@endsection
