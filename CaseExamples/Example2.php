<?php

/**
 * Random store example.
 */

use App\DataExamples\Cart\Cart;
use App\DataExamples\Cart\Product;
use App\DataExamples\Store\Inventory;
use App\DataExamples\Store\Store;

$cart = new Cart(
    [
        new Product(992994, '99999199811'),
        new Product(993991, '99399199991'),
        new Product(992996, '99999191211'),
    ]
);

$stores1 = new Store(
    1,
    'Store 1',
    [
        new Inventory(992994, '99999199811', 10),
        new Inventory(993991, '99399199991', 10),
    ]
);

$stores2 = new Store(
    2,
    'Store 2',
    [
        new Inventory(992994, '99999199811', 10),
        new Inventory(993991, '99399199991', 10),
    ]
);

$stores3 = new Store(
    3,
    'Store 3',
    [
        new Inventory(992996, '99999191211', 10),
    ]
);

$storesPriorityList = [
    $stores1,
    $stores2,
    $stores3,
];

/**
 * Result:
 *
 * Product 992994 (99999199811) AND Product 993991 (99399199991) will be assigned to Store1 or Store2 randomly.
 * Product 992996 (99999191211) will be assigned to Store3.
 */
