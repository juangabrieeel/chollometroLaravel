<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CholloOfertas</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> <!-- Agrega el enlace a tu archivo de estilos CSS -->
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-brand">
            <a href="{{ route('chollos.index') }}" class="logo">Chollo <span class="subtitle">░▒▓ Ofertas</span></a>
        </div>
        <div class="nav-links">
            <a href="{{ route('chollos.index') }}">Inicio</a>
            <a href="#">Nuevos</a>
            <a href="#">Destacados</a>
        </div>
    </nav>

    <!-- Contenido dinámico -->
    <div class="container flex-grow-1">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="footer mt-auto">
        <p>&copy; Juan Gabriel Caro Diaz {{ date('Y') }}</p>
    </footer>

</body>

</html>
