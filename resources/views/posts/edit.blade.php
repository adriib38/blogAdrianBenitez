@extends('layout')

@section('titulo', 'Editar post')

@section('contenido')
    <h1>Editar post</h1>

    <form action="{{route('posts.update', ['post' => $post->slug])}}" method="POST">
        @csrf

        @method('put')

        <label for="titulo">Título</label>
        <input type="text" name="titulo" id="titulo" value="{{$post->title}}"> 
        <br>
      
        <label for="contenido">Contenido</label>
        <input name="contenido" id="contenido" value="{{$post->content}}">
        <br>
       
        <label for="visibilidad">Visible</label>
        <input type="checkbox" name="visibilidad" id="visibilidad" {{$post->visibilidad==1 ? 'checked' : ''}}>
        <br>

        <select name="autor" id="autor">
            @foreach ($autores as $autor)
                <option value="{{$autor->id}}" {{$autor->id==$post->writer_id ? 'selected':''}}>{{$autor->nick}}</option>
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
