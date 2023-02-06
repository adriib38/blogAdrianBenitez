@extends('layout')

@section('titulo', 'Nuevo post')

@section('contenido')
    <h1>Nuevo post</h1>

    <form action="{{route('posts.store')}}" method="POST">
        @csrf

        <label for="titulo">Título</label>
        <input type="text" name="titulo" id="titulo" value="{{old('titulo')}}">
        <br>
      
        <label for="contenido">Contenido</label>
        <input type="text" name="contenido" id="contenido" value="{{old('contenido')}}">
        <br>
       
        <label for="visibilidad">Visible</label>
        <input type="checkbox" name="visibilidad" id="visibilidad">

        <select name="autor" id="autor">
            @foreach ($autores as $autor)
               <option value="{{$autor->id}}">{{$autor->nick}}</option>
            @endforeach
        </select>
        <br>
        <input type="submit" value="Guardar">
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
