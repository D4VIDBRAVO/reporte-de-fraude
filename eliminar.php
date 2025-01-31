<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_reportado = $_POST['id_reportado'];

    $conexion = mysqli_connect("localhost", "root", "", "reportes_db");

    if (!$conexion) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $id_reportado = mysqli_real_escape_string($conexion, $id_reportado);

    $consulta = "DELETE FROM reportes WHERE id_reportado = '$id_reportado'";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        header("Location: administrador.php?msg=eliminado");
        exit();

    } else 
 ?>