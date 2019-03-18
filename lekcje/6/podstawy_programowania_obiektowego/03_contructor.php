<?php

class PersonClass{

    //własciwosci klasy (imie i email)
    public $name;
    public $email;
    private $pesel;

    function __construct($pesel)
    {
        $this->pesel = 738563658;
    }



}

//klasa w której konstruktor posiada wartosc domyślną
class PersonOtherClass{

    //własciwosci klasy (imie i email)
    public $name;
    public $email;
    private $pesel;

    function __construct($pesel=0)
    {
        $this->pesel = 738563658;
    }


    public function getPesel(){
        return $this->pesel;
    }

    public function setPesel($pesel){
        $this->pesel = $pesel;
    }

}

//tworzenie obiektu klasy PersonClass jest także nazywana instancją klasy - przekazując wartosc do konstruktora
$person = new PersonClass(45354743573453754);

//przypisywanie właściwości w tym przypadku prywatnych
$person->name = 'Tom';
$person->email = 'exemple@wp.pl';


//tworzenie obiektu klasy PersonOtherClass jest także nazywana instancją klasy - przekazując wartosc do konstruktora
$person2 = new PersonOtherClass();

//przypisywanie właściwości w tym przypadku publicznych
$person2->name = 'Tom';
$person2->email = 'exemple@wp.pl';
$person2->setPesel(76735673756);
echo $person2->getPesel();
