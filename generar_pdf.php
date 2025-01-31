<?php
ob_start();  // Inicia el buffer de salida

require('fpdf/fpdf.php');  // Asegúrate de incluir la biblioteca FPDF
require('filtrar.php');  // Asegúrate de incluir cualquier otro archivo necesario

class PDF extends FPDF {
    // Puedes agregar métodos personalizados aquí si es necesario
    // Por ejemplo, un encabezado y pie de página personalizados

    function Header() {
        // Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        // Mover a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(30, 10, 'Reporte de Estafa', 0, 1, 'C');
        // Salto de línea
        $this->Ln(20);
    }

    function Footer() {
        // Posición a 1.5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, 'Página ' . $this->PageNo(), 0, 0, 'C');
    }
}

$fecha_inicio = $_POST['fecha_inicio'];
$fecha_fin = $_POST['fecha_fin'];

$conn = new mysqli("localhost", "root", "", "reportes_db");
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT * FROM reportes WHERE fecha >= '$fecha_inicio' AND fecha <= '$fecha_fin'";
$result = $conn->query($sql);

$pdf = new PDF('L', 'mm', 'A4');  // Usa la clase PDF personalizada
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(30, 10, 'Id Reportado');
$pdf->Cell(50, 10, 'Descripcion Reporte');
$pdf->Cell(30, 10, 'Fecha');
$pdf->Cell(30, 10, 'Id Reporta');
$pdf->Cell(30, 10, 'Pais');
$pdf->Cell(50, 10, 'Canal Reporte');
$pdf->Cell(30, 10, 'Status');
$pdf->Ln();

while ($row = $result->fetch_assoc()) {
    $pdf->Cell(30, 10, $row['id_reportado']);
    $pdf->Cell(50, 10, $row['descripcion_reporte']);
    $pdf->Cell(30, 10, $row['fecha']);
    $pdf->Cell(30, 10, $row['id_reporta']);
    $pdf->Cell(30, 10, $row['pais']);
    $pdf->Cell(50, 10, $row['canal_reporte']);
    $pdf->Cell(30, 10, $row['status']);
    $pdf->Ln();
}

$conn->close();
ob_end_clean();  // Limpia el buffer de salida
$pdf->Output('D', 'archivo.pdf');
?>
