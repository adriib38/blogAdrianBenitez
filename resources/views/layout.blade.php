<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo') - Adrián</title>
</head>
    <body>
        @include('partials.nav')
        <div id="contenido">
            @yield('contenido')
        </div>
        @include('partials.pie')
    </body>
</html>