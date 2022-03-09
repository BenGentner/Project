@extends("master")

@section("content")
    <div class="p-6 bg-gray-100 w-75 ">
        <single_poll v-bind:data="{{$poll}}" v-bind:data="{{$answers}}"></single_poll>

        {{--        {!! $poll->answer !!}}--}}
    </div>

@endsection
