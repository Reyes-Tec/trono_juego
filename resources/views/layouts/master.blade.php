<!-- resources/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title> <!-- Aquí puedes insertar títulos específicos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Almendra&display=swap" rel="stylesheet">


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container" id="input">
            <a class="navbar-brand" href="home">
                <i class="fas fa-crown"></i> Camino al Trono
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item" id="nav">
                        <a class="nav-link" href="/">
                            <img src="img/home.png" width="20" alt="Galería" class="me-2"> Inicio
                        </a>
                    </li>
                    <li class="nav-item" id="nav">
                        <a class="nav-link" href="historia">
                            <img src="img/historia.png" width="20" alt="Galería" class="me-2"> Historia
                        </a>
                    </li>
                    <li class="nav-item" id="nav">
                        <a class="nav-link" href="galeria">
                            <img src="img/galeria.png" width="20" alt="Galería" class="me-2"> Galería
                        </a>
                    </li>
                    <li class="nav-item" id="nav">
                        <a class="nav-link" href="soporte">
                            <img src="img/soporte.png" width="20" alt="Galería" class="me-2"> Soporte
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Aquí irá el contenido de cada página específica -->
    <main class="container mt-5"> <!-- Ajusta el valor según la altura de tu navbar -->
        @yield('contenido')
    </main>

    <footer class="bg-dark text-center text-white py-3 mt-5" id="footer">
        <p style="text-align: center;">&copy; 2024 Camino al Trono. Todos los derechos reservados.</p>
    </footer>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>