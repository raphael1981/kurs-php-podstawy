<?php

interface CrudInterface{

    public function create($array);
    public function read();
    public function update($pesel,$array);
    public function delete();

}

class Person implements CrudInterface{

    public $name;
    public $email;
    private $pesel;

    function __construct($pesel=null)
    {
        $this->pesel = $pesel;

    }

    public function create($array){
        //utwórz osobę
    }

    public function read(){
        //odczytaj dane
    }

    public function update($pesel,$array){
        //zmień dane osoby o peselu
    }

    public function delete(){
        //usuń osobę po peselu
    }

    private function getPersonByPesel(){
        //pobieranie z bazy
        $array = [
            'email'=>'test@wp.pl',
            'name'=>'Tom'
        ];
        $this->email = $array['email'];
        $this->name = $array['name'];
    }

}

$person = new Person(34343434);
$person->delete();

$person2 = new Person();
$person2->create([
   'email'=>'j@wp.pl',
   'name'=>'John',
   'pesel'=>466464646
]);
