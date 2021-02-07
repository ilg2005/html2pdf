<?php
require_once "vendor\autoload.php";

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$options = $dompdf->getOptions();
$options->setDefaultFont('Roboto');

$options->setIsPhpEnabled(true);

$dompdf->setOptions($options);

$html = file_get_contents('application.php');
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

$output = $dompdf->output();
file_put_contents("output.pdf", $output);
