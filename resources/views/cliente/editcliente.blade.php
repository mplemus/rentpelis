@extends('layouts.home')

@section('hijos')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Cliente</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
</head>

<body>
<div class="container">
<form action="/cliente/{{$editcliente->id}}" method="POST">
    @csrf
    @method('PUT')
    <h1>Editar Cliente</h1><br>

    <label for="txtid">Id</label>
    <input type="text" name="id" id="id" value="{{$editcliente->id}}" readonly><br>

    <label for="txtnombre">Nombre</label>
    <input type="text" name="Nombre" id="Nombre" value="{{$editcliente->Nombre}}"><br>

    <label for="txtapellido">Apellido</label>
    <input type="text" name="Apellido" id="Apellido" value="{{$editcliente->Apellido}}"><br>

    <label for="txtid">Direccion</label>
    <input type="text" name="Direccion" id="Direccion" value="{{$editcliente->Direccion}}"><br>

    <label for="txttelefono">Telefono</label>
    <input type="text" name="Telefono" id="Telefono" value="{{$editcliente->Telefono}}"><br>

    <button type="submit">Aplicar Cambios</button>
</form>
</div>
</body>

@endsection