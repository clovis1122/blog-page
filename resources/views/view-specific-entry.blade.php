@extends ('prototypes.mainpage1')

@include ('prototypes.menu1')
@include('blogdisplay.post')
<hr>
@if($newmessage = session('message'))
 @include('prototypes.alert1',compact('newmessage'))
<hr>
@endif

@include('comment.display-comment')
@include('comment.create-comment')

@include ('prototypes.footer1')
