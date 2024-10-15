@extends('layout.home')
@section('content')
    <h1 style="text-align: center">Posts</h1>
        @foreach($posts as $post)
            <div style="border: 1px solid black; width: 350px; margin: 10px auto">
                <div>{{$post->image}}</div>
                <h2 style="text-align: center">{{$post->title}}</h2>
                <p>{{$post->content}}</p>
            </div>
        @endforeach
@endsection
