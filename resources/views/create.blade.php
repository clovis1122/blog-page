@extends ('mainPrototype')

@section('header')
    @include ('header.headerMaster')
@endsection

@section('body')
    @include('body.createBlog')
@endsection

@section ('footer')
    @include ('footer.footerMaster')
@endsection
