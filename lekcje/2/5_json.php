<?php

$array = [
    'name'=>'Bob',
    'email'=>'test@wp.pl',
    'id_number'=>97465
];


$json = json_encode($array);

echo gettype($array);
echo '<br>';
echo gettype($json);

$decode_to_array = json_decode($json,true);
$decode_to_stdClass = json_decode($json);


echo '<pre>';

print_r($decode_to_array);
print_r($decode_to_stdClass);

echo '</pre>';