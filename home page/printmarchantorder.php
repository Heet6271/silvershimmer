<?php
include 'connecthome1.php';
require 'fpdf.php';

$pdf = new FPDF();
$pdf->AddPage("",array(330,320));

$id = $_GET['data'];

// Check if $id is numeric
if (!is_numeric($id)) {
    exit;
}

// Prepare the SQL statement
$q = "SELECT id, mname, iname, gross, bag, bagweight, toalbag, netweight, touch, west, fine, pair, price, totalprice, date FROM givetomarchant WHERE id = ?";
$count = $conn->prepare($q);

// Bind parameters
$count->bind_param("i", $id); // 'i' for integer

// Execute the query
$count->execute();

// Bind result variables
$count->bind_result($id, $mname, $iname, $gross, $bag, $bagweight, $toalbag, $netweight, $touch, $west, $fine, $pair, $price, $totalprice, $date);

// Fetch the results
$count->fetch();

// Output to PDF
$pdf->SetFont('Arial', 'BU', 20);
$pdf->SetXY(150, 50);
$pdf->Cell(30, 10, 'Shayona Silver', 0, 0, 'L', false);
$pdf->SetY(80);
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(20, 10, 'Bill No:', 0, 0, 'L', false);

$pdf->SetFont('Arial', '', 14);
$pdf->Cell(10, 10, $id, 0, 1, 'L', false);

$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(45, 10, 'Marchant Name:', 0, 0, 'L', false);

$pdf->SetFont('Arial', '', 14);
$pdf->Cell(45, 10, $mname, 0, 0, 'L', false);

$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(20, 10, 'Date:', 0, 0, 'L', false);

$pdf->SetFont('Arial', '', 14);
$pdf->Cell(10, 10, $date, 0, 1, 'L', false);

$pdf->SetY(100);
$pdf->Line(10,100,190,100);

$pdf->setTextColor(0,0,0);



$pdf->Cell(50, 10, 'Item Name', 1, 0, 'C');
$pdf->Cell(20, 10, 'Gross', 1, 0, 'C');
$pdf->Cell(20, 10, 'Bag', 1, 0, 'C');
$pdf->Cell(30, 10, 'Bag Weight', 1, 0, 'C');
$pdf->Cell(30, 10, 'T Bag Weight', 1, 0, 'C');
$pdf->Cell(30, 10, 'Net Weight', 1, 0, 'C');
$pdf->Cell(20, 10, 'Touch', 1, 0, 'C');
$pdf->Cell(20, 10, 'West', 1, 0, 'C');
$pdf->Cell(20, 10, 'Fine', 1, 0, 'C');
$pdf->Cell(20, 10, 'Pair', 1, 0, 'C');
$pdf->Cell(20, 10, 'Price', 1, 0, 'C');
$pdf->Cell(20, 10, 'T Price', 1, 1, 'C');

$pdf->Cell(50, 10, $iname, 1, 0, 'C');
$pdf->Cell(20, 10, $gross, 1, 0, 'C');
$pdf->Cell(20, 10, $bag, 1, 0, 'C');
$pdf->Cell(30, 10, $bagweight, 1, 0, 'C');
$pdf->Cell(30, 10, $toalbag, 1, 0, 'C');
$pdf->Cell(30, 10, $netweight, 1, 0, 'C');
$pdf->Cell(20, 10, $touch, 1, 0, 'C');
$pdf->Cell(20, 10, $west, 1, 0, 'C');
$pdf->Cell(20, 10, $fine, 1, 0, 'C');
$pdf->Cell(20, 10, $pair, 1, 0, 'C');
$pdf->Cell(20, 10, $price, 1, 0, 'C');
$pdf->Cell(20, 10, $totalprice, 1, 1, 'C');




$pdf->SetXY(260,220);
$pdf->Cell(50,10,'Signature',0,1,'L',false);

$pdf->Output();
?>
