@extends('layouts.master')
@section('content')
<a href="/" class="btn btn-dark">Go Back</a><br><br>
<h1>{{$post->title}}</h1>
<small>Written on {{$post->created_at}}</small>
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
        <a href="/posts/{{$post->id}}/edit" class="btn btn-dark">edit</a>
        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-dark'])}}
        {!!Form::close()!!}
        @elseif(Auth::user()->role == 'admin')
        <a href="/posts/{{$post->id}}/edit" class="btn btn-dark">edit</a>
        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-dark'])}}
        {!!Form::close()!!}
        @endif
@endif
@endsection