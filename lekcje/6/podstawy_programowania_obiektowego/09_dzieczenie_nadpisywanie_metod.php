<?php

class PersonClass
{

    protected $proffesion;
    protected $pesel;

    function __construct($pesel,$proffesion)
    {
        $this->pesel = $pesel;
        $this->proffesion = $proffesion;
    }

    public function showPersonInfo(){
        return 'Osoba - pesel:'.$this->pesel.' email:'.$this->proffesion.'<br>';
    }


}

class Student extends PersonClass {

    function __construct($pesel,$proffesion)
    {
        parent::__construct($pesel,$proffesion);
    }

    //w tym miejscu przepisujemy metodę showPersonInfo modyfikując jej funkcjonalność
    public function showPersonInfo(){
        return 'Student - pesel:'.$this->pesel.' email:'.$this->proffesion.'<br>';
    }

}

class Teacher extends PersonClass {

    function __construct($pesel,$proffesion)
    {
        parent::__construct($pesel,$proffesion);
    }



}


$person = new PersonClass(454664,'kierowca');
echo $person->showPersonInfo();


$student = new Student(67457356,'handlowiec');
echo $student->showPersonInfo();

$teacher = new Teacher(67457356, 'nauczyciel');
echo $teacher->showPersonInfo();

