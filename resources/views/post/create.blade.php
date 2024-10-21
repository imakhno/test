@extends('layout.main')
@section('content')
    <form method="post" action="{{ route('post.store') }}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title for post:</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="title"><br/>

            <label for="content" class="form-label">Content for post:</label>
            <textarea name="content" class="form-control" id="content" placeholder="content">
                </textarea><br/>
            <label for="image" class="form-label">Image for post:</label>
            <input name="image" type="text" class="form-control" id="image" placeholder="image"><br/>
        </div>
        <button name="create" type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
