@extends('layout')

@section('titulo', 'Inicio')

@section('contenido')
    <h1>Sales</h1>

    <h2>Ofertas</h2>
    <ul>

        @foreach ($sales as $sale)
            <li>
                @php
                    $precioConDescuento = ($sale->price) - ($sale->discount / 100);
                 
                @endphp
                <p>
                    {{ $sale->sale }} - 
                    {{ $sale->company }} - 
                    Precio: {{ $sale->price }} -
                    Descuento: {{ $sale->discount }} -
                    Precio con descuento {{ $precioConDescuento }}€
                    Expira: {{ $sale->expires }}

                </p>
                
            </li>
        @endforeach

  
    </ul>


@endsection
