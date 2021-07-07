@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('posts.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input name="title" type="text" class="form-control" id="title" >
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <input name="content" type="text" class="form-control" id="content" >
            </div>
            <button type="submit" class="btn btn-primary">
                Add Post
            </button>
        </form>
    </div>
@endsection
