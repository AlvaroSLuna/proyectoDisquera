<?php
require_once('Librerias/renderIndex.php');

$objHTML = new RenderHTML();

$objHTML->RenderHeader();
?>

<br><br><br><br><br><br>

<!--Carrusel con las fotos de nuestros artistas-->
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

<br><br>


<!--Sección con información variada-->    
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

<!--Sección con las canciones destacadas-->
<section class="container my-5 text-center text-white py-5" style="background-color: #111;">
    <h2 class="section-title text-white">Canciones destacadas</h2>
    
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-4 mt-3">

        <div class="col">
            <div class="card bg-dark text-white h-100">
                <img src="src/canciones_destacadas/cancion1.jpg" class="card-img-top" alt="Album 1">
                <div class="card-body">
                    <h5 class="card-title">AUDEMARS</h5>
                    <p class="card-text">DOMELIPA, Omar Montes</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card bg-dark text-white h-100">
                <img src="src/canciones_destacadas/cancion2.jpg" class="card-img-top" alt="Album 2">
                <div class="card-body">
                    <h5 class="card-title">Cosa Nuestra</h5>
                    <p class="card-text">Rauw Alejandro</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card bg-dark text-white h-100">
                <img src="src/canciones_destacadas/cancion3.png" class="card-img-top" alt="Album 3">
                <div class="card-body">
                    <h5 class="card-title">noviogangsta &lt;3</h5>
                    <p class="card-text">Emilia</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card bg-dark text-white h-100">
                <img src="src/canciones_destacadas/cancion4.jpg" class="card-img-top" alt="Album 4">
                <div class="card-body">
                    <h5 class="card-title">CVRBON VRMOR</h5>
                    <p class="card-text">Farruko</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card bg-dark text-white h-100">
                <img src="src/canciones_destacadas/cancion5.jpg" class="card-img-top" alt="Album 5">
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
                <img src="src/canciones_destacadas/cancion6.webp" class="card-img-top" alt="Album 6">
                <div class="card-body">
                    <h5 class="card-title">Un último vals</h5>
                    <p class="card-text">Joaquín Sabina</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card bg-dark text-white h-100">
                <img src="src/canciones_destacadas/cancion7.jpg" class="card-img-top" alt="Album 7">
                <div class="card-body">
                    <h5 class="card-title">Fear Of Winning</h5>
                    <p class="card-text">Björn Dixgård</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card bg-dark text-white h-100">
                <img src="src/canciones_destacadas/cancion8.jpg" class="card-img-top" alt="Album 8">
                <div class="card-body">
                    <h5 class="card-title">Road Diary</h5>
                    <p class="card-text">Bruce Springsteen & The E Street Band</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card bg-dark text-white h-100">
                <img src="src/canciones_destacadas/cancion9.jpg" class="card-img-top" alt="Album 9">
                <div class="card-body">
                    <h5 class="card-title">One Eye Open</h5>
                    <p class="card-text">Mimi Webb</p>
                </div>
            </div>
        </div>
    
        <div class="col">
            <div class="card bg-dark text-white h-100">
                <img src="src/canciones_destacadas/cancion10.png" class="card-img-top" alt="Album 10">
                <div class="card-body">
                    <h5 class="card-title">Hiding In Plain Sight</h5>
                    <p class="card-text">Manic Street Preachers</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Sección de algunas novedades con enlaces-->
<div id="novedades" class="container novedades-section text-center text-white py-5" style="background-color: #111;">
    <h2 class="section-title text-center text-white py-5">Novedades</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="/src/novedades/nuevoalbum.jpg" class="card-img-top" alt="Album">
                <div class="card-body">
                    <h5 class="card-title">Nuevo Álbum de Quevedo</h5>
                    <p class="card-text">Descubre el último lanzamiento de Quevedo "Buenas Noches".</p>
                    <a href="https://open.spotify.com/album/3V2ApPxUSquOkjLQU3wmjh" class="btn btn-dark">Reproducir</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="/src/novedades/conciertokaze.jpg" class="card-img-top" alt="Evento">
                <div class="card-body">
                    <h5 class="card-title">Próximo Concierto de Kaze</h5>
                    <p class="card-text">Escuha en directo a nuestro artista Kaze en Alameda Festival.</p>
                    <a href="https://www.entradas.com/artist/alameda-festival-2025//?affiliate=AWI?utm_source=awin&utm_medium=affiliate&utm_campaign=awin&affiliate=AWI&utm_source=awin&utm_medium=affiliate&utm_campaign=awin&awc=24761_1742226408_80571c64ae9e28f470ffb20591e232b1" class="btn btn-dark">Comprar entradas</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="/src/novedades/noticiakendric.webp" class="card-img-top" alt="Noticia">
                <div class="card-body">
                    <h5 class="card-title">Noticia Destacada</h5>
                    <p class="card-text">Los jeans de 1200 dólares que usó Kendrick Lamar y ha copiado Rihanna.</p>
                    <a href="https://www.cadena100.es/musica/noticias/jeans-1200-dolares-kendrick-lamar-copiado-rihanna-20250315_132367.html" class="btn btn-dark">Leer más</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$objHTML->RenderFooter();
?>