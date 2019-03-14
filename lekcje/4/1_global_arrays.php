<?php

//uruchamaimy możliwosć korzystania z globalnej tablicy sesje
session_start();

echo '<pre>';


print_r($_SERVER); //informacje od serwerze protokole przeglądarce otwierającej itd
print_r($_GET); // tablica get tworząca żądania typu get
print_r($_POST); // tablica przechowująca dane przesyłane postem np z formularza
print_r($_FILES); // tablica przesyłanych plików np z formularza
print_r($_COOKIE); // cookie
print_r($_SESSION); // sesja
print_r($_REQUEST); // dane o żądaniu $_GET + $_POST w jednym


echo '</pre>';