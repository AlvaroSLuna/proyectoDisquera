<?php

class RenderHTML
{
    // Constructor de la clase (actualmente vacío, pero útil si en el futuro necesitas inicializar variables)
    public function __construct() {}

    // Método para renderizar el encabezado de la página
    public function RenderHeader()
    {
        echo '
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ARJ Records</title>

        <!-- Enlace a Bootstrap para el diseño responsivo -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <!-- Google Fonts para mejorar la tipografía -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap">
        <!-- Archivo CSS personalizado -->
        <link rel="stylesheet" href="../CSS/index.css">
    </head>

    <body>
        <!-- Barra de navegación -->
        <nav id="cabecera" class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container d-flex align-items-center justify-content-between">
                <!-- Logo -->
                <a class="navbar-brand" href="#">
                    <img src="/src/logo/logoARJ.png" alt="Logo">
                </a>

                <!-- Botón para menú en móviles -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Contenido del menú -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="/index.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="/index.php#novedades">Novedades</a></li>

                        <!-- Menú desplegable de artistas -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="artistasDropdown" role="button"
                                data-bs-toggle="dropdown">Artistas</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/Views/artista.php?artista=1">Quevedo</a></li>
                                <li><a class="dropdown-item" href="/Views/artista.php?artista=2">Kendrick Lamar</a></li> <!-- Se corrigió el nombre -->
                                <li><a class="dropdown-item" href="/Views/artista.php?artista=3">Kaze</a></li>
                            </ul>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="/Views/quienesSomos.php">Quiénes Somos</a></li>
                        <li class="nav-item"><a class="nav-link" href="/Views/contactanos.php">Contáctanos</a></li>
                    </ul>
                </div>
            </div>
        </nav>';
    }

    // Método para renderizar el pie de página
    public function RenderFooter()
    {
        echo '
        <footer class="footer">
            <p>&copy; 2025 ARJ Records - Todos los derechos reservados</p>
            
            <!-- Enlaces a redes sociales -->
            <div class="social-links">
                <a href="#" class="text-white me-3">Facebook</a>
                <a href="#" class="text-white me-3">Twitter</a>
                <a href="#" class="text-white">Instagram</a>
            </div>

            <!-- Inclusión de Bootstrap JS para funcionalidad dinámica -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        </footer>
        </body>
        </html>
        ';
    }
}
