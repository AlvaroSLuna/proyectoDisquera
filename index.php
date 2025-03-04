<?php
require_once('Librerias/render.php','/Librerias/buscarArtistaAPI.php');



$objHTML = new RenderHTML();

$objHTML->RenderHeader();
?>

    <h1 class="h1">La musica</h1>
    
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="src/img_carrusel/kendricklamar.jpg" class="d-block w-100" alt="Concierto">
            </div>
            <div class="carousel-item">
                <img src="src/img_carrusel/kaze.webp" class="d-block w-100" alt="DJ">
            </div>
            <div class="carousel-item">
                <img src="src/img_carrusel/periferia.jpg" class="d-block w-100" alt="Guitarra en vivo">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
    <br>
    <div>

    </div>
    <br>
    <div class="container novedades-section">
        <h2 class="section-title">Novedades</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://source.unsplash.com/400x300/?music,album" class="card-img-top" alt="Album">
                    <div class="card-body">
                        <h5 class="card-title">Nuevo Álbum</h5>
                        <p class="card-text">Descubre el último lanzamiento de nuestros artistas.</p>
                        <a href="#" class="btn btn-dark">Escuchar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://source.unsplash.com/400x300/?dj,concert" class="card-img-top" alt="Evento">
                    <div class="card-body">
                        <h5 class="card-title">Próximo Concierto</h5>
                        <p class="card-text">No te pierdas el evento más esperado del año.</p>
                        <a href="#" class="btn btn-dark">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://source.unsplash.com/400x300/?guitar,music" class="card-img-top" alt="Noticia">
                    <div class="card-body">
                        <h5 class="card-title">Noticia Destacada</h5>
                        <p class="card-text">Lo último en el mundo de la música.</p>
                        <a href="#" class="btn btn-dark">Leer más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    $objHTML->RenderFooter();
?>