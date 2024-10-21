@extends('layout.main')
@section('content')
    <form method="post" action="{{ route('post.update', $post->id) }}">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="title" class="form-label">Title for post:</label>
            <input name="title" type="text" class="form-control" id="title"
                   placeholder="title" value="{{$post->title}}"><br/>

            <label for="content" class="form-label">Content for post:</label>
            <textarea rows="4" cols="50"
                      name="content" class="form-control" id="content" placeholder="content">
            {{$post->content}}
            </textarea><br/>
            <label for="image" class="form-label">Image for post:</label>
            <input name="image" type="text" class="form-control" id="image"
                   placeholder="image" value="{{$post->image}}"><br/>
        </div>
        <button name="create" type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
