<?php

class Group extends Database{
    
    protected $table = 'groups';
    
    function __construct(){
        parent::__construct();
    }
    
    function createRecord($array){
        parent::createRecord($array);
    }
    
}