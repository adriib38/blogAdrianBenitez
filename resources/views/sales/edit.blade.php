@extends('layout')

@section('titulo', 'Edición de oferta '.$sale->id)

@section('contenido')
    <h1>Edición de la oferta: {{$sale->sale}}</h1>
@endsection
