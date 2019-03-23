<?php

//przykład przechowywania danych w obiekcje stdClass
$object = new stdClass();
$object->name = 'Rafał';
$object->email = "test@wp.pl";

echo '<pre>';

var_dump($object);
print_r($object); //uproszczona funkcja do podglądu złożonych struktur danych

echo '<pre>';

foreach($object as $k=>$v){
    echo $k."=>".$v;
}