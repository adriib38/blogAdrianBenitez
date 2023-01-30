@extends('layout')

@section('titulo', 'Sales de la empresa '.$companyName)

@section('contenido')
    <h1>Ofertas de la empresa {{$companyName}}</h1>
    <p>Id: {{$companyName}}</p>
    <ul>
        @foreach ($sales as $sale)
            <li>
                <a href="{{route('sales.show', $sale->id)}}">{{$sale->sale}}</a>
            </li>
        @endforeach
    </ul>
@endsection
