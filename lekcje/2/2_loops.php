<?php

for($i=0;$i<20;$i++){
    echo $i;
}

echo '<hr>';

$array = [
    'Lorem',
    'Ipsum',
    'jest',
    'tekstem',
    'stosowanym',
    'jako'
];

foreach ($array as $key=>$value){
    echo $key.'=>'.$value.'<br>';
}