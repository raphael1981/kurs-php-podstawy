<?php

class PersonClass{

    //własciwosci klasy (imie i email)
    public $name;
    public $email;
    private $pesel;

    function __construct($pesel)
    {
        $this->pesel = $pesel;
    }

    public function removePersonFromDB(){
        $this->makeSqlQueryToRemove();
    }

    private function makeSqlQueryToRemove(){
        /*
         * logika usuwania z bazy
         */
    }

}

//tworzenie obiektu klasy PersonClass jest także nazywana instancją klasy - przekazując wartosc do konstruktora
$person = new PersonClass(45354743573453754);

//przypisywanie właściwości w tym przypadku publicznych
$person->name = 'Tom';
$person->email = 'exemple@wp.pl';
$person->removePersonFromDB();