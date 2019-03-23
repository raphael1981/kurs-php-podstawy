<?php
/*
 * metody statyczne mogą być prywatne lub publiczne
 * ale nie mają dostępu do pozostałych metod
 * chyba że są to metody statyczne
 * natomiast metody nie statyczne mają dostęp do statycznych
*/



class PersonHelper{

    public static function checkIsPersonEmailOk($email){

        $regex = "/^[0-9a-z_.-]+@[0-9a-z.-]+\.[a-z]{2,3}$/i";

        if(preg_match_all($regex,$email)){
            return true;
        }

        return false;
    }

}



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


}

//tworzenie obiektu klasy PersonClass jest także nazywana instancją klasy - przekazując wartosc do konstruktora
$person = new PersonClass(45354743573453754);

//przypisywanie właściwości w tym przypadku prywatnych
$person->name = 'Tom';
//sprawdzamy czy email ok
if(PersonHelper::checkIsPersonEmailOk('test@wp.pl')) {
    $person->email = 'exemple@wp.pl';
}

//tworzenie obiektu klasy PersonClass jest także nazywana instancją klasy - przekazując wartosc do konstruktora
$person2 = new PersonClass(45354743573453754);

//przypisywanie właściwości w tym przypadku publicznych
$person2->name = 'Tom';
//sprawdzamy czy email ok
if(PersonHelper::checkIsPersonEmailOk('test@wp')) {
    $person2->email = 'test@wp';
}else{
    echo 'email nie jest poprawny test@wp';
}


