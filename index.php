<?php

require_once __DIR__ . '/vendor/autoload.php';

$fileToLoad = 'nc4-render.html';

$mpdf = new \Mpdf\Mpdf(
    [
        'margin_left' => 12,
        'margin_right' => 12,
        'margin_top' => 10,
        'margin_bottom' => 5,
        'margin_header' => 9,
        'margin_footer' => 9,
        'default_font_size' => 8,
        'default_font' => 'Times New Roman',
        'defaultfooterfontstyle' => 'N'
    ]
);

$mpdf->WriteHTML(file_get_contents($fileToLoad));
ob_clean();
$mpdf->Output();
ini_set('memory_limit', '44M');