<?php
include_once("../Clases/artista.php");
require_once('../Librerias/render.php');
include_once("../Librerias/mysql.php");

if (isset($_GET['artista'])) {
    $artistaId = $_GET['artista'];

    $consulta = "SELECT * FROM `artistas` WHERE id="."$artistaId".";";

    $artista = Conexion($consulta);
    
    $objArtista = new artista($artista['nombre'], $artista['foto'], $artista['descripcion'], $artista['id']);
    
    print($artista);
}else{
    $artistaId = null;
}


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARJ Records</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap">
    <link rel="stylesheet" href="../CSS/artista.css">
</head>

<body>
    <nav id="cabecera" class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <a class="navbar-brand" href="#">
                <img src="/src/logo/logoARJ.png" alt="Logo">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="/">Novedades</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="artistasDropdown" role="button"
                            data-bs-toggle="dropdown">Artistas</a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/Views/artista.php?artista=1">Quevedo</a></li>
                            <li><a class="dropdown-item" href="/Views/artista.php?artista=2">Kendric Lamar</a></li>
                            <li><a class="dropdown-item" href="/Views/artista.php?artista=3">Kaze</a></li>
                            
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/Views/quienesSomos.php">Quienes Somos</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contacto.php">Contactanos</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br><br><br><br><br>

    <!-- Inicio de la pagina artista -->

    <div class="artist-hero">
        <img src=<?php echo $objArtista->foto; ?> alt="Artista" class="artist-image">
        <div class="overlay"></div>
        <div class="content">
            
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <h1 class="artist-name"><?php echo $objArtista->nombre; ?></h1>
            <p class="follow-text">¡Sígueme!</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-x-twitter"></i></a>
            </div>
        </div>
    </div>
    <br>
    <br>
    <section class="container my-5 text-center text-white py-5" style="background-color: #111;">
        <h2 class="section-title text-white">Últimas Novedades</h2>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-4 mt-3">

            <div class="col">
                <div class="card bg-dark text-white h-100">
                    <img src="src/img_carrusel/album1.jpg" class="card-img-top" alt="Album 1">
                    <div class="card-body">
                        <h5 class="card-title">Novedad 1</h5>
                        <p class="card-text">Canción 1</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card bg-dark text-white h-100">
                    <img src="src/img_carrusel/album2.jpg" class="card-img-top" alt="Album 2">
                    <div class="card-body">
                        <h5 class="card-title">Novedad 2</h5>
                        <p class="card-text">Canción 2</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card bg-dark text-white h-100">
                    <img src="src/img_carrusel/album3.jpg" class="card-img-top" alt="Album 3">
                    <div class="card-body">
                        <h5 class="card-title">Novedad 3</h5>
                        <p class="card-text">Canción 3</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card bg-dark text-white h-100">
                    <img src="src/img_carrusel/album4.jpg" class="card-img-top" alt="Album 4">
                    <div class="card-body">
                        <h5 class="card-title">Novedad 4</h5>
                        <p class="card-text">Canción 4</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card bg-dark text-white h-100">
                    <img src="src/img_carrusel/album5.jpg" class="card-img-top" alt="Album 5">
                    <div class="card-body">
                        <h5 class="card-title">Novedad 5</h5>
                        <p class="card-text">Canción 5</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <div class="music-section">
        <div class="tabs">
            <span class="active">Escucha</span>
        </div>
        <div class="buttons">
            <a href="https://open.spotify.com" target="_blank" class="button spotify">Spotify</a>
            <a href="https://www.deezer.com" target="_blank" class="button deezer">Deezer</a>
            <a href="https://tidal.com" target="_blank" class="button tidal">TIDAL</a>
            <a href="https://music.apple.com" target="_blank" class="button apple-music">MUSIC</a>
        </div>
    </div>

    <div class="video-section">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/gBF2TqxjJSk" frameborder="0" allowfullscreen></iframe>
    </div>

    <section class="container my-5 text-center text-white py-5" style="background-color: #111;">
        <h2 class="section-title text-white">Singles</h2>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-4 mt-3">

            <div class="col">
                <div class="card bg-dark text-white h-100">
                    <img src="src/img_carrusel/album1.jpg" class="card-img-top" alt="Album 1">
                    <div class="card-body">
                        <p class="card-text">Canción 1</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card bg-dark text-white h-100">
                    <img src="src/img_carrusel/album2.jpg" class="card-img-top" alt="Album 2">
                    <div class="card-body">
                        <p class="card-text">Canción 2</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card bg-dark text-white h-100">
                    <img src="src/img_carrusel/album3.jpg" class="card-img-top" alt="Album 3">
                    <div class="card-body">
                        <p class="card-text">Canción 3</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card bg-dark text-white h-100">
                    <img src="src/img_carrusel/album4.jpg" class="card-img-top" alt="Album 4">
                    <div class="card-body">
                        <p class="card-text">Canción 4</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card bg-dark text-white h-100">
                    <img src="src/img_carrusel/album5.jpg" class="card-img-top" alt="Album 5">
                    <div class="card-body">
                        <p class="card-text">Canción 5</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="container my-5 text-center text-white py-5" style="background-color: #111;">
        <h2 class="section-title text-white">Discografia con Nosotros</h2>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-4 mt-3">

            <div class="col">
                <div class="card bg-dark text-white h-100">
                    <img src="src/img_carrusel/album1.jpg" class="card-img-top" alt="Album 1">
                    <div class="card-body">
                        <p class="card-text">Album 1</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card bg-dark text-white h-100">
                    <img src="src/img_carrusel/album2.jpg" class="card-img-top" alt="Album 2">
                    <div class="card-body">
                        <p class="card-text">Album 2</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card bg-dark text-white h-100">
                    <img src="src/img_carrusel/album3.jpg" class="card-img-top" alt="Album 3">
                    <div class="card-body">
                        <p class="card-text">Album 3</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card bg-dark text-white h-100">
                    <img src="src/img_carrusel/album4.jpg" class="card-img-top" alt="Album 4">
                    <div class="card-body">
                        <p class="card-text">Album 4</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card bg-dark text-white h-100">
                    <img src="src/img_carrusel/album5.jpg" class="card-img-top" alt="Album 5">
                    <div class="card-body">
                        <p class="card-text">Album 5</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <div class="bio-section">
        <img src=<?php echo $objArtista->foto; ?> alt="Kaze">
        <h2><?php echo $objArtista->nombre; ?></h2>
        <p>
        <?php echo $objArtista->descripcion; ?>
        </p>
        <p>
            Con un crecimiento constante en la escena musical, ha lanzado varios éxitos que han acumulado millones
            de reproducciones en plataformas digitales. Su estilo destaca por la crudeza de sus letras y una
            conexión sincera con su público.
        </p>
    </div>

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
</footer>