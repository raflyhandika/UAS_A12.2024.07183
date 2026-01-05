<?php
require('fpdf/fpdf.php');
include 'koneksi.php';

$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();

$pdf->SetFont('Arial','B',14);
$pdf->Cell(190,10,'LAPORAN DATA',0,1,'C');
$pdf->Ln(5);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,8,'No',1);
$pdf->Cell(50,8,'Nama Barang',1);
$pdf->Cell(40,8,'Harga',1);
$pdf->Cell(30,8,'Stok',1);
$pdf->Cell(30,8,'Tanggal Masuk',1);
$pdf->Ln();

$pdf->SetFont('Arial','',10);

$no = 1;
$query = mysqli_query($koneksi,"SELECT * FROM barang");

while ($data = mysqli_fetch_assoc($query)) {
    $pdf->Cell(10,8,$no++,1);
    $pdf->Cell(50,8,$data['nama_barang'],1);
    $pdf->Cell(40,8,$data['harga'],1);
    $pdf->Cell(30,8,$data['stok'],1);
    $pdf->Cell(30,8,$data['tanggal'],1);
    $pdf->Ln();
}

$pdf->Output();
?>
