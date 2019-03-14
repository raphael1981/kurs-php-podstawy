<?php

class Group{
    
    private $students = [];
    
    public function addStudentToGroup(Student $st){
        array_push($this->students, $st);
    }
    
    public function findStudentByName($name){

        
        $sob = null;
        
        foreach($this->students as $s){
            
            if($name==$s->name){
                $sob = $s;
            }
            
        }
        
        
        return $sob;
        
    }
    
}