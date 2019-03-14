<?php

class School extends Database{
    
    protected $table = 'schools';
    
    function __construct(){
        parent::__construct();
    }
    
    function createRecord($array){
        parent::createRecord($array);
    }
    
}