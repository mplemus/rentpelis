@extends('layouts.home')

@section('hijos')
<!DOCTYPE html>
<html>
    <head>
        <title>Vista Alquiler</title>
        <meta charset= "utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    </head>

    <body>
        <h1>Vista Alquiler</h1><br>
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Id Cliente</th>
                        <th>Id Pelicula</th>
                        <th>Fecha Alquiler</th>
                        <th>Fecha Devolucion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alquilers as $alquiler)
                        <tr>
                            <th>{{$alquiler->id}}</th>
                            <th>{{$alquiler->cliente_id}}</th>
                            <th>{{$alquiler->pelicula_id}}</th>
                            <th>{{$alquiler->FechaAlquiler}}</th>
                            <th>{{$alquiler->FechaDevolucion}}</th>
                            <th>
                                <form action="alquiler/{{$alquiler->id}}/edit" method="get">
                                    @csrf
                                    <button class="enviar" type="Submit">Editar</button>
                                </form>
                            </th>
                            <th>
                                <form action="alquiler/{{$alquiler->id}}" method="POST">
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