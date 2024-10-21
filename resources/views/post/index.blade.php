@extends('layout.main')
@section('content')
    <h1 style="text-align: center; margin: 35px 0">Posts</h1>

    <div style="margin: 15px 0;">
        <a style="text-decoration: none;" href="{{ route('post.create') }}">Добавить запись</a>
    </div>

    <div>
        @foreach($posts as $post)
            <div class="card-body" style="margin-bottom: 10px;">
                <span>{{$post->id}}. </span><a href="{{route('post.show', $post->id)}}" class="card-title"
                                               target="_blank">{{$post->title}}</a>
            </div>
        @endforeach
    </div>
@endsection
