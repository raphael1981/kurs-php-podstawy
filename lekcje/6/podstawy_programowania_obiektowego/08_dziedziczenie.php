<?php

class PersonClass
{

    protected $name;
    protected $email;
    protected $pesel;

    function __construct($pesel)
    {
        $this->pesel = $pesel;
    }

    protected function addToBase($db_table){
        //dodaj od odpowiedniej tabeli
        echo 'dodaje do tabeli '.$db_table.'<br>';
    }

}

class Student extends PersonClass {

    function __construct($pesel)
    {
        parent::__construct($pesel);
    }


    function addStudentToBase(){
        //dodanie do tabeli studentów
        //inna logika
        $this->addToBase('students');
    }

}

class Teacher extends PersonClass {

    function __construct($pesel)
    {
        parent::__construct($pesel);
    }

    function addTeacherToBase(){
        //dodanie do tabeli nauczycieli
        //inna logika
        $this->addToBase('teachers');
    }

}


$student = new Student(67457356);
$student->addStudentToBase();

$teacher = new Teacher(67457356);
$teacher->addTeacherToBase();

