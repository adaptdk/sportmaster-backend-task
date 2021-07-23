<?php

/**
 * Example with two identical products.
 */

use App\DataExamples\Cart\Cart;
use App\DataExamples\Cart\Product;
use App\DataExamples\Store\Inventory;
use App\DataExamples\Store\Store;

$cart = new Cart(
    [
        new Product(992994, '99999199811'),
        new Product(992994, '99999199811'),
    ]
);

$stores1 = new Store(
    1,
    'Store 1',
    [
        new Inventory(992994, '99999199811', 1),
    ]
);

$stores2 = new Store(
    2,
    'Store 2',
    [
        new Inventory(992994, '99999199811', 1),
    ]
);

$storesPriorityList = [
    $stores1,
    $stores2,
];

/**
 * Result:
 *
 * First product in cart will be assigned to Store1, Second product in cart will be assigned to Store2.
 */
