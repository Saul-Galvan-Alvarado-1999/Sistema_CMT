<?php

include 'fpdf/fpdf.php';
include 'db.php';

$creden = "SELECT nombre, apellido_paterno, apellido_materno, celular, direccion, codigo_postal, delegacion_o_municipio, estado, fecha_nacimiento, puesto, nss, foto from empleados";
$result = mysqli_query($conexion, $creden);
$pdf = new FPDF();
$pdf->AddPage();

//Seteamos el inicio del margen superior en 25 pixeles

$y_axis_initial = 25;


//Pate frontal
$pdf->SetFillColor(	134, 39, 47);

$pdf->SetFont('Arial','b',10);
$pdf->MultiCell(90,8, utf8_decode('Corporativo en Consultoría, Mantenimiento
Industrial y TICS S de RL de CV'),0,0,'C',1);
$pdf->Image('images/estadialogo.png', 80, 10, 20, 17);
$pdf->Image('images/head.png', 10, 10, 90, 17);
while ($row = $result->fetch_assoc()) {
$pdf->SetFillColor(	255, 255, 255);
//$pdf->Image([$foto]['foto'], 19, 19, 23, 28 );
$pdf->Cell(90,5, utf8_decode($row['nombre'] . ' ' . $row['apellido_paterno'] . ' ' . $row['apellido_materno']),0,1,'R',1);
$pdf->Cell(90,5,utf8_decode($row['puesto']),0,1,'R',1);
$pdf->SetFont('Arial', '', 8);  
$pdf->Cell(90,2.5,' ',0,1,'R',1);

$pdf->Cell(90,2.5,'NSS:' . ' ' . $row['nss'] . '               ',0,1,'R',1);
$pdf->Cell(90,2.5,' ',0,1,'R',1);
$pdf->Cell(90,2.5,'REPSE :' . ' ' . 'AR3243/2022           ',0,1,'R',1);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell(90,2.5,' ',0,1,'R',1);
$pdf->Cell(90,2.5,'CUADRO DE SANCIONES            ',0,1,'R',1);
$pdf->SetFont('Arial', '', 6);
$pdf->Cell(90,5,'AMONES. VERBALES' . '     ' . 'AMONES. ESCRITAS',0,1,'R',1);
$pdf->Cell(90,5,'',0,1,'C',1);
$pdf->Image('images/gris.png', 57.5, 55.5, 4, 4);
$pdf->Image('images/gris.png', 62.5, 55.5, 4, 4);
$pdf->Image('images/gris.png', 67.5, 55.5, 4, 4);

$pdf->Image('images/gris.png', 82, 55.5, 4, 4);
$pdf->Image('images/gris.png', 87, 55.5, 4, 4);
$pdf->Image('images/gris.png', 92, 55.5, 4, 4);
$pdf->SetFillColor(134, 39, 47);
$pdf->Cell(90,5,'',0,1,'C',1);

$pdf->SetFillColor(	255, 255, 255);
$pdf->Cell(90,5,'',0,1,'C',1);
$pdf->Cell(90,5,'',0,1,'C',1);
$pdf->Cell(90,5,'',0,1,'C',1);

$foto     = $row['foto'];
$ext = explode('.',$foto);
$pdf->Image('images/picture.png', 12, 27, 25, 32.5);
//Pate tracera
$pdf->Image('images/tracero.PNG', 110, 10, 90, 56);



$pdf->Ln(10);


    $pdf->Output();
/*
    $imagen = "foto";
    
    $imagen="fotos/".$row['foto'];
    
    $pdf->Cell( 30, 15, $pdf->Image($imagen, $pdf->GetX()+5, $pdf->GetY()+3, 20), 1, 0, 'C', false );
    output($filename,"F");
    */
}
