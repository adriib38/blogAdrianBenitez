@extends('layout')

@section('titulo', 'Login')

@section('contenido')
    <h1>Iniciar sesión</h1>

    <form action="{{route('login')}}" method="POST">
        @csrf

        Name:
        <input type="text" name="name">

        Contraseña:
        <input type="password" name="password">

        <input type="submit" name="enviar" value="Iniciar sesión">
    </form>

    @if($errors->any())
        Hay errores en el formulario: <br>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

@endsection
