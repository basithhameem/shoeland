
<?php
require('fpdf/fpdf.php');
require('dbConnect.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('logo.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(50);
    // Title
    $this->Cell(100,10,'Shoeland App Users',1,0,'C');
    // Line break
    $this->Ln(30);
    $this->SetFont('Arial','B',11);
    $this->SetFillColor(180,180,255);
    $this->SetDrawColor(50,50,100);
    $this->Cell(10,5,'ID',1,0,'',true);
    $this->Cell(50,5,'Name',1,0,'',true);
    $this->Cell(40,5,'Place',1,0,'',true);
    $this->Cell(65,5,'Email',1,0,'',true);
    $this->Cell(30,5,'Phone',1,0,'',true);
    $this->Ln(10);
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
$pdf = new PDF('p','mm','A4');
$pdf->AliasNbPages();
$pdf->SetAutoPageBreak(true,15);
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->SetDrawColor(50,50,100);
$query=mysqli_query($con,"select * from users");
while ($data=mysqli_fetch_array($query)){
  $pdf->Cell(10,5,$data['id'],1,0);
  $pdf->Cell(50,5,$data['Name'],1,0);
  $pdf->Cell(40,5,$data['Place'],1,0);
  $pdf->Cell(65,5,$data['email'],1,0);
  $pdf->Cell(30,5,$data['Phone'],1,1);
}

$pdf->Output();
?>
