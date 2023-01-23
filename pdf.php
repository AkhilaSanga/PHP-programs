<!DOCTYPE html>
<html>
<body>
<?php
	require('fpdf.php');
	$pdf=new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(60,10,'Hello PHP World!',1,1,'C');
	$pdf->Output();
?>
</body>
</html>n