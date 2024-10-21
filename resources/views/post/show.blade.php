@extends('layout.main')
@section('content')
    <div style="margin: 15px 0;">
        <a style="text-decoration: none;" href="{{ route('post.index') }}"><- Назад</a>
    </div>
    <div style="display: flex; justify-content: center;">
        <div class="card" style="width: 18rem; margin-bottom: 20px">
            <img src="{{$post->image}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->content}}</p>
            </div>
        </div>
    </div>

    <div style="margin: 15px 0;">
        <a style="text-decoration: none;" href="{{ route('post.edit', $post->id) }}">Обновить запись</a>
    </div>
    <div style="margin: 15px 0;">
        <form action="{{ route('post.delete', $post->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" name="destroy" value="Удалить запись">
        </form>
    </div>
@endsection
