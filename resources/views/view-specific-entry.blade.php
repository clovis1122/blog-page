@extends ('prototypes.mainpage1')

@include ('prototypes.menu1')
@include('blogdisplay.post')

<hr>

@if($newmessage = session('message'))
    @include('prototypes.alert1',compact('newmessage'))
<hr>
@endif

@include('comment.display-comment')

@if(Auth::check())
    @include('comment.create-comment')
@endif

@include ('prototypes.footer1')
