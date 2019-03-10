<?php
echo '<pre>';
$array = [];
array_push($array,'test');
array_push($array,'test3');
array_unshift($array,'test4');
var_dump($array);
$array[1] = 'test2';
$array[0] = 'super test';

var_dump($array);

echo $array[0];

echo '</pre>';