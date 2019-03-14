<?php


require_once("Student.php");


$s1 = new Student([
    'name'=>'Tom',
    'email'=>'test@wp.pl'
]);

$s1->email = 'inny@wp.pl';

$s1->wystawOcene([
    'przedmiot'=>'Bio',
    'ocena'=>3
]);

if($s1->getOcenaByName('Bio')['success']){
    
}else{
    
}