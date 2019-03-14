<?php

header('Content-type: application/json');

$cart = [
    [
        'id'=>1,
        'name'=>'Jabłko',
        'price'=>1.20,
        'quantity'=>10
    ],
    [
        'id'=>2,
        'name'=>'Gruszka',
        'price'=>2.00,
        'quantity'=>10
    ],
    [
        'id'=>3,
        'name'=>'Śliwka',
        'price'=>0.80,
        'quantity'=>25
    ],
    [
        'id'=>4,
        'name'=>'Ananas',
        'price'=>6.70,
        'quantity'=>5
    ],
    [
        'id'=>5,
        'name'=>'Mango',
        'price'=>5.20,
        'quantity'=>2
    ]
];

echo json_encode($cart);