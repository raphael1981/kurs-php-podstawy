<?php

echo date('Y-m-d H:i:s');

$data1 = new DateTime('2018-12-24 22:00:00');
$data2 = new DateTime(date('Y-m-d H:i:s'));
$p = $data1->diff($data2);
$data1->add(new DateInterval('P6Y'));
echo '<pre>';
print_r($p);
print_r($data1);
echo '</pre>';