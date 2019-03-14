<?php

class Student{
    
    public $name = null;
    public $email = null;
    private $oceny = [];
    
    function __construct($array){
        
        $this->name = $array['name'];
        $this->email = $array['email'];

    }
    
    
    function wystawOcene($array){

        if(array_key_exists($array['przedmiot'],$this->oceny)){
            array_push($this->oceny[$array['przedmiot']],$array['ocena']);
        }else{
            $this->oceny[$array['przedmiot']] = [];
            array_push($this->oceny[$array['przedmiot']],$array['ocena']);
        }
    }
    
    public function getOcenyByName($string){
        return $this->findOceny($string);
    }
    
    private function findOceny($string){

        if(array_key_exists($string,$this->oceny)){
            return $this->oceny[$string];
        }else{
            return [];
        }
        
    }
    
}