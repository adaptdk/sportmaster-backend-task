<?php

namespace App\DataExamples\Cart;

/**
 * Class Cart.
 *
 * @package App\DataExamples\Cart
 */
class Cart
{

    /**
     * Products in cart.
     *
     * @var Product[]
     */
    private array $products;

    /**
     * Cart constructor.
     *
     * @param array $products
     *  Products in cart.
     */
    public function __construct(array $products)
    {
        $this->products = $products;
    }

    /**
     * Get products.
     *
     * @return array
     *  List of products.
     */
    public function getProducts(): array
    {
        return $this->products;
    }
}
