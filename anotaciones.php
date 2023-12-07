<?php
    require_once("config.php");//Se incorpora el contenido del archivo config.php a este archivo
    $rs = mysqli_query($cn,"select * from anotaciones");
    while($row = mysqli_fetch_assoc($rs)){
        $res[] = array_map("utf8_encode",$row);
    }
    echo json_encode($res);
    mysqli_close($cn);//Asi se cierra la conexión con la base de datos
?>