<?php

namespace App\DataExamples\Cart;

use App\DataExamples\Store\Store;

/**
 * Class Product.
 *
 * @package App\DataExamples\Cart
 */
class Product
{
    
    /**
     * Product identifier.
     *
     * @var int
     */
    private int $sdk;

    /**
     * Product size identifier.
     *
     * @var string
     */
    private string $sku;

    /**
     * Responsible store for shipping this product.
     * 
     * @var null|Store
     */
    private ?Store $store = null;

    /**
     * Product constructor.
     *
     * @param int $sdk
     *  Product identifier.
     * @param string $sku
     *  Product size identifier.
     */
    public function __construct(int $sdk, string $sku)
    {
        $this->sdk = $sdk;
        $this->sku = $sku;
    }

    /**
     * Get product identifier.
     *
     * @return int
     *  Product identifier.
     */
    public function getSdk(): int
    {
        return $this->sdk;
    }

    /**
     * Get product size identifier.
     *
     * @return string
     *  Size identifier.
     */
    public function getSku(): string
    {
        return $this->sku;
    }

    /**
     * Get store which will be responsible for shipment.
     *
     * If store is null, that means there is no stores which could be assigned with this responsibility.
     *
     * @return Store|null
     *  Store.
     */
    public function getStore(): ?Store
    {
        return $this->store;
    }

    /**
     * Set store which will be responsible for shipping this product.
     *
     * @param Store|null $store
     */
    public function setStore(?Store $store): void
    {
        $this->store = $store;
    }
}
