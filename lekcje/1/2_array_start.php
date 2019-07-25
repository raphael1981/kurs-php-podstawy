<?php
echo '<pre>';
$array = [];


array_push($array, 'test'); //dodanie nowego elementu do tablicy jako następny "na końcu"
array_push($array, 'test3'); //--||--
array_unshift($array, 'test4'); //dodanie nowego elementu do tablicy jako pierwszy element "na początku"

array_unshift($array, 'test5');

var_dump($array);

//tablica została wypełniona i wygląda tak [test4,test,test3] index[0,1,2]

$array[1] = 'test2'; // "test 2" nadpisuje wartość z indexem 1
$array[0] = 'super test'; // "super test" nadpisuje wartość z indexem 0
$array[] = 'cos';
$array[6] = 'cos6';

var_dump($array);

//wyświetleni wartosci z index 2

echo $array[2]; //

//tablice mogą mieć w php rożne typy wartośći i można ją od razu zdefiniować

$tab = [
  1,
  'tekst',
  [],
  4.5,
  true
];
//czyli tablica może zawierać jako wartosc inną tablicę


var_dump($tab);

//przykład tablicy asocjacyjnej która charakteryzuje się kluczami w postaci string


$arrayAssoc = [
  'name' => 'Bob',
  'email' => 'test@wp.pl',
  'id_number' => 97465
];

foreach ($arrayAssoc as $k => $v) {
  echo $k . "=>" . $v . '<br>';
}

print_r($arrayAssoc);

echo '</pre>';
