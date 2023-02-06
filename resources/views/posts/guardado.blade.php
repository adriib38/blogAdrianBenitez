@extends('layout')

@section('titulo', 'Post guardado')

@section('contenido')
    <h1>Post guardado</h1>
    <p>Post guardado con el título {{$post->title}}</p>

@endsection
