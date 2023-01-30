@extends('layout')

@section('titulo', '{{$sale->sale}}')

@section('contenido')
    <h1>{{$sale->sale}} - Adrián Benítez</h1>

    <a href="{{$sale->id}}/editar">Editar oferta</a>
@endsection
