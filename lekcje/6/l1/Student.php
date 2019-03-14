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
        array_push($this->oceny, $array);
    }
    
    public function getOcenaByName($string){
        return $this->findOcena($string);
    }
    
    private function findOcena($string){
        
        $array = [];
        
        foreach($this->oceny as $k=>$o){
            
            if($o['przedmiot']==$string){
                
                $array['success'] = true;
                $array['ocena'] = $o['ocena'];
                
            }else{
                
                $array['success'] = false;
                
            }
            
        }
        
        return $array;
        
    }
    
}