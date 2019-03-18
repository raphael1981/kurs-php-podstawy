<?php
//klasa bazowa można utworzyć z niej obiekt jednak nie możemy używać metod i własciwosci protected z poza klasy
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

    //wykonanie addToBase można wywołąć za pośrednictwem prywatnej
    public function addOtherToBase($db_table){
        $this->addToBase($db_table);
    }

}
//klasa dziedzicząca po PersonClass bardziej szczegółowa i np. posidajaca dodatkowe metody itd
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


$person = new PersonClass(454664);
$person->addOtherToBase('inna_tabel');


$student = new Student(67457356);
$student->addStudentToBase();

$teacher = new Teacher(67457356);
$teacher->addTeacherToBase();

