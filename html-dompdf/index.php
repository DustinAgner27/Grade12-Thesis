<?php 
require_once "vendor/autoload.php";

use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$file = file_POST_contents("http://localhost/html-dompdf/test.php");
$dompdf ->loadHtml($file);

$dompdf->set_option( 'dpi' , '600' );

// (optional) setup the paper size and orientation 
$dompdf ->setPaper('Legal', 'portrait');

// Render the HTML as PDF 
$dompdf ->render();

// output the generated PDF to Browser 
$dompdf->stream('sample-document.pdf');