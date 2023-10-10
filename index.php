<?php

require_once __DIR__ . '/vendor/autoload.php';

$fileToLoad = 'i9-render-new.html';

$mpdf = new \Mpdf\Mpdf();
$stylesheet = file_get_contents('./css/sign-form-pdf.css');

$mpdf->WriteHTML($stylesheet,\Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->WriteHTML(file_get_contents($fileToLoad));
$mpdf->Output();
ini_set('memory_limit', '44M');