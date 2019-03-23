<?php

$array = [
    'name'=>'Bob',
    'email'=>'test@wp.pl',
    'id_number'=>97465
];

$j = '{
	"name": "Bob",
	"email": "test@wp.pl",
	"id_number": 97465,
	"oceny": [{
			"przedmiot": "mat",
			"ocena": 4
		},
		{
			"przedmiot": "pol",
			"ocena": 5
		}
	]
}';


$json = json_encode($array);

echo gettype($array);
echo '<br>';
echo gettype($json);
echo '<br>';
echo $json;
echo '<br>';

$decode_to_array = json_decode($json,true);
$decode_to_stdClass = json_decode($json);


echo '<pre>';

print_r(json_decode($j));

print_r($decode_to_array);
print_r($decode_to_stdClass);

echo '</pre>';

$w = file_get_contents('https://samples.openweathermap.org/data/2.5/weather?q=London,uk&appid=b6907d289e10d714a6e88b30761fae22');

echo '<pre>';

print_r(json_decode($w));

echo '</pre>';