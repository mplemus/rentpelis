<!DOCTYPE html>
<html>
    <head>
        <title>Home RentPelis</title>
        <meta charset= "utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <body>
        <header>
            <nav>
                <div class="rentpelis">Rent Pelis</div>
                <ul class="menu">
                    <li>
                        <a href="/home">Inicio</a>
                    </li>
                    <li >
                        <a href="/cliente">Módulo Clientes</a>
                        <ul class=submenu>
                            <li>
                                <a href="/cliente/create">Nuevo</a>
                            </li>
                        </ul>
                    </li>
                    <li >
                        <a href="/pelicula">Módulo Peliculas</a>
                        <ul class=submenu>
                            <li>
                                <a href="/pelicula/create">Nuevo</a>
                            </li>
                        </ul>
                    </li>
                    <li >
                        <a href="/alquiler">Módulo Alquiler</a>
                        <ul class=submenu>
                            <li>
                                <a href="/alquiler/create">Nuevo</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        @yield('hijos')
    </body>
</html>