<?php
<<<<<<< HEAD
require_once('Librerias/render.php','/Librerias/buscarArtistaAPI.php');


=======
require_once('Librerias/renderIndex.php');
>>>>>>> 9ecedae492d335aaec5af6ce5c78c260740a9ac0

$objHTML = new RenderHTML();

$objHTML->RenderHeader();
?>

<br><br><br><br><br><br>

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

<section class="music-section text-center text-white py-5" style="background-color: #111;">
    <div class="container">
        <h2 class="fw-bold">DONDE VIVE LA MÚSICA</h2>
        <p class="lead">
            En ARJ RECORDS vivimos y respiramos música. Porque la música nos une, nos inspira, nos mueve y nos define.
        </p>
        <p>
            Somos el hogar de artistas con gran talento y diversidad, brindándoles el espacio y las herramientas necesarias para llevar su arte al siguiente nivel y conectar con el mundo. </p>
        <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
            <a href="#" class="btn btn-outline-light">DESCUBRE NUESTROS ARTISTAS</a>
            <a href="#" class="btn btn-outline-light">EXPLORA NUESTRA DISCOTECA</a>
            <a href="#" class="btn btn-outline-light">LLEVA TU MÚSICA MÁS LEJOS</a>
        </div>
    </div>
</section>

<section class="container my-5 text-center text-white py-5" style="background-color: #111;">
    <h2 class="section-title text-white">Novedades destacadas</h2>
    
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-4 mt-3">

        <div class="col">
            <div class="card bg-dark text-white h-100">
                <img src="src/img_carrusel/album1.jpg" class="card-img-top" alt="Album 1">
                <div class="card-body">
                    <h5 class="card-title">AUDEMARS</h5>
                    <p class="card-text">DOMELIPA, Omar Montes</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card bg-dark text-white h-100">
                <img src="src/img_carrusel/album2.jpg" class="card-img-top" alt="Album 2">
                <div class="card-body">
                    <h5 class="card-title">Cosa Nuestra</h5>
                    <p class="card-text">Rauw Alejandro</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card bg-dark text-white h-100">
                <img src="src/img_carrusel/album3.jpg" class="card-img-top" alt="Album 3">
                <div class="card-body">
                    <h5 class="card-title">noviogangsta &lt;3</h5>
                    <p class="card-text">Emilia</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card bg-dark text-white h-100">
                <img src="src/img_carrusel/album4.jpg" class="card-img-top" alt="Album 4">
                <div class="card-body">
                    <h5 class="card-title">CVRBON VRMOR</h5>
                    <p class="card-text">Farruko</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card bg-dark text-white h-100">
                <img src="src/img_carrusel/album5.jpg" class="card-img-top" alt="Album 5">
                <div class="card-body">
                    <h5 class="card-title">I Miss You</h5>
                    <p class="card-text">Beéle</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-4 mt-3">

        <div class="col">
            <div class="card bg-dark text-white h-100">
                <img src="src/img_carrusel/album6.jpg" class="card-img-top" alt="Album 6">
                <div class="card-body">
                    <h5 class="card-title">Un último vals</h5>
                    <p class="card-text">Joaquín Sabina</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card bg-dark text-white h-100">
                <img src="src/img_carrusel/album7.jpg" class="card-img-top" alt="Album 7">
                <div class="card-body">
                    <h5 class="card-title">Fear Of Winning</h5>
                    <p class="card-text">Björn Dixgård</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card bg-dark text-white h-100">
                <img src="src/img_carrusel/album8.jpg" class="card-img-top" alt="Album 8">
                <div class="card-body">
                    <h5 class="card-title">Road Diary</h5>
                    <p class="card-text">Bruce Springsteen & The E Street Band</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card bg-dark text-white h-100">
                <img src="src/img_carrusel/album9.jpg" class="card-img-top" alt="Album 9">
                <div class="card-body">
                    <h5 class="card-title">One Eye Open</h5>
                    <p class="card-text">Mimi Webb</p>
                </div>
            </div>
        </div>
    
        <div class="col">
            <div class="card bg-dark text-white h-100">
                <img src="src/img_carrusel/album10.jpg" class="card-img-top" alt="Album 10">
                <div class="card-body">
                    <h5 class="card-title">Hiding In Plain Sight</h5>
                    <p class="card-text">Manic Street Preachers</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container novedades-section text-center text-white py-5" style="background-color: #111;">
    <h2 class="section-title text-center text-white py-5">Novedades</h2>
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