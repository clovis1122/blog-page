@extends('prototypes.body1')

@section('content')

    <div class="container">
    @foreach ($posts as $post)
        @include('blogdisplay.post')
    @endforeach
    </div>

    @if (count($posts) > 1)
        {{ $posts->links() }}
    @endif

@endsection
