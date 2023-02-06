@extends('layout')

@section('titulo', 'Registro')

@section('contenido')
    <h1>Nuevo usuario</h1>

    <form action="{{route('registro')}}" method="POST">
        @csrf

        Name:
        <input type="text" name="name">

        Email:
        <input type="email" name="mail">

        Contraseña:
        <input type="password" name="password">

        Confirma contraseña:
        <input type="password" name="password_confirmation">

        <input type="submit" name="enviar" value="Registrarme">
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
