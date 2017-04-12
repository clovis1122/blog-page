@extends('prototypes.body1')

@section('content')

    <div class="container">
        @each('blogdisplay.post',$posts,'post')
    </div>

    @if (count($posts) > 1)
        {{ $posts->links() }}
    @endif

@endsection
