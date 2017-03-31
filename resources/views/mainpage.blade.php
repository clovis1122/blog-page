@extends ('prototypes.mainpage1')

@include ('prototypes.menu1')
@include ('prototypes.banner1')

@if($newmessage = session('message'))
 @include('prototypes.alert1',compact('newmessage'))
@endif

@include('blogdisplay.content')
@include ('prototypes.footer1')
