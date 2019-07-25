<?php

$cart = [
    [
        'id' => 1,
        'name' => 'Jabłko',
        'price' => 1.20,
        'quantity' => 10
    ],
    [
        'id' => 2,
        'name' => 'Gruszka',
        'price' => 2.00,
        'quantity' => 10
    ],
    [
        'id' => 3,
        'name' => 'Śliwka',
        'price' => 0.80,
        'quantity' => 25
    ],
    [
        'id' => 4,
        'name' => 'Ananas',
        'price' => 6.70,
        'quantity' => 5
    ],
    [
        'id' => 5,
        'name' => 'Mango',
        'price' => 5.20,
        'quantity' => 2
    ]
];

$suma = 0;

for ($i = 0; $i < count($cart); $i++) {

    $suma += $cart[$i]['quantity'] * $cart[$i]['price'];
}

echo number_format($suma, 2, '.', '');

echo '<hr>';

$magazyn = [1, 4, 5];
$suma2 = 0;

foreach ($cart as $k => $v) {
    if (in_array($v['id'], $magazyn)) {
        $suma2 += $v['quantity'] * $v['price'];
    }
}

echo number_format($suma2, 2, '.', '');
