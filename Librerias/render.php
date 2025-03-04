<?php

class RenderHTML
{
    public function __construct(){

    }

    public function RenderHeader()
    {
    echo '
    <!DOCTYPE html>
    <html lang="es">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARJ Records</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap">
    <link rel="stylesheet" href="CSS/index.css">
    </head>

    <body>
    <nav id="cabecera" class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="/src/logo/logoARJ.png" alt="Logo">
            </a>

            <!-- Barra de búsqueda centrada -->
            <div class="search-container mx-auto">
                <form class="d-flex" method="post">
                    <input class="form-control search-input" type="search" placeholder="Buscar..." aria-label="Search" name="buscar" id="buscar">
                    <button class="btn search-button" type="submit">🔍</button>
                </form>
            </div>

            <!-- Botón de menú en móviles -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menú de navegación -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="/">Novedades</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="artistasDropdown" role="button"
                            data-bs-toggle="dropdown">Artistas</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Manolo</a></li>
                            <li><a class="dropdown-item" href="#">El</a></li>
                            <li><a class="dropdown-item" href="#">Del</a></li>
                            <li><a class="dropdown-item" href="#">Bombo</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="generosDropdown" role="button"
                            data-bs-toggle="dropdown">Géneros</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Rock</a></li>
                            <li><a class="dropdown-item" href="#">Rap</a></li>
                            <li><a class="dropdown-item" href="#">Pop</a></li>
                            <li><a class="dropdown-item" href="#">Reggaeton</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>';
    }

    public function RenderFooter()
    {
        echo '
        <footer class="footer">
        <p>&copy; 2025 ARJ Records - Todos los derechos reservados</p>
        <div>
            <a href="#" class="text-white me-3">Facebook</a>
            <a href="#" class="text-white me-3">Twitter</a>
            <a href="#" class="text-white">Instagram</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        </footer>
        </body>
        </html>
        ';
    }
}

?>