<?php
$conn = new mysqli("localhost", "root", "", "reportes_db"); 
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$fecha_inicio = $_POST['fecha_inicio'];
$fecha_fin = $_POST['fecha_fin'];

$sql = "SELECT * FROM reportes WHERE fecha >= '$fecha_inicio' AND fecha <= '$fecha_fin'";
$result = $conn->query($sql); 

if ($result->num_rows > 0) {
    
    echo "<table border='1'>
    <tr>
    <th>Id Reportado</th>
    <th>Descripcion Reporte</th>
    <th>Fecha</th>
    <th>Id Reporta</th>
    <th>Pais</th>
    <th>Canal Reporte</th>
    <th>Status</th>
    </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id_reportado'] . "</td>";
        echo "<td>" . $row['descripcion_reporte'] . "</td>";
        echo "<td>" . $row['fecha'] . "</td>";
        echo "<td>" . $row['id_reporta'] . "</td>";
        echo "<td>" . $row['pais'] . "</td>";
        echo "<td>" . $row['canal_reporte'] . "</td>";
        echo "<td>" . $row['status'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

$conn->close();
?>
