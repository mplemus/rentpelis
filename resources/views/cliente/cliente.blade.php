@extends('layouts.home')

@section('hijos')

<!DOCTYPE html>
<html>
    <head>
        <title>Vista Clientes</title>
        <meta charset= "utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    </head>

    <body>
        <h1>Vista Clientes</h1><br>
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            <th>{{$cliente->id}}</th>
                            <th>{{$cliente->Nombre}}</th>
                            <th>{{$cliente->Apellido}}</th>
                            <th>{{$cliente->Direccion}}</th>
                            <th>{{$cliente->Telefono}}</th>
                            <th>
                                <form action="/cliente/{{$cliente->id}}" method="POST">
                                    @csrf
                                    <a href="cliente/{{$cliente->id}}/edit" class="btneditar">Editar</a>
                                    <a href="alquiler/{{$cliente->id}}" class="btnconsulta">Peliculas</a>
                                </form>
                            </th>
                            <th>
                                <form action="cliente/{{$cliente->id}}" method="POST">
                                    @csrf
                                    @method('Delete')
                                    <button class="eliminar" type="Submit">Eliminar</button>
                                </form>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>

@endsection
