@extends('base')

@section('content')

<div class="mt-5 text-center">
<div class="container text-white pt-5">
        <h1 class="font-weight-light">Welcome to <strong> CheapTalk</strong> <img src="https://cdn-icons-png.flaticon.com/512/610/610413.png" width="50" height="50" class="rounded"> <hr>
        <h5 class="font-weight-light mt-4 text-faded">CheapTalk.com is a startup social media platform that allows users to post concise content of up to 255 characters. </h5>
        @if (!Auth::check())
            <a href="{{url('/register')}}" class="btn btn-outline-warning mt-5 font-weight-dark"> Register Now! </a>
        @endif
    </div>
</div>
@stop
