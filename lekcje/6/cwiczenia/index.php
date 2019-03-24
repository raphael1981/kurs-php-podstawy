<?php

class Ocena{

    public $przedmiot;
    public $ocena;

    function __construct($przedmiot,$ocena){
        $this->przedmiot = $przedmiot;
        $this->ocena = $ocena;
    }

}

class Student{

    private $name;
    private $email;
    private $oceny = [];
    private $raport = null;
    public $srednia = null;

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }

    public function addOcena(Ocena $ocena){
        array_push($this->oceny,$ocena);
    }

    public function setRaport(){
        $this->raport = $this->getOcenyRaport();
    }

    public function getOcenyRaport(){

        $array = [];
        /*
            [
                'mat'=>[
                    3,
                    4,
                    2
                ],
                'pol'=>[
                    2,
                    5
                ]
            ]
        */

        foreach($this->oceny as $v){

            if(array_key_exists($v->przedmiot,$array)){
                array_push($array[$v->przedmiot],$v->ocena);
            }else{
                $array[$v->przedmiot] = [];
                array_push($array[$v->przedmiot],$v->ocena);
            }

        }


        return $array;


    }

    public function getSrednia(){

        if(!is_null($this->raport)){

            $arr = [];

            foreach($this->raport as $k=>$v){

                $ile = count($v);
                $total = array_sum($v);
                array_push($arr,($total/$ile));

            }

            $sum = array_sum($arr);
            $this->srednia = $sum/count($arr);
            return $this->srednia;

        }else{

            throw new Exception('rób raport');

        }

    }

}

$oc1 = new Ocena('mat',4);
$oc2 = new Ocena('mat',3);
$oc3 = new Ocena('pol',3);
$oc4 = new Ocena('bio',5);


$s = new Student();
$s->addOcena($oc1);
$s->addOcena($oc2);
$s->addOcena($oc3);
$s->addOcena($oc4);
$s->setRaport();

echo $s->getSrednia();

// echo '<pre>';
// print_r($s->getOcenyRaport());
// echo '<pre>';

