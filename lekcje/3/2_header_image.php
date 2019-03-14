<?php

header('Content-type: image/jpg');

$img = file_get_contents(__DIR__.'/pobrane.jpg');

echo $img;