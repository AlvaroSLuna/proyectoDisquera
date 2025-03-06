<?php
include_once("../Clases/artista.php");
require_once('../Librerias/render.php');
include_once("../Librerias/mysql.php");

$consulta = "SELECT * FROM `artistas` WHERE id=1;";

$artista = Conexion($consulta);

$objArtista = new artista($artista['nombre'], $artista['foto'], $artista['descripcion'], $artista['id']);

print($artista);

$objHTML = new RenderHTML();

$objHTML->RenderHeader();
?>
<br><br><br><br>
    
    <div class="row">
        <div class="col-6 ">
            <img class="img-thumbnail rounded-circle" src="/src/quevedo/perfilQuevedo.webp" alt="">
        </div>
        <div class="col-6 text-center">
            <h1><?php echo $objArtista->nombre; ?></h1>
        </div>
    </div>
    


<?php
$objHTML->RenderFooter();
?>