@extends('layouts.home')

@section('hijos')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Cliente</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
</head>

<body>
    <div class="container">
        <form action="/cliente" method="POST">
            @csrf
            <h1>Nuevo Cliente</h1><br>

            <label for="">Nombre</label>
            <input type="text" name="Nombre" id="Nombre"><br>

            <label for="">Apellido</label>
            <input type="text" name="Apellido" id="Apellido"><br>

            <label for="">Direccion</label>
            <input type="text" name="Direccion" id="Direccion"><br>

            <label for="">Telefono</label>
            <input type="text" name="Telefono" id="Telefono"><br>

            <button type="submit">Registrar</button>
        </form>
    </div>
</body>

</html>

@endsection