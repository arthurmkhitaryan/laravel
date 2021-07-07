@extends('layouts.app')
@section('title')Add Title
@endsection
@section('content')
    <div class="container">
        @if(isset($posts))
            @foreach($posts as $post)
                <div>{{$post -> post_title}}</div>
                <div>{{$post -> post_content}}</div>
                <div>
                    <form action="{{route('posts.index', $post -> id)}}" method="get">
                        @csrf
                        <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
                        <button type="submit" class="btn btn-info">Add Comment</button>
                    </form>
                </div>
            @endforeach
        @endif

    </div>
@endsection
