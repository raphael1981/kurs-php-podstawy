<?php

header('Content-type: application/pdf');

$pdf = file_get_contents(__DIR__.'/lorem-ipsum.pdf');

echo $pdf;