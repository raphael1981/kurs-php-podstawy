<?php
//klasa abstrakcyjna nie może tworzyć obiektu jest tylko rodzajem szablony dla klasy potomnej
abstract class PersonAbsClass{

    //klasy abstarkcyjne mogą mieć również metody i własciwosci protected
    protected $info_about_datebase = 'nazwa_bazy_danych';

    //abstract metody które muszą być zaimplementowane jak w interfejsach
    abstract function getEmail();
    abstract function getName();

    public function showPersonInfo(){
        return $this->getName().': '.$this->getEmail();
    }
}

class Student extends PersonAbsClass {

    private $email;
    private $name;

    function __construct($email,$name)
    {
        $this->email = $email;
        $this->name = $name;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getName(){
        return $this->name;
    }

    function showInfoAboutDatabase(){
        echo $this->info_about_datebase;
    }

}


$student = new Student('t@wp.pl','Bob');
echo $student->showPersonInfo();
echo '<br>';
echo $student->showInfoAboutDatabase();