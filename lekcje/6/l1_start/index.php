<?php


require_once("Student.php");


$s1 = new Student([
    'name' => 'Tom',
    'email' => 'test@wp.pl'
]);

$s1->email = 'inny@wp.pl';

$s1->wystawOcene([
    'przedmiot' => 'Bio',
    'ocena' => 3
]);

$s1->wystawOcene([
    'przedmiot' => 'Bio',
    'ocena' => 5
]);

$s1->wystawOcene([
    'przedmiot' => 'Mat',
    'ocena' => 5
]);

print_r($s1->getOcenyByName('Bio'));
print_r($s1->getOcenyZPrzedmiotow(['Fiz', 'Bio']));
