@extends('layouts.home')

@section('hijos')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Pelicula</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
</head>

<body>
<div class="container">
<form action="/pelicula/{{$editpelicula->id}}" method="POST">
    @csrf
    @method('PUT')
    <h1>Editar Pelicula</h1><br>

    <label for="txtid">Id</label>
    <input type="text" name="id" id="id" value="{{$editpelicula->id}}" readonly><br>

    <label for="txtTitulo">Titulo</label>
    <input type="text" name="Titulo" id="Titulo" value="{{$editpelicula->Titulo}}"><br>

    <label for="txtDescripcion">Descripcion</label>
    <input type="text" name="Descripcion" id="Descripcion" value="{{$editpelicula->Descripcion}}"><br>

    <label for="txtid">Genero</label>
    <input type="text" name="Genero" id="Genero" value="{{$editpelicula->Genero}}"><br>

    <label for="txtAño">Año</label>
    <input type="text" name="Año" id="Año" value="{{$editpelicula->Año}}"><br>

    <button type="submit">Aplicar Cambios</button>
</form>
</div>
</body>

@endsection