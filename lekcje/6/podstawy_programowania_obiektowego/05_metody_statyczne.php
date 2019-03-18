<?php
/*
 * metody statyczne mogą być prywatne lub publiczne
 * ale nie mają dostępu do pozostałych metod
 * chyba że są to metody statyczne
 * natomiast metody nie statyczne mają dostęp do statycznych
*/
class PersonClass{

    //własciwosci klasy (imie i email)
    public $name;
    public $email;
    private $pesel;

    function __construct($pesel)
    {
        $this->pesel = $pesel;
    }

    public function addPersonToDbSendEmail(){

        if($this->email && $this->name) {
            //tworzenie tokena np. do adresu potwierdzania rejestracji
            $token = self::makeEmailToken($this->email, $this->name);
        }else {
            //błąd
            throw new Exception('nie w pełni skonstruowany obiekt');
        }

        $this->sendEmailToPerson($token);
        $this->addToBase();
    }

    private function sendEmailToPerson($token){
        //wysyłamy email
    }

    private function addToBase(){
        //dodajemy do bazy
    }

    private static function makeEmailToken($email,$name){
        return md5($email.$name);
    }

}

//tworzenie obiektu klasy PersonClass jest także nazywana instancją klasy - przekazując wartosc do konstruktora
$person = new PersonClass(45354743573453754);

//przypisywanie właściwości w tym przypadku publicznych
$person->name = 'Tom';
$person->email = 'exemple@wp.pl';

$person->addPersonToDbSendEmail();


