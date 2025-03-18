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
    <title>Contáctanos</title>
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


    <button type="button" class="btn btn-privacy" data-bs-toggle="modal" data-bs-target="#politicaModal">
      Ver Política de Privacidad
    </button>

    <br><br>

    <div class="form-check">
    <input class="form-check-input" type="checkbox" id="aceptoPolitica">
    <label class="form-check-label" for="aceptoPolitica">
        Estoy de acuerdo con la política de privacidad.
    </label>
    </div>

    <button type="submit" class="btn btn-custom mt-2" id="enviar">Enviar</button>

    <div class="modal fade" id="politicaModal" tabindex="-1" aria-labelledby="politicaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="politicaModalLabel">Política de Privacidad</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
        <p>En <strong>ARJ Records</strong>, nos comprometemos a proteger tu privacidad. Esta política explica cómo recopilamos, usamos y protegemos tus datos personales.</p>

        <h5>1. Información Recopilada</h5>
        <p>Recopilamos datos como tu nombre, correo electrónico y preferencias musicales.</p>

        <h5>2. Uso de la Información</h5>
        <p>Usamos tus datos para enviarte productos, actualizaciones de nuestros artistas, y mejorar nuestros servicios. También para cumplir con obligaciones legales.</p>

        <h5>3. Protección de Datos</h5>
        <p>Tomamos medidas para proteger tu información personal, aunque no podemos garantizar una seguridad absoluta en línea.</p>

        <h5>4. Compartir con Terceros</h5>
        <p>No vendemos ni alquilamos tu información personal. Solo la compartimos con proveedores de servicios que nos ayudan a operar nuestro negocio, bajo estrictos acuerdos de privacidad.</p>

        <h5>5. Derechos del Usuario</h5>
        <p>Puedes acceder, corregir o eliminar tus datos personales en cualquier momento. Contáctanos si tienes preguntas o solicitudes.</p>

        <h5>6. Cambios en la Política</h5>
        <p>Podemos actualizar esta política ocasionalmente. Te notificaremos sobre cualquier cambio importante.</p>

        <h5>7. Contacto</h5>
        <p>Si tienes alguna pregunta, contáctanos a través de nuestro formulario en línea.</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
        </div>
    </div>
    </div>
    </form>
</body>
</html>


<?php
    $objHTML->RenderFooter();
?>