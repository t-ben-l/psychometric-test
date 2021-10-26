<?php

 require 'print.php';             
require ('fpdf.php');
/*
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'hello bhuda');
$pdf->Output();

*/
class PDF extends FPDF
{
function Header()
{
    global $title;

    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Calculate width of title and position
    $w = $this->GetStringWidth($title)+6;
    $this->SetX((210-$w)/2);
    // Colors of frame, background and text
    $this->SetDrawColor(0,80,180);
    $this->SetFillColor(230,230,0);
    $this->SetTextColor(220,50,50);
    // Thickness of frame (1 mm)
    $this->SetLineWidth(1);
    // Title
    $this->Cell($w,9,'PSYCHOMETRIC TEST RESULT ',1,1,'C',true);
    // Line break
    $this->Ln(10);
}

function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Text color in gray
    $this->SetTextColor(128);
    // Page number
    $this->Cell(0,10,'PSYCOMETRIC tEST RESULT ',0,0,'C');
}

function ChapterTitle()
{
    // Arial 12
    $this->SetFont('Arial','',12);
    // Background color
    $this->SetFillColor(200,220,255);
    // Title
    $this->Cell(0,6,"TEST RESULT ",0,1,'L',true);
    // Line break
    $this->Ln(4);
}

function ChapterBody($file)
{
    // Read text file
   // $txt = file_get_contents('20k_c1.txt');
    // Times 12
     $txt = $file;
    $this->SetFont('Times','',12);
    // Output justified text
    $this->MultiCell(0,5,$txt);
    // Line break
    $this->Ln();
    // Mention in italics
    $this->SetFont('','I');
    $this->Cell(0,5,'(write your answer below) ');
   
}

function PrintChapter($num, $title, $file)
{
    $this->AddPage();
    $this->ChapterTitle($num,$title);
    $this->ChapterBody($file);
}
}
  $rec = "submm";
        if (isset($_POST['submm']))
        {
            $n = $_GET['name'];
            $s = $_GET['surname'];
            $e = $_GET['email'];
            $score = $_GET['score'];
            

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$title = 'PSYCHOMETRIC TES RESUTS';
$pdf->SetTitle($title);
$pdf->SetAuthor('Jules Verne');
$pdf->Cell(40,10,$n.' '.$s);
$pdf->Cell(41,10,' test score '.$score.'%');
//$pdf->Cell(41,10,' email '.$e);
//$pdf->PrintChapter();
$pdf->Output();
          //  $print = new pd($n,$s,$e,$score);
        }



?>