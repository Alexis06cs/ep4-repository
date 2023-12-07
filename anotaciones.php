<?php
    header("Access-Control-Allow-Origin: *");

    // Intenta conectar a la base de datos
    $cn = mysqli_connect("localhost", "root", "root", "bdNotas");

    // Verifica si la conexión fue exitosa
    if (!$cn) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    // Ejecuta la consulta SQL
    $rs = mysqli_query($cn, "SELECT * FROM anotaciones");

    // Verifica si la consulta se ejecutó correctamente
    if (!$rs) {
        die("Error en la consulta: " . mysqli_error($cn));
    }

    // Inicializa el array de resultados
    $res = array();

    // Recorre los resultados y los agrega al array
    while ($row = mysqli_fetch_assoc($rs)) {
        // Aplica utf8_encode a cada valor en la fila
        $res[] = array_map("utf8_encode", $row);
    }

    // Muestra los datos en formato JSON
    echo json_encode($res);

    // Cierra la conexión con la base de datos
    mysqli_close($cn);
?>
