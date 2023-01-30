@extends('layout')

@section('titulo', 'Listado de posts')

@section('contenido')
    <h1>Listado de posts - Adrián Benítez</h1>
    <ul>
        @foreach ($posts as $post)
            <li>
                <h2>{{ $post->title }}</h2>
                <a href="{{ route('posts.show', $post->id) }}">Ver post</a>
                <p>{{ $post->nick }}</p>
        @endforeach
    </ul>

        {{$posts->links()}}


        
@endsection
