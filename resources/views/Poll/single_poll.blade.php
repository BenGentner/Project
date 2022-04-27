@extends("master")

@section("content")
    <div class="lg:p-6 p-2 w-5/6 bg-gray-100 lg:w-3/4 ">
        <single_poll v-bind:data="{{$poll}}" v-bind:data="{{$answers}}">
            {{ csrf_field() }}
        </single_poll>

        {{--        {!! $poll->answer !!}}--}}
    </div>

@endsection
