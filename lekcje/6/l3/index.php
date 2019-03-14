<?php

require_once("classes/Database.php");
require_once("classes/Student.php");
require_once("classes/Group.php");
require_once("classes/School.php");

$s1 = new School();
$s1->createRecord([
    'name'=>'Nazwa szkoły',
    'registration_number'=>microtime(),
    'created_at'=>date('Y-m-d H:i:s')
]);


