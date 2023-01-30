@extends('layout')

@section('titulo', 'Edición del post '.$post->id)

@section('contenido')
    <h1>Edición del post {{$post->id}}</h1>
@endsection
