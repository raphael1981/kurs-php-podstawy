<?php

class Person{

    protected $name;
    protected $email;

    function __construct($name,$email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    protected function showPersonData(){
        return 'Osoba:'.$this->name.",".$this->email;
    }

}

class Student extends Person{

    private $number;

    function __construct($name,$email)
    {
        parent::__construct($name,$email);
    }

    function getStudentNumber(){
        return $this->number;
    }

    public function setStudentNumber($number){
        $this->number = $number;
    }
    

    public function showPerson(){
        return $this->showPersonData()." - to jest student";
    }

}

class Teacher extends Person{

    private $students = [];

    function __construct($name,$email)
    {
        parent::__construct($name,$email);
    }

    public function showPerson(){
        return $this->showPersonData()." - to jest nauczyciel";
    }

    function setStudent(Student $s){

        $bool = true;

        foreach($this->students as $v){
            if($v->getStudentNumber()==$s->getStudentNumber()){
                $bool = false;
            }
        }
        
        if($bool)
            array_push($this->students,$s);


    }

    public function showStudentsList(){

        $string = '';

        foreach($this->students as $s){

            $string .= $s->showPerson()." number:".$s->getStudentNumber()."<br>";

        }

        return $string;

    }

}

$s1 = new Student('Tom','t@wp.pl');
$s1->setStudentNumber(1);

$s2 = new Student('Bob','b@wp.pl');
$s2->setStudentNumber(2);

$s3 = new Student('John','j@wp.pl');
$s3->setStudentNumber(3);


$t = new Teacher('Henry','h@wp.pl');
$t->setStudent($s1);
$t->setStudent($s1);
$t->setStudent($s2);
$t->setStudent($s3);


echo $t->showStudentsList();
