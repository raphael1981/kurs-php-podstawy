<?php

require_once("classes/Database.php");
require_once("classes/Student.php");
require_once("classes/Group.php");
require_once("classes/School.php");

$s1 = new School();
$s1->createRecord([
    'name' => 'Nazwa szkoły',
    'registration_number' => 4466468999999999
]);


echo $s1->getId();
