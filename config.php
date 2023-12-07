<?php
$servername = "localhost";
$username = "root";
$password = "root6"; // Reemplaza esto con tu contraseña real
$dbname = "bdNotas";

// Intenta establecer la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica si hay errores
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

echo "Conexión exitosa";
?>
