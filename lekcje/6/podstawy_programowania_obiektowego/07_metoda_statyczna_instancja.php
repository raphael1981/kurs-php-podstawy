<?php

class PersonClass{

    //własciwosci klasy (imie i email)
    public $name;
    public $email;
    private $pesel;

    public static function makeInstance($pesel){
        return new self($pesel);
    }

    function __construct($pesel)
    {
        $this->pesel = $pesel;
    }


}

//tworzenie obiektu klasy PersonClass jest także nazywana instancją klasy - przekazując wartosc do konstruktora za pośrednictwem metody staycznej
$person = PersonClass::makeInstance(76524752425);

//przypisywanie właściwości w tym przypadku publicznych
$person->name = 'Tom';
$person->email = 'exemple@wp.pl';
