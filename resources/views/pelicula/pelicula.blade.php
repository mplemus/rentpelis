@extends('layouts.home')

@section('hijos')
<!DOCTYPE html>
<html>
    <head>
        <title>Vista Peliculas</title>
        <meta charset= "utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    </head>
    <body>
        <h1>Vista Peliculas</h1><br>
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Titulo</th>
                        <th>Descripcion</th>
                        <th>Genero</th>
                        <th>Año</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peliculas as $pelicula)
                        <tr>
                            <th>{{$pelicula->id}}</th>
                            <th>{{$pelicula->Titulo}}</th>
                            <th>{{$pelicula->Descripcion}}</th>
                            <th>{{$pelicula->Genero}}</th>
                            <th>{{$pelicula->Año}}</th>
                            <th>
                                <form action="pelicula/{{$pelicula->id}}" method="POST">
                                    @csrf
                                    <a href="pelicula/{{$pelicula->id}}/edit" class="btneditar">Editar</a>
                                    <a href="alquilerp/{{$pelicula->id}}" class=btnconsulta>Clientes</a>
                                </form>
                            </th>
                            <th>
                                <form action="pelicula/{{$pelicula->id}}" method="POST">
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