<?php 

require_once 'C:\Users\infoecia\Desktop\dompdf\dompdf\autoload.inc.php';
require_once './pdf.php';

use Dompdf\Dompdf;


$pdf = new Dompdf();

$html =file_get_contents('./pdf.php');
$pdf->load_html($layout);
$pdf->render();



$pdf->setPaper('A4', 'landscape');

// Renderizando o HTML como PDF

$pdf->render();
$pdf->stream();
?>
