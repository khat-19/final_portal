<?php

$file = $_GET["file"] .".pdf";

// We will be outputting a PDF
header('Content-Type: application/octet-stream');

// It will be called downloaded.pdf
header('Content-Disposition: attachment; filename="result.pdf"');
header("Content-Length: " . filesize("result.pdf"));

$imagpdf = file_put_contents($image, file_get_contents($file));
readfile('result.pdf');

echo $imagepdf;
?>
