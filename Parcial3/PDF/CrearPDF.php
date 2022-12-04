<?php

require('./FPDF/fpdf.php');
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Curp = $_POST['Curp'];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'¡Hola, Mundo!');
$pdf->Ln();
$pdf->Cell(40,10,'Los datos del usuario introducidos son: ');
$pdf->Ln();
$pdf->Cell(50,9,'Nombre: '.$_POST['Nombre']);
$pdf->Ln();
$pdf->Cell(50,9,'Apellido: '.$_POST['Apellido']);
$pdf->Ln();
$pdf->Cell(50,9,'Curp: '.$_POST['Curp']);
$pdf->Output();
?>