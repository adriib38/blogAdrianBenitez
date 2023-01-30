<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Libros</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <h1>Libros</h1>

        <!--
        <?php
            echo '<ul>';
            foreach($libros as $libro){
                echo '<li>';
                echo $libro["titulo"].', ';
                echo $libro["autor"].', ';
                echo $libro["anyo"].'. ';
                echo '</li>';
            }
            echo '</ul>';
        ?>
        -->
            
        @each('partials.fichalibro', $libros, 'libro')
        
    </body>
</html>
