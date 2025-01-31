<?php
$conn = new mysqli('localhost', 'username', 'password', 'database');
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$fecha_inicio = $_POST['fecha_inicio'];
$fecha_fin = $_POST['fecha_fin'];

$sql = "SELECT * FROM tu_tabla WHERE fecha >= '$fecha_inicio' AND fecha <= '$fecha_fin'";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<p>{$row['campo1']} - {$row['campo2']}</p>";
}

$conn->close();
?>
