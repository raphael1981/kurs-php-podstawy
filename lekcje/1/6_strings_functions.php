<?php


//explode
//strpos
//strlen
//trim
//str_replace
//substr
//sprintf
//number_format

$s = 'abcdefghijklmn';

echo substr($s,0,2); //ab - zaczynamy od pierwszeggo znaku i pobieramy łańcuch długości 2 znaków
echo '<br>';
echo substr($s,-2,2); //mn - zaczynamy od znaku 2 od końca i pobiermy łańcuch długości 2 znaków
echo '<br>';
echo substr($s, 1,-1); //bcdefghijklm - zaczynamy od znaku 2 i poberamy łańcuch długosci liczy z różnicy(długość całego - 1)
echo '<br>';
echo substr($s, -4,-2); //kl - zaczynamy od znaku 4 od końca i poberamy łańcuch długosci liczy z różnicy(długość całego - 2)
echo '<br>';

echo strtoupper($s); // kowersja do dużych liter - strtolower funckacaj odwrotna

echo '<hr>';

$str_to_explode = 'Janek,Franek,Tytus,Romek,Atomek'; //funkcja rozdzielająca tsring po znaku tworzą tablicę
$ex_array = explode(',',$str_to_explode);

//odwrotność funcki rozdzielającej

$implode_string = implode('@',$ex_array);

echo $implode_string;

echo '<pre>';

print_r($ex_array);

echo '</pre>';

echo '<hr>';

// podmiana w łańcuchu znaków
$to_replace = 'fg';

echo str_replace($to_replace,'@',$s);

echo '<br>';

//szukanie domeny w adresie email
$email = 'test.22@example.com.pl';
$arr = explode('@',$email);
echo $arr[count($arr)-1];


echo '<hr>';

echo substr($s,0,2); //ab - zaczynamy od pierwszeggo znaku i pobieramy łańcuch długości 2 znaków
echo '<br>';
echo substr($s,-2,2); //lm - zaczynamy od znaku 2 od końca i pobiermy łańcuch długości 2 znaków
echo '<br>';
echo substr($s, 1,-1); //bcdefghijklm - zaczynamy od znaku 2 i poberamy łańcuch długosci liczy z różnicy(długość całego - 1)
echo '<br>';
echo substr($s, -4,-2); //kl - zaczynamy od znaku 4 od końca i poberamy łańcuch długosci liczy z różnicy(długość całego - 2)
echo '<br>';

$find = 'cd';
$pos = strpos($s,$find);
$length = strlen($find);
echo substr($s, $pos,$length);

echo '<br>';

//szukanie domeny w adresie email
$email = 'test.22@example.com.pl';
$pos_at = strpos($email,'@');
echo substr($email, $pos_at+1);

echo '<hr>';

//Wypełnianie tekstu danymi ze zmiennych
$id = 800035679;
$name = 'Jan';

$format = '%s twój numer id to %d';
echo sprintf($format, $name, $id);

echo '<hr>';

//format wyświelania liczby - zwaraca liczbę w postaci string
$number = 5111234.56;
$nr_format = number_format($number, 2, ',', ' ');
echo $nr_format;
echo '<br>';
echo gettype($nr_format);