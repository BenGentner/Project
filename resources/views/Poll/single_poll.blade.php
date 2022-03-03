{{--will maybe changed to a vue component--}}

@extends("master")

@section("content")
    <div class="p-6 bg-gray-100 w-75 ">
        <h1>
            {!! $poll->title !!}
        </h1>

        {!!  $poll->answers !!}
    </div>

@endsection
