@extends('layouts.master')
@section('content')
<a href="/" class="btn btn-dark">Go Back</a><br><br>
<h1>{{$post->title}}</h1>
<a href="/profile/{{$post->user_id}}" style="text-decoration: none; color: black;"><small>geschreven door {{$post->user->name}} op {{$post->created_at}}</small></a>
<div>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <hr>
    <h4>
    {{$post->body}}
    </h4>
</div>
<hr>
@if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-success">edit</a>
        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'col-xs-offset-2'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
        @elseif(Auth::user()->role == 'admin')
        <a href="/posts/{{$post->id}}/edit" class="btn btn-success">edit</a>
        <br>
        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'col-xs-offset-2'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
        <br>
        <br>
        <br>
        @endif
@endif
@endsection