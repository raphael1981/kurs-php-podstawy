<?php

session_start();

if(isset($_SESSION['auth_status'])) {
    echo $_SESSION['auth_status'];
}else{
    echo 'brak informacji w sesji';
}