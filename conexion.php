<?php
$servername = "localhost"; // Cambia esto si tu servidor no está en localhost
$username = "";  // Reemplaza con tu usuario de MySQL
$password = "";  // Reemplaza con tu contraseña de MySQL
$dbname = "reportes_db";  // El nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
