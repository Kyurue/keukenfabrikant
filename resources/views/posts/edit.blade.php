@extends('layouts.master')
@section('content')
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <h2>Edit Post</h2>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['placeholder' => 'Title', 'class' =>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'placeholder' => 'Body', 'class' =>'form-control'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class' =>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection