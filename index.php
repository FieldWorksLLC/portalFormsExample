<?php

require_once __DIR__ . '/vendor/autoload.php';

$fileToLoad = 'mow4-render.html';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML(file_get_contents($fileToLoad));
ob_clean();
$mpdf->Output();
ini_set('memory_limit', '44M');