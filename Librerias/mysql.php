<?php
function Conexion($consultaSql)
{

    $mysqli = mysqli_connect('localhost', 'root', '', 'arjbd', 3306);
    if (mysqli_connect_errno()) {
        // Control
        echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
    } else {


        $resultado = mysqli_query($mysqli, $consultaSql);
        mysqli_data_seek($resultado, 0);

        $extraido = mysqli_fetch_array($resultado);

        return $extraido;
    }
}
