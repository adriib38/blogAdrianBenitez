@extends('layout')

@section('titulo', 'Post con id '.$post->id)

@section('contenido')
    <h1>{{ $post->title }}</h1>
    <p>Writter by {{$writter->nick}}</p>
    <p>{{ $post->content }}</p>
    <a href="{{$post->id}}/editar">Editar post</a>


    <form action="{{route('posts.destroy', $post->id)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar post</button>
    </form>

@endsection
