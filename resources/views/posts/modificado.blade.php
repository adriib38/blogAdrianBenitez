@extends('layout')

@section('titulo', 'Post modificado')

@section('contenido')
    <h1>Post modificado</h1>
    <p>Post modificado con el título {{$post->title}}</p>

@endsection
