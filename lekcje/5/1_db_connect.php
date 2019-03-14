<?php

$dbh = new PDO('mysql:host=localhost;dbname=base_blog', 'root', '');

$dbh->query('SET NAMES utf8');

$res = $dbh->query('SELECT * from users');

foreach($res as $k=>$u){
    echo '<pre>';
    print_r($u);
    echo '</pre>';
}