<?php

class Student extends Database{
    
    protected $table = 'students';
    
    function __construct(){
        parent::__construct();
    }
    
    function createRecord($array){
        parent::createRecord($array);
    }
    
}