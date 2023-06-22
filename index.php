<?php

require_once __DIR__ . '/vendor/autoload.php';

$fileToLoad = 'w4 render.html';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML(file_get_contents($fileToLoad));
$mpdf->Output();
ini_set('memory_limit', '44M');