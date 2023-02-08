@extends('layout')

@section('titulo', 'Inicio')

@section('contenido')
    <h1>Soy Adrián Benítez, bienvenido a mi blog</h1>

    @auth
        <p>Logeado: {{auth()->user()->name}}</p>
    @endauth

@endsection
