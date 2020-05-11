@extends('layouts.master')
@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card card-body bg-light">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>written on {{$post->created_at}}</small>
            </div>
            <br>
        @endforeach
        <br>
        {{$posts->links()}}
    @else
        <p>no posts found</p>
    @endif
@endsection