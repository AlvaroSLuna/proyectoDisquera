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
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap">
    <link rel="stylesheet" href="/CSS/contactanos.css">
</head>
<body>
<div class="hero">
        <div class="overlay"></div>
        <div class="content">
            <h1>CONTACTA CON NOSOTROS</h1>
            <p>Queremos saber de ti</p>
        </div>
    </div>

    <br><br>

    <h3>Cuéntanos en qué podemos ayudarte</h3>

    <form action="/enviar-formulario" method="POST" class="formulario">
        <label for="nombre">Tu Nombre *</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="email">Tu Email *</label>
        <input type="email" id="email" name="email" required>

        <label for="asunto">Asunto *</label>
        <input type="text" id="asunto" name="asunto" required>

        <label for="mensaje">Mensaje *</label>
        <textarea id="mensaje" name="mensaje" rows="5" required></textarea>

        <div class="privacidad">
            <input type="checkbox" id="privacidad" name="privacidad" required>
            <label for="privacidad">Estoy de acuerdo con la política de privacidad.*</label>
         </div>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>


<?php
    $objHTML->RenderFooter();
?>