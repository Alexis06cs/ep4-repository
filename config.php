<?php
    header("Access-Control-Allow-Origin: *");

    // Intenta conectar a la base de datos
    $cn = mysqli_connect("localhost", "root", "root6", "bdnotas");

    // Verifica si la conexión fue exitosa
    if (!$cn) {
        die("Error de conexión: " . mysqli_connect_error());
    }
?>
