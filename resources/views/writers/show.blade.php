@extends('layout')

@section('titulo', 'Writer')

@section('contenido')
<h1>{{$writer->nick }}</h1>


    <p>
        Mail: {{$writer->email}}
    </p>


    @foreach ($writer->posts as $post)
        <p>
            <a href="{{route('posts.show', $post)}}">{{$post->title}}</a>
        </p>
    @endforeach
    



    

@endsection
