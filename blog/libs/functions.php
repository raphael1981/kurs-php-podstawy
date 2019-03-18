<?php

function checkAndLogin($dbh,$post){
    
    $arr = [];
    
    $res = $dbh->prepare("SELECT * FROM `users` WHERE `email`='".$post['email']."'");
    $res->execute();
    if($res->rowCount()!=0){
        
        $user = $res->fetch();
        
        if($user['password'] === md5($post['password'])){
            
            $arr['success']=true;
            $arr['user'] = $user;
            
        }else{
            
            $arr['success']=false;
            
        }
        
    }else{
        
        $arr['success']=false;
        
    }
    
    return $arr;
    
}

function getCategories($dbh){
    
    $res = $dbh->prepare('SELECT * FROM `categories`');
    $res->execute();
    return $res->fetchAll();
    
}

function addNewPost($dbh,$post,$uid){
    
    $sql = "INSERT INTO `posts`";
    $sql .= "(`user_id`,`title`,`intro`,`content`,`created_at`)";
    $sql .= "VALUES";
    $sql .= "(".$uid.",'".$post['title']."','".$post['intro']."','".$post['content']."',NOW())";
    
    $dbh->exec($sql);
    
}