<?php

$array1 = [
    1,22,3,7,9,4,72,2,9,10
];

$array2 = [
    'Lorem',
    'Ipsum',
    'jest',
    'tekstem',
    'stosowanym',
    'jako',
    'przykładowy',
    'wypełniacz',
    'w',
    'przemyśle',
    'poligraficznym.',
    'Został',
    'po',
    'raz',
    'pierwszy',
    'użyty',
    'w',
    'XV',
    'w.',
    'przez',
    'nieznanego'
];

echo '<pre>';

print_r(array_chunk($array1,2));


$szukaj_1 = array_search('Został',$array2);
if($szukaj_1){
    echo 'zanaleziono na pozycji '.$szukaj_1;
}else{
    echo 'nie zanaleziono';
}

echo '<br>';

$szukaj_2 = array_search('Został',$array1);

if($szukaj_2){
    echo 'zanaleziono na pozycji '.$szukaj_2;
}else{
    echo 'nie zanaleziono';
}

sort($array2,SORT_STRING|SORT_FLAG_CASE);

print_r($array2);

$new_array = array_reverse($array2);
print_r($new_array);

sort($array1,SORT_NUMERIC);
print_r($array1);

$result = array_merge($array1, $array2);

print_r($result);
shuffle($result);
print_r($result);

echo '</pre>';