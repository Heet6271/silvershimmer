<?php
include 'connecthome1.php';
require 'fpdf.php';

$pdf = new FPDF();
$pdf->AddPage();

$id = $_GET['data'];

// Check if $id is numeric
if (!is_numeric($id)) {
    exit;
}

// Prepare the SQL statement
$q = "SELECT id, name, date, workingtype, weight FROM givingoder WHERE id = ?";
$count = $conn->prepare($q);

// Bind parameters
$count->bind_param("i", $id); // 'i' for integer

// Execute the query
$count->execute();

// Bind result variables
$count->bind_result($id, $name, $date, $workingtype, $weight);

// Fetch the results
$count->fetch();

// Output to PDF
$pdf->SetFont('Arial', 'BU', 20);
$pdf->SetXY(80, 50);
$pdf->Cell(30, 10, 'Shayona Silver', 0, 0, 'L', false);
$pdf->SetY(80);
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(20, 10, 'Bill No:', 0, 0, 'L', false);

$pdf->SetFont('Arial', '', 14);
$pdf->Cell(10, 10, $id, 0, 1, 'L', false);

$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(20, 10, 'Name:', 0, 0, 'L', false);

$pdf->SetFont('Arial', '', 14);
$pdf->Cell(30, 10, $name, 0, 0, 'L', false);

$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(20, 10, 'Date:', 0, 0, 'L', false);

$pdf->SetFont('Arial', '', 14);
$pdf->Cell(10, 10, $date, 0, 0, 'L', false);

$pdf->SetY(100);
$pdf->Line(10,100,190,100);

$pdf->SetXY(30,130);
$pdf->SetFont('Arial','UB',16);
$pdf->Cell(100,10,'Work Type:',0,0,'L',false);
$pdf->Cell(50,10,'Weight:',0,1,'L',false);
$pdf->SetFont('Arial','',14);
$pdf->SetX(30);
$pdf->Cell(100,10, $workingtype,0,0,'L',false);

$pdf->Cell(50,10, $weight,0,0,'L',false);

$pdf->SetXY(160,220);
$pdf->Cell(50,10,'Signature',0,1,'L',false);

$pdf->Output();
?>
