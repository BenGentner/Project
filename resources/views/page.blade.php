@extends("master")

@section("content")
        <div class="lg:p-6 p-2 w-5/6 bg-gray-100 lg:w-3/4 ">
            <h1>
                {!! $page->title !!}
            </h1>

            {!!  $page->content !!}
        </div>

@endsection
