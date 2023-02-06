@extends('layout')

@section('titulo', 'Post con id '.$post->id)

@section('contenido')
    <h1>{{ $post->title }}</h1>
    <p>Writer by {{$writer->nick}}</p>
    <p>{{ $post->content }}</p>
    <a href="{{$post->slug}}/editar">Editar post</a>


    <form action="{{route('posts.destroy', $post->slug)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar post</button>
    </form>

@endsection
