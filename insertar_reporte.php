<?php  
$id_reportado = $_POST['id_reportado'];
$descripcion_reporte = $_POST['descripcion_reporte'];
$fecha = $_POST['fecha'];
$id_reporta = $_POST['id_reporta'];
$pais = $_POST['pais'];
$canal_reporte = $_POST['canal_reporte'];
$status = $_POST['status'];

$conexion = mysqli_connect("localhost", "root", "", "reportes_db");

if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Escapar caracteres especiales para evitar inyecciones SQL
$id_reportado = mysqli_real_escape_string($conexion, $id_reportado);
$descripcion_reporte = mysqli_real_escape_string($conexion, $descripcion_reporte);
$fecha = mysqli_real_escape_string($conexion, $fecha);
$id_reporta = mysqli_real_escape_string($conexion, $id_reporta);
$pais = mysqli_real_escape_string($conexion, $pais);
$canal_reporte = mysqli_real_escape_string($conexion, $canal_reporte);
$status = mysqli_real_escape_string($conexion, $status);

$consulta = "INSERT INTO reportes (id_reportado, descripcion_reporte, fecha, id_reporta, pais, canal_reporte, status) 
VALUES ('$id_reportado', '$descripcion_reporte', '$fecha', '$id_reporta', '$pais', '$canal_reporte', '$status')";

$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {

    header ("Location: http://localhost/basefraude/registroexitoso.php");

} else {
    echo "Error en Cargar Datos: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
