@extends('layout')

@section('titulo', 'Writer')

@section('contenido')
<h1>{{$writer->nick }}</h1>

    <p>
        Mail: {{$writer->email}}
    </p>
   
    @foreach ($writer->posts as $post)
    <li>
        <a href="{{route('posts.show', $post->slug)}}">{{$post->title}}</a>
    </li>
    @endforeach

@endsection
