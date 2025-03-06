<?php
require_once('../Librerias/render.php');

$objHTML = new RenderHTML();

$objHTML->RenderHeader();
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quienes somos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap">
    <link rel="stylesheet" href="/CSS/quienesSomos.css">
</head>
<body>
<div class="hero">
        <div class="overlay"></div>
        <div class="content">
            <h1>QUIENES SOMOS</h1>
            <p>ARJ RECORDS, la casa de tus artistas favoritos</p>
        </div>
    </div>

    <div class="nosotros">
        <h2>¿Quiénes Somos?</h2>
        <p>En ARJ Records, vivimos y respiramos música. Somos un sello discográfico independiente dedicado a descubrir, apoyar y potenciar el talento artístico, brindando a nuestros músicos las herramientas necesarias para llevar su sonido al siguiente nivel.
        <br><br>
        Desde nuestra fundación en 2012, hemos trabajado con artistas de diversos géneros, apostando por la autenticidad y la creatividad en cada producción. Creemos en la música como un medio para conectar con el mundo, y nos esforzamos por construir un ecosistema en el que los artistas puedan crecer, desarrollarse y compartir su arte con una audiencia global.
        <br><br>
        Nuestro equipo está compuesto por productores, ingenieros de sonido, estrategas de marketing y creativos apasionados por la industria, quienes trabajan de la mano con cada artista para dar vida a su visión. Además de la producción y distribución musical, ofrecemos servicios de management, promoción y desarrollo artístico, asegurándonos de que cada talento alcance su máximo potencial.
        <br><br>
        Si eres un artista con una historia que contar y una pasión inquebrantable por la música, queremos escucharte. ¡Bienvenido a ARJ Records, donde la música cobra vida!
        </p>
    </div>
</body>
</html>


<?php
    $objHTML->RenderFooter();
?>