@extends('layouts.home')

@section('hijos')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Alquiler</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">

</head>
<body>

<div class="container">
<form action="/alquiler/{{$editalquiler->id}}" method="POST">
    @csrf
    @method('PUT')
    <h1>Editar Alquiler</h1><br>

    <label for="txtid">Id</label>
    <input type="text" name="id" id="id" value="{{$editalquiler->id}}" readonly><br>

    <label for="txtcliente_id">cliente_id</label>
    <input type="text" name="cliente_id" id="cliente_id" value="{{$editalquiler->cliente_id}}" readonly><br>

    <label for="txtpelicula_id">pelicula_id</label>
    <input type="text" name="pelicula_id" id="pelicula_id" value="{{$editalquiler->pelicula_id}}" readonly><br>

    <label for="txtFechaAlquiler">FechaAlquiler</label>
    <input type="date" name="FechaAlquiler" id="FechaAlquiler" value="{{$editalquiler->FechaAlquiler}}" readonly><br>

    <label for="txtFechaDevolucion">FechaDevolucion</label>
    <input type="date" name="FechaDevolucion" id="FechaDevolucion" value="{{$editalquiler->FechaDevolucion}}"><br>

    <button type="submit">Aplicar Cambios</button>
</form>
</div>
</body>
@endsection