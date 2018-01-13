<?php
require_once('fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image(base_url().'/application/libraries/head.png',5,6,200);
    // Arial bold 15
    // $this->SetFont('Arial','B',15);
    // // Line break
    // $this->Ln(30);
    // // Move to the right
    // $this->Cell(80);
    // // Title
    // $this->Cell(30,10,'Title',1,0,'C');
    // Line break
    $this->Ln(30);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
// $pdf = new PDF('P','mm','A4');
// $pdf->AliasNbPages();
// $pdf->AddPage();
// $pdf->SetFont('Times','B',12);
// // Set font
// // $pdf->SetFont('Arial','B',16);
// // Move to 8 cm to the right
// $pdf->Cell(80);
// // Centered text in a framed 20*10 mm cell and line break
// //margin left right, margin top bottom, text, border, line break
// $pdf->Cell(20,0,'Bissmillahirrahmanirrahim',0,1,'C');
// $pdf->ln(5);
// $pdf->Cell(80);
// // Centered text in a framed 20*10 mm cell and line break
// $pdf->Cell(20,0,'FORMULIR PENDAFTARAN SANTRI BARU',0,1,'C');
// $pdf->ln(5);
// $pdf->Cell(80);
// // Centered text in a framed 20*10 mm cell and line break
// $pdf->Cell(20,0,'TAHUN PELAJARAN 2018/2019',0,1,'C');


// $pdf->Output();
?>