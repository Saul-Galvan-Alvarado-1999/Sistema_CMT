<?php
include 'fpdf/fpdf.php';
include 'db.php';

$creden = "SELECT nombre, apellido_paterno, apellido_materno, celular, direccion, codigo_postal, delegacion_o_municipio, estado, fecha_nacimiento, curp, nss, foto from empleados";
$result = mysqli_query($conexion, $creden);
$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial', '', 8);

while ($row = $result->fetch_assoc()) {
   // $foto = $row['foto'];
    //$photo = 'data:image/jpg;base64,'.base64_encode($row['foto']);
    //$photo = 'data://text/plain;base64,'.base64_encode($row['foto']);
    //$info = getimagesize($photo);
    // $dataURI= 'data:image/png;base64,'.base64_encode($row['foto']);
    $pdf->Cell(100, 5, 'Trabajador CMT', 1, 1, 'C');
    // $pdf->Image( $photo, 10, 8, 'C');
    // $pdf->Image($row['foto']);
    // $pdf->Image($row['foto'],10,10);
    //$pdf->Image( $dataURI, 10, 8, 'C');
    // $pdf->Cell( 100, 25, $pdf->Image($row['foto'], $pdf->GetX(), $pdf->GetY(), 47,52,'JPG'), 1, 1, 'C', false );
    //$pdf->Cell(100, 25, $pdf->Image($row['foto']));
    $pdf->Cell(100, 10, utf8_decode('Nombre Completo:' . ' ' . $row['nombre'] . ' ' . $row['apellido_paterno'] . ' ' . $row['apellido_materno']), 1, 1, 'L');
    $pdf->Cell(100, 10, 'CURP:' . ' ' . $row['curp'], 1, 1, 'L');
    $pdf->Cell(100, 10, 'NSS:' . ' ' . $row['nss'], 1, 1, 'L');
    $pdf->Cell(100, 10, 'Telefono:' . ' ' . $row['celular'], 1, 1, 'L');
    $pdf->Cell(100, 10, utf8_decode('Direccion:' . ' ' . $row['direccion']), 1, 1, 'L');
    $pdf->Cell(100, 10, utf8_decode('Código Postal:' . ' ' . $row['codigo_postal']), 1, 1, 'L');
    $pdf->Cell(100, 10, utf8_decode('Municipio:' . ' ' . $row['delegacion_o_municipio']), 1, 1, 'L');
    $pdf->Cell(100, 10, utf8_decode('Estado:' . ' ' . $row['estado']), 1, 1, 'L');
    $pdf->Cell(100, 10, 'Fecha de Nacimiento:' . ' ' . $row['fecha_nacimiento'], 1, 1, 'L');

    $pdf->Output();
}
