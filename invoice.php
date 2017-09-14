<?php include 'connection.php';
define('FPDF_FONTPATH','fpdf/font/');
require('fpdf/fpdf.php');

$pdf=new FPDF();
$pdf->Open();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);
//$pdf->Cell(Width,hight,'tesxt',border,endline,[align]);
$pdf->Cell(70,10,'Name',0,1);
$pdf->Cell(30,10,'Address',0,1);
$pdf->SetFont('Arial','',16);
$pdf->Cell(70,10,'ITEM!',1,0);
$pdf->Cell(30,10,'QTY',1,0);
$pdf->Cell(30,10,'PRICE',1,0);
$pdf->Cell(30,10,'Dis%',1,0);
$pdf->Cell(30,10,'TOTAL',1,1);
$pdf->Cell(70,10,'',1,0);
$pdf->Cell(30,10,'',1,0);
$pdf->Cell(30,10,'',1,0);
$pdf->Cell(30,10,'',1,0);
$pdf->Cell(30,10,'',1,1);




$pdf->Output();







?>