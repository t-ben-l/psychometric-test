<?php




class pd
    
{
    
    function __constructor ($name,$surname, $email, $score)
        
    {
        
require ('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,$name.' '.$surname);
$pdf->Cell(40,10,' test score '.$score);
$pdf->Output();
        
    }



}

?>