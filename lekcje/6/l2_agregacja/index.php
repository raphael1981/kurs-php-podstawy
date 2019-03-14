<?php

require_once("Student.php");
require_once("Group.php");


$s1 = new Student();
$s1->name = "Tom";
$s1->email = "t@wp.pl";

$s2 = new Student();
$s2->name = "Bob";
$s2->email = "b@wp.pl";

$s3 = new Student();
$s3->name = "John";
$s3->email = "j@wp.pl";

$g1 = new Group();

$g1->addStudentToGroup($s1);
$g1->addStudentToGroup($s2);
$g1->addStudentToGroup($s3);

$g2 = new Group();

$ns = $g1->findStudentByName('Bob');


$g2->addStudentToGroup($ns);


echo '<pre>';
print_r($g2);
echo '</pre>';