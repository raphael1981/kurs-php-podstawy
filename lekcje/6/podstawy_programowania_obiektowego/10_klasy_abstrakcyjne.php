<?php

abstract class PersonAbsClass{

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

    function getEmail(){
        return $this->email;
    }

    function getName(){
        return $this->name;
    }

}


$student = new Student('t@wp.pl','Bob');
echo $student->showPersonInfo();