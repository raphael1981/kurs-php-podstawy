<?php

class School extends Database{
    
    protected $table = 'schools';
    
    function __construct(){
        parent::__construct();
    }

    /*
    [
        'name'=>'nazwa',
        'number'=>75635763
    ]
    */
    
    function createRecord($array){
        parent::createRecord($array);
    }

    function getId(){
        return $this->id;
    }
    
}