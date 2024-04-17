@extends('layouts.home')

@section('hijos')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Pelicula</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
</head>
<body>
    <div class="container">
        <form action="/pelicula" method="POST">
            @csrf
            <h1>Nueva Pelicula</h1><br>

            <label for="">Titulo</label>
            <input type="text" name="Titulo" id="Titulo"><br>
        
            <label for="">Descripcion</label>
            <input type="text" name="Descripcion" id="Descripcion"><br>
        
            <label for="">Genero</label>
            <input type="text" name="Genero" id="Genero"><br>
        
            <label for="">Año</label>
            <input type="text" name="Año" id="Año"><br>
        
            <button type="submit">Registrar</button>
        </form>
    </div>
</body>
</html>

@endsection