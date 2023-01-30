@extends('layout')

@section('titulo', 'Writers')

@section('contenido')
<h1>Writers</h1>
    <ul>
        @foreach ($writers as $writer)
            <li>
                <a href="/writers/{{ $writer->id }}">{{ $writer->nick }}</a>
            </li>
        @endforeach
    </ul>

@endsection
