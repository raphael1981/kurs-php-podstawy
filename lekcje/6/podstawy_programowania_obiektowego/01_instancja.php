<?php

class PersonClass{

    //własciwosci klasy (imie i email)
    public $name;
    public $email;


}

//tworzenie obiektu klasy PersonClass jest także nazywana instancją klasy
$person = new PersonClass();

//przypisywanie właściwości w tym przypadku publicznych
$person->name = 'Tom';
$person->email = 'exemple@wp.pl';

//wyświetlenie właściwości obiektu
echo $person->name;

//przepiywanie właściwosci obiektu
$person->name = 'Bob';


//tworzenie obiektu klasy PersonClass jest także nazywana instancją klasy - drugi odrębny obiekt
$person2 = new PersonClass();
$person2->name = 'John';
$person2->email = 'j@wp.pl';



