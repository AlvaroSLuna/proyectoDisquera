<?php
include_once("../Clases/artista.php");
include_once("../Clases/cancion.php");
include_once("../Clases/album.php");
require_once('../Librerias/render.php');
include_once("../Librerias/mysql.php");

if (isset($_GET['artista'])) {
    $artistaId = $_GET['artista'];

    // Consulta para artista
    $consultaArtistas = "SELECT * FROM `artistas` WHERE id=" . "$artistaId" . ";";
    $resultado = Conexion($consultaArtistas);
    $artista = mysqli_fetch_array($resultado);

    $objArtista = new artista(
        $artista['nombre'],
        $artista['foto'],
        $artista['descripcion'],
        $artista['id'],
        $artista['instagram'],
        $artista['youtube'],
        $artista['facebook'],
        $artista['X'],
        $artista['spotify'],
        $artista['deezer'],
        $artista['tidal'],
        $artista['music'],
        $artista['videoclip']
    );

    // Consulta para canciones
    $consultaCancion = "SELECT * FROM `canciones` WHERE idArtista=" . "$artistaId" . ";";
    $canciones = Conexion($consultaCancion);
    $arrayObjCancion = [];
    foreach ($canciones as $cancion) {
        $objCancion = new Canciones(
            $cancion['id'],
            $cancion['nombre'],
            $cancion['foto'],
            $cancion['reproducciones'],
            $cancion['idArtista']
        );
        array_push($arrayObjCancion, $objCancion);
    }

    // Consulta para álbumes
    $consultaAlbum = "SELECT * FROM `albumes` WHERE idArtista=" . "$artistaId" . ";";
    $albumes = Conexion($consultaAlbum);
    $arrayObjAlbum = [];

    foreach ($albumes as $album) {
        $duracion = isset($album['duracion']) ? $album['duracion'] : '00:00'; // Valor por defecto
        $objAlbum = new Album(
            $album['id'],
            $album['nombre'],
            $duracion,
            $album['foto'],
            $album['fechaLanzamiento'],
            $album['idArtista']
        );
        array_push($arrayObjAlbum, $objAlbum);
    }
} else {
    $artistaId = null;
}
?>




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
                <a href="<?php echo $objArtista->instagram ?>"><i class="fab fa-instagram"></i></a>
                <a href="<?php echo $objArtista->youtube ?>"><i class="fab fa-youtube"></i></a>
                <a href="<?php echo $objArtista->facebook ?>"><i class="fab fa-facebook"></i></a>
                <a href="<?php echo $objArtista->x ?>"><i class="fab fa-x-twitter"></i></a>
            </div>
        </div>
    </div>
    <br>
    <br>
    <section class="container my-5 text-center text-white py-5 rounded" style="background-color: #111;">
        <h2 class="section-title text-white">Canciones Destacadas</h2>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-4 mt-3">

            <?php
            //Canciones
            for ($i = 0; $i < count($arrayObjCancion); $i++) {
                echo '<div class="col">
                <div class="card bg-dark text-white h-100">
                    <img src=' . $arrayObjCancion[$i]->foto . ' class="card-img-top" alt="Album 1">
                    <div class="card-body">
                        <h5 class="card-title">' . $arrayObjCancion[$i]->nombre . '</h5>
                        <p class="card-text">' . $arrayObjCancion[$i]->reproducciones . '</p>
                    </div>
                </div>
            </div>';
            }
            ?>


        </div>
        </div>
    </section>

    <div class="music-section">
        <div class="tabs">
            <span class="active">Escucha</span>
        </div>
        <div class="buttons">
            <a href="<?php echo $objArtista->spotify ?>" target="_blank" class="button spotify">Spotify</a>
            <a href="<?php echo $objArtista->deezer ?>" target="_blank" class="button deezer">Deezer</a>
            <a href="<?php echo $objArtista->tidal ?>" target="_blank" class="button tidal">TIDAL</a>
            <a href="<?php echo $objArtista->music ?>" target="_blank" class="button apple-music">MUSIC</a>
        </div>
    </div>

    <div class="video-section">
        <iframe width="560" height="315" src="<?php echo $objArtista->videoclip ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>



    <section class="container my-5 text-center text-white py-5" style="background-color: #111;">
        <h2 class="section-title text-white">Discografia con Nosotros</h2>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-4 mt-3">

            <?php
            //Albumes
            for ($i = 0; $i < count($arrayObjAlbum); $i++) {
                echo '<div class="col">
                <div class="card bg-dark text-white h-100">
                    <img src=' . $arrayObjAlbum[$i]->foto . ' class="card-img-top" alt="Album 1">
                    <div class="card-body">
                        <h5 class="card-title">' . $arrayObjAlbum[$i]->nombre . '</h5>
                        <p>' . $arrayObjAlbum[$i]->fechaLanzamiento . '</p>
                    </div>
                </div>
            </div>';
            }
            ?>


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