@extends('layouts.app')
@section('title')Add Title
@endsection
@section('content')
    <div class="container">
        @if(isset($posts))
            @foreach($posts as $post)
                <div>{{$post -> title}}</div>
                <div>{{$post -> content}}</div>
                <ul>
                    @foreach($comment as $com)
                        <li>{{$com->comments}}</li>
                    @endforeach
                </ul>
                <div>
                    <form action="{{ route('comment.store')}}" method="post">
                        @csrf
                        <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
                        <button type="submit" class="btn btn-info">Add Comment</button>
                    </form>
                </div>
            @endforeach
        @endif
    </div>
@endsection
