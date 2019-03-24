<?php


class PersonClass{

    //własciwosci klasy (imie i email)
    public $name;
    public $email;
    private $pesel;

    public function getPesel(){
        return $this->pesel;
    }

    public function setPesel($pesel){
        $this->pesel = $pesel;
    }

}

//tworzenie obiektu klasy PersonClass jest także nazywana instancją klasy
$person = new PersonClass();

//przypisywanie właściwości w tym przypadku publicznych
$person->name = 'Tom';
$person->email = 'exemple@wp.pl';

//ta próba przypisanie wartosci wyrzuci błąd (zakomentowane)
/*
$person->pesel = 67453547;
*/


//Jak dostać się do właści właściwośći prywatnej - za pomocą metody czyli z wnętrza klasy

$person->setPesel(76735673756);
echo $person->getPesel();



