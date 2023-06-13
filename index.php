<?php

require_once __DIR__ . '/vendor/autoload.php';

$fileToLoad = $_GET['fileToLoad'];

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML(file_get_contents($fileToLoad));
$mpdf->Output();