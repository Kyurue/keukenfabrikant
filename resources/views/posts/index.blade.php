@extends('layouts.master')
@section('content')
@push('css')

<style>
    .favorite_posts {
        background-color: red;
    }
</style>

@endpush
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card card-body bg-light">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>written on {{$post->created_at}}</small>
            @Auth   
            <a href="javascript:void(0);" onclick="document.getElementById('favorite-form-{{ $post->id }}').submit();">
                <i class="fas fa-heart"></i>
            </a>
                
                <form id="favorite-form-{{ $post->id }}" method="POST" action="{{ route('post.favorite', $post->id) }}" style="display: none;">
                    @csrf
                    
                </form>
            @endauth
            </div>
            <br>
        @endforeach
        <br>
        {{$posts->links()}}
    @else
        <p>no posts found</p>
    @endif
@endsection