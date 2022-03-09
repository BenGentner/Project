@extends("master")

@section("content")
        <div class="p-6 bg-gray-100 w-75 ">
            <h1>
                {!! $page->title !!}
            </h1>

            {!!  $page->content !!}
        </div>

@endsection
