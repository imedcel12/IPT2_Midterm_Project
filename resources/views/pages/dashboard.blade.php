@extends('base')

@section('mytitle', '| Dashboard')

@section('content')

@include('partials.info_msg')

@include('partials.create')
    <div class="float-right mt-2">
        <button class="btn btn-outline-primary" data-toggle="modal" data-target="#createPostModal">
            <img src="https://cdn-icons-png.flaticon.com/512/3384/3384438.png" width="25" height="25" class="rounded"> Add Post
        </button>
    </div>
    <h1 class="font-weight-dark text-white mb-2 mt-3"> Recent Post</h1> <hr>
    <div class="container p-3 dashcon rounded mb-3" style="background-color: rgb(253, 238, 220, 0.2)">
        @foreach($posts as $post)
        @include('partials.post-card')
        @endforeach
    </div>
@endsection
